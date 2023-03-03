<?php

namespace Symfony\Config\FmElfinder\InstanceConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Connector'.\DIRECTORY_SEPARATOR.'BindsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Connector'.\DIRECTORY_SEPARATOR.'PluginsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Connector'.\DIRECTORY_SEPARATOR.'RootConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ConnectorConfig 
{
    private $debug;
    private $binds;
    private $plugins;
    private $roots;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debug($value): self
    {
        $this->debug = $value;
    
        return $this;
    }
    
    public function binds(string $name, array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\BindsConfig
    {
        if (!isset($this->binds[$name])) {
            return $this->binds[$name] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\BindsConfig($value);
        }
        if ([] === $value) {
            return $this->binds[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "binds()" has already been initialized. You cannot pass values the second time you call binds().');
    }
    
    public function plugins(string $name, array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\PluginsConfig
    {
        if (!isset($this->plugins[$name])) {
            return $this->plugins[$name] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\PluginsConfig($value);
        }
        if ([] === $value) {
            return $this->plugins[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "plugins()" has already been initialized. You cannot pass values the second time you call plugins().');
    }
    
    public function root(string $name, array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig
    {
        if (!isset($this->roots[$name])) {
            return $this->roots[$name] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig($value);
        }
        if ([] === $value) {
            return $this->roots[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "root()" has already been initialized. You cannot pass values the second time you call root().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['debug'])) {
            $this->debug = $value['debug'];
            unset($value['debug']);
        }
    
        if (isset($value['binds'])) {
            $this->binds = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\BindsConfig($v); }, $value['binds']);
            unset($value['binds']);
        }
    
        if (isset($value['plugins'])) {
            $this->plugins = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\PluginsConfig($v); }, $value['plugins']);
            unset($value['plugins']);
        }
    
        if (isset($value['roots'])) {
            $this->roots = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig($v); }, $value['roots']);
            unset($value['roots']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->debug) {
            $output['debug'] = $this->debug;
        }
        if (null !== $this->binds) {
            $output['binds'] = array_map(function ($v) { return $v->toArray(); }, $this->binds);
        }
        if (null !== $this->plugins) {
            $output['plugins'] = array_map(function ($v) { return $v->toArray(); }, $this->plugins);
        }
        if (null !== $this->roots) {
            $output['roots'] = array_map(function ($v) { return $v->toArray(); }, $this->roots);
        }
    
        return $output;
    }
    

}
