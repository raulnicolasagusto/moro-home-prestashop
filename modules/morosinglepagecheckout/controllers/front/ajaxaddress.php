<?php

class MorosinglepagecheckoutAjaxaddressModuleFrontController extends ModuleFrontController
{
    public $ajax = true;
    public $ssl = true;

    public function postProcess()
    {
        header('Content-Type: application/json');

        if (Tools::getValue('token') !== Tools::getToken(false)) {
            $this->renderJson([
                'success' => false,
                'errors' => ['form' => $this->module->l('La sesión expiró. Actualizá la página e intentá de nuevo.')],
            ]);
        }

        $data = $this->getPayload();
        $errors = $this->validatePayload($data);

        if (!empty($errors)) {
            $this->renderJson(['success' => false, 'errors' => $errors]);
        }

        $cart = $this->context->cart;

        if (!Validate::isLoadedObject($cart)) {
            $this->renderJson([
                'success' => false,
                'errors' => ['form' => $this->module->l('No se encontró un carrito activo.')],
            ]);
        }

        try {
            $customer = $this->resolveCustomer($data);
            $address = $this->saveAddress($customer, $data);

            $cart->id_customer = (int) $customer->id;
            $cart->id_address_delivery = (int) $address->id;
            $cart->id_address_invoice = (int) $address->id;
            $cart->secure_key = $customer->secure_key;
            $cart->update();

            $this->context->customer = $customer;
            $this->context->cookie->id_customer = (int) $customer->id;
            $this->context->cookie->customer_lastname = $customer->lastname;
            $this->context->cookie->customer_firstname = $customer->firstname;
            $this->context->cookie->logged = $customer->is_guest ? 0 : 1;
            $this->context->cookie->is_guest = $customer->is_guest ? 1 : 0;
            $this->context->cookie->passwd = $customer->passwd;
            $this->context->cookie->write();

            $this->renderJson([
                'success' => true,
                'id_address' => (int) $address->id,
            ]);
        } catch (Exception $exception) {
            PrestaShopLogger::addLog(
                'Moro single page checkout address error: ' . $exception->getMessage(),
                3,
                null,
                'Cart',
                (int) $cart->id,
                true
            );

            $this->renderJson([
                'success' => false,
                'errors' => ['form' => $this->module->l('No pudimos guardar la dirección. Revisá los datos e intentá nuevamente.')],
            ]);
        }
    }

    private function getPayload()
    {
        return [
            'email' => trim((string) Tools::getValue('email')),
            'newsletter' => (bool) Tools::getValue('newsletter'),
            'firstname' => trim((string) Tools::getValue('firstname')),
            'lastname' => trim((string) Tools::getValue('lastname')),
            'address1' => trim((string) Tools::getValue('address1')),
            'address2' => trim((string) Tools::getValue('address2')),
            'city' => trim((string) Tools::getValue('city')),
            'postcode' => trim((string) Tools::getValue('postcode')),
            'phone' => trim((string) Tools::getValue('phone')),
            'id_country' => (int) Tools::getValue('id_country', $this->getDefaultCountryId()),
            'id_state' => (int) Tools::getValue('id_state', 0),
        ];
    }

    private function validatePayload(array $data)
    {
        $errors = [];

        if (!Validate::isEmail($data['email'])) {
            $errors['email'] = $this->module->l('Ingresá un correo electrónico válido.');
        }
        if (!Validate::isCustomerName($data['firstname'])) {
            $errors['firstname'] = $this->module->l('Ingresá un nombre válido.');
        }
        if (!Validate::isCustomerName($data['lastname'])) {
            $errors['lastname'] = $this->module->l('Ingresá un apellido válido.');
        }
        if (!Validate::isAddress($data['address1'])) {
            $errors['address1'] = $this->module->l('Ingresá una dirección válida.');
        }
        if ($data['address2'] !== '' && !Validate::isAddress($data['address2'])) {
            $errors['address2'] = $this->module->l('Ingresá un dato adicional válido.');
        }
        if (!Validate::isCityName($data['city'])) {
            $errors['city'] = $this->module->l('Ingresá una ciudad válida.');
        }
        if (!Validate::isPostCode($data['postcode'])) {
            $errors['postcode'] = $this->module->l('Ingresá un código postal válido.');
        }
        if (!Validate::isPhoneNumber($data['phone'])) {
            $errors['phone'] = $this->module->l('Ingresá un teléfono válido.');
        }

        $country = new Country((int) $data['id_country']);
        if (!Validate::isLoadedObject($country) || !$country->active) {
            $errors['form'] = $this->module->l('El país configurado no está disponible.');
        }
        if ((int) $country->contains_states && (int) $data['id_state'] <= 0) {
            $errors['form'] = $this->module->l('Seleccioná una provincia para calcular el envío.');
        }

        return $errors;
    }

    private function resolveCustomer(array $data)
    {
        if ($this->context->customer && Validate::isLoadedObject($this->context->customer) && !$this->context->customer->is_guest) {
            $customer = $this->context->customer;
            $customer->firstname = $data['firstname'];
            $customer->lastname = $data['lastname'];
            $customer->newsletter = (bool) $data['newsletter'];
            $customer->update();

            return $customer;
        }

        if (Customer::customerExists($data['email'], false, true)) {
            throw new Exception('Registered customer email used without login.');
        }

        if ((int) $this->context->cart->id_customer > 0) {
            $customer = new Customer((int) $this->context->cart->id_customer);
            if (Validate::isLoadedObject($customer) && (bool) $customer->is_guest) {
                $customer->email = $data['email'];
                $customer->firstname = $data['firstname'];
                $customer->lastname = $data['lastname'];
                $customer->newsletter = (bool) $data['newsletter'];
                $customer->update();

                return $customer;
            }
        }

        $customer = new Customer();
        $customer->firstname = $data['firstname'];
        $customer->lastname = $data['lastname'];
        $customer->email = $data['email'];
        $customer->newsletter = (bool) $data['newsletter'];
        $customer->is_guest = true;
        $customer->active = true;
        $customer->id_default_group = (int) Configuration::get('PS_GUEST_GROUP');
        $customer->groupBox = [(int) Configuration::get('PS_GUEST_GROUP')];
        $customer->passwd = $this->get('hashing')->hash(Tools::passwdGen(16));

        if (!$customer->add()) {
            throw new Exception('Unable to create guest customer.');
        }

        return $customer;
    }

    private function saveAddress(Customer $customer, array $data)
    {
        $address = $this->getEditableAddress($customer);
        $address->id_customer = (int) $customer->id;
        $address->id_country = (int) $data['id_country'];
        $address->id_state = (int) $data['id_state'];
        $address->alias = 'Checkout Moro Home';
        $address->firstname = $data['firstname'];
        $address->lastname = $data['lastname'];
        $address->address1 = $data['address1'];
        $address->address2 = $data['address2'];
        $address->postcode = $data['postcode'];
        $address->city = $data['city'];
        $address->phone = $data['phone'];
        $address->phone_mobile = $data['phone'];

        $validationErrors = $address->validateController();
        if (!empty($validationErrors)) {
            throw new Exception('Address validation failed.');
        }

        if ((int) $address->id > 0) {
            if (!$address->update()) {
                throw new Exception('Unable to update address.');
            }
        } elseif (!$address->add()) {
            throw new Exception('Unable to create address.');
        }

        return $address;
    }

    private function getEditableAddress(Customer $customer)
    {
        $idAddress = (int) $this->context->cart->id_address_delivery;

        if ($idAddress > 0 && Customer::customerHasAddress((int) $customer->id, $idAddress)) {
            $address = new Address($idAddress);

            if (Validate::isLoadedObject($address) && !$address->isUsed()) {
                return $address;
            }
        }

        return new Address();
    }

    private function getDefaultCountryId()
    {
        $argentinaId = (int) Country::getByIso('AR');

        if ($argentinaId > 0) {
            return $argentinaId;
        }

        return (int) Configuration::get('PS_COUNTRY_DEFAULT');
    }

    private function renderJson(array $payload)
    {
        exit(json_encode($payload));
    }
}
