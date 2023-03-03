<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Flysystem'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FlysystemConfig 
{
    private $enabled;
    private $filesystem;
    private $type;
    private $adapterService;
    private $options;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filesystem($value): self
    {
        $this->filesystem = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adapterService($value): self
    {
        $this->adapterService = $value;
    
        return $this;
    }
    
    public function options(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\OptionsConfig
    {
        if (null === $this->options) {
            $this->options = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\OptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
        }
    
        return $this->options;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['filesystem'])) {
            $this->filesystem = $value['filesystem'];
            unset($value['filesystem']);
        }
    
        if (isset($value['type'])) {
            $this->type = $value['type'];
            unset($value['type']);
        }
    
        if (isset($value['adapter_service'])) {
            $this->adapterService = $value['adapter_service'];
            unset($value['adapter_service']);
        }
    
        if (isset($value['options'])) {
            $this->options = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\OptionsConfig($value['options']);
            unset($value['options']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->filesystem) {
            $output['filesystem'] = $this->filesystem;
        }
        if (null !== $this->type) {
            $output['type'] = $this->type;
        }
        if (null !== $this->adapterService) {
            $output['adapter_service'] = $this->adapterService;
        }
        if (null !== $this->options) {
            $output['options'] = $this->options->toArray();
        }
    
        return $output;
    }
    

}
