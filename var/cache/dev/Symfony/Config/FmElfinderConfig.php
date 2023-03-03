<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'FmElfinder'.\DIRECTORY_SEPARATOR.'InstanceConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FmElfinderConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $configurationProvider;
    private $assetsPath;
    private $loader;
    private $instances;
    
    /**
     * @default 'fm_elfinder.configurator.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function configurationProvider($value): self
    {
        $this->configurationProvider = $value;
    
        return $this;
    }
    
    /**
     * @default 'assets'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function assetsPath($value): self
    {
        $this->assetsPath = $value;
    
        return $this;
    }
    
    /**
     * @default 'fm_elfinder.loader.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function loader($value): self
    {
        $this->loader = $value;
    
        return $this;
    }
    
    public function instance(string $name, array $value = []): \Symfony\Config\FmElfinder\InstanceConfig
    {
        if (!isset($this->instances[$name])) {
            return $this->instances[$name] = new \Symfony\Config\FmElfinder\InstanceConfig($value);
        }
        if ([] === $value) {
            return $this->instances[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "instance()" has already been initialized. You cannot pass values the second time you call instance().');
    }
    
    public function getExtensionAlias(): string
    {
        return 'fm_elfinder';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['configuration_provider'])) {
            $this->configurationProvider = $value['configuration_provider'];
            unset($value['configuration_provider']);
        }
    
        if (isset($value['assets_path'])) {
            $this->assetsPath = $value['assets_path'];
            unset($value['assets_path']);
        }
    
        if (isset($value['loader'])) {
            $this->loader = $value['loader'];
            unset($value['loader']);
        }
    
        if (isset($value['instances'])) {
            $this->instances = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig($v); }, $value['instances']);
            unset($value['instances']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->configurationProvider) {
            $output['configuration_provider'] = $this->configurationProvider;
        }
        if (null !== $this->assetsPath) {
            $output['assets_path'] = $this->assetsPath;
        }
        if (null !== $this->loader) {
            $output['loader'] = $this->loader;
        }
        if (null !== $this->instances) {
            $output['instances'] = array_map(function ($v) { return $v->toArray(); }, $this->instances);
        }
    
        return $output;
    }
    

}
