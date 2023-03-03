<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class RackspaceConfig 
{
    private $enabled;
    private $username;
    private $apikey;
    private $endpoint;
    private $container;
    private $region;
    
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
    public function username($value): self
    {
        $this->username = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apikey($value): self
    {
        $this->apikey = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function endpoint($value): self
    {
        $this->endpoint = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function container($value): self
    {
        $this->container = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function region($value): self
    {
        $this->region = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['username'])) {
            $this->username = $value['username'];
            unset($value['username']);
        }
    
        if (isset($value['apikey'])) {
            $this->apikey = $value['apikey'];
            unset($value['apikey']);
        }
    
        if (isset($value['endpoint'])) {
            $this->endpoint = $value['endpoint'];
            unset($value['endpoint']);
        }
    
        if (isset($value['container'])) {
            $this->container = $value['container'];
            unset($value['container']);
        }
    
        if (isset($value['region'])) {
            $this->region = $value['region'];
            unset($value['region']);
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
        if (null !== $this->username) {
            $output['username'] = $this->username;
        }
        if (null !== $this->apikey) {
            $output['apikey'] = $this->apikey;
        }
        if (null !== $this->endpoint) {
            $output['endpoint'] = $this->endpoint;
        }
        if (null !== $this->container) {
            $output['container'] = $this->container;
        }
        if (null !== $this->region) {
            $output['region'] = $this->region;
        }
    
        return $output;
    }
    

}
