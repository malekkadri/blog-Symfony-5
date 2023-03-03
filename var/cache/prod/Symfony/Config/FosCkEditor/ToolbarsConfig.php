<?php

namespace Symfony\Config\FosCkEditor;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Toolbars'.\DIRECTORY_SEPARATOR.'ConfigsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Toolbars'.\DIRECTORY_SEPARATOR.'ItemsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ToolbarsConfig 
{
    private $configs;
    private $items;
    
    public function configs(string $name, array $value = []): \Symfony\Config\FosCkEditor\Toolbars\ConfigsConfig
    {
        if (!isset($this->configs[$name])) {
            return $this->configs[$name] = new \Symfony\Config\FosCkEditor\Toolbars\ConfigsConfig($value);
        }
        if ([] === $value) {
            return $this->configs[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "configs()" has already been initialized. You cannot pass values the second time you call configs().');
    }
    
    public function items(string $name, array $value = []): \Symfony\Config\FosCkEditor\Toolbars\ItemsConfig
    {
        if (!isset($this->items[$name])) {
            return $this->items[$name] = new \Symfony\Config\FosCkEditor\Toolbars\ItemsConfig($value);
        }
        if ([] === $value) {
            return $this->items[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "items()" has already been initialized. You cannot pass values the second time you call items().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['configs'])) {
            $this->configs = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\Toolbars\ConfigsConfig($v); }, $value['configs']);
            unset($value['configs']);
        }
    
        if (isset($value['items'])) {
            $this->items = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\Toolbars\ItemsConfig($v); }, $value['items']);
            unset($value['items']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->configs) {
            $output['configs'] = array_map(function ($v) { return $v->toArray(); }, $this->configs);
        }
        if (null !== $this->items) {
            $output['items'] = array_map(function ($v) { return $v->toArray(); }, $this->items);
        }
    
        return $output;
    }
    

}
