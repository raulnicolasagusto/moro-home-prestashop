<?php

namespace Symfony\Config\UxIcons;

require_once __DIR__.\DIRECTORY_SEPARATOR.'IconSetsConfig'.\DIRECTORY_SEPARATOR.'SuffixesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class IconSetsConfig 
{
    private $path;
    private $alias;
    private $iconAttributes;
    private $suffixes;
    private $_usedProperties = [];

    /**
     * The local icon set directory path.
     * (cannot be used with 'alias')
     * @example %kernel.project_dir%/assets/svg/acme
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): static
    {
        $this->_usedProperties['path'] = true;
        $this->path = $value;

        return $this;
    }

    /**
     * The remote icon set identifier.
     * (cannot be used with 'path')
     * @example simple-icons
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function alias($value): static
    {
        $this->_usedProperties['alias'] = true;
        $this->alias = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function iconAttributes(string $key, mixed $value): static
    {
        $this->_usedProperties['iconAttributes'] = true;
        $this->iconAttributes[$key] = $value;

        return $this;
    }

    /**
     * Suffix-based attributes (following Iconify naming conventions).
     * https://iconify.design/docs/libraries/tools/icon-set/themes.html
    */
    public function suffixes(string $suffix, array $value = []): \Symfony\Config\UxIcons\IconSetsConfig\SuffixesConfig
    {
        if (!isset($this->suffixes[$suffix])) {
            $this->_usedProperties['suffixes'] = true;
            $this->suffixes[$suffix] = new \Symfony\Config\UxIcons\IconSetsConfig\SuffixesConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "suffixes()" has already been initialized. You cannot pass values the second time you call suffixes().');
        }

        return $this->suffixes[$suffix];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('path', $value)) {
            $this->_usedProperties['path'] = true;
            $this->path = $value['path'];
            unset($value['path']);
        }

        if (array_key_exists('alias', $value)) {
            $this->_usedProperties['alias'] = true;
            $this->alias = $value['alias'];
            unset($value['alias']);
        }

        if (array_key_exists('icon_attributes', $value)) {
            $this->_usedProperties['iconAttributes'] = true;
            $this->iconAttributes = $value['icon_attributes'];
            unset($value['icon_attributes']);
        }

        if (array_key_exists('suffixes', $value)) {
            $this->_usedProperties['suffixes'] = true;
            $this->suffixes = array_map(fn ($v) => new \Symfony\Config\UxIcons\IconSetsConfig\SuffixesConfig($v), $value['suffixes']);
            unset($value['suffixes']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['alias'])) {
            $output['alias'] = $this->alias;
        }
        if (isset($this->_usedProperties['iconAttributes'])) {
            $output['icon_attributes'] = $this->iconAttributes;
        }
        if (isset($this->_usedProperties['suffixes'])) {
            $output['suffixes'] = array_map(fn ($v) => $v->toArray(), $this->suffixes);
        }

        return $output;
    }

}
