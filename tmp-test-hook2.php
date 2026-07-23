<?php
require __DIR__ . '/config/config.inc.php';
$context = Context::getContext();
if (!$context->language || !Validate::isLoadedObject($context->language)) {
    $context->language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
}
if (!$context->shop || !Validate::isLoadedObject($context->shop)) {
    $context->shop = new Shop((int)Configuration::get('PS_SHOP_DEFAULT'));
}
Shop::setContext(Shop::CONTEXT_SHOP, (int)$context->shop->id);

echo "=== Hook::exec('displayBanner') ===\n";
$out = Hook::exec('displayBanner');
echo "length=" . strlen((string)$out) . "\n";
echo "out=" . substr((string)$out, 0, 500) . "\n";

echo "=== module list for displayBanner ===\n";
$mods = Hook::getHookModuleExecList('displayBanner');
echo json_encode($mods) . "\n";
