<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Archivers'.\DIRECTORY_SEPARATOR.'CreateConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Archivers'.\DIRECTORY_SEPARATOR.'ExtractConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ArchiversConfig 
{
    private $enabled;
    private $create;
    private $extract;
    
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
    
    public function create(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers\CreateConfig
    {
        return $this->create[] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers\CreateConfig($value);
    }
    
    public function extract(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers\ExtractConfig
    {
        return $this->extract[] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers\ExtractConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['create'])) {
            $this->create = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers\CreateConfig($v); }, $value['create']);
            unset($value['create']);
        }
    
        if (isset($value['extract'])) {
            $this->extract = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers\ExtractConfig($v); }, $value['extract']);
            unset($value['extract']);
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
        if (null !== $this->create) {
            $output['create'] = array_map(function ($v) { return $v->toArray(); }, $this->create);
        }
        if (null !== $this->extract) {
            $output['extract'] = array_map(function ($v) { return $v->toArray(); }, $this->extract);
        }
    
        return $output;
    }
    

}
