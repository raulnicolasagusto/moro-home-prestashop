<?php

namespace Symfony\Config\UxIcons\IconSetsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SuffixesConfig 
{
    private $iconAttributes;
    private $_usedProperties = [];

    /**
     * @return $this
     */
    public function iconAttributes(string $key, mixed $value): static
    {
        $this->_usedProperties['iconAttributes'] = true;
        $this->iconAttributes[$key] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('icon_attributes', $value)) {
            $this->_usedProperties['iconAttributes'] = true;
            $this->iconAttributes = $value['icon_attributes'];
            unset($value['icon_attributes']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['iconAttributes'])) {
            $output['icon_attributes'] = $this->iconAttributes;
        }

        return $output;
    }

}
