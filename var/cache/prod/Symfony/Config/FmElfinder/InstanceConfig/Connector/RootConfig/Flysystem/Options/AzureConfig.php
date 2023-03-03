<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AzureConfig 
{
    private $enabled;
    private $accountName;
    private $accountKey;
    private $containerName;
    
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
    public function accountName($value): self
    {
        $this->accountName = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accountKey($value): self
    {
        $this->accountKey = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function containerName($value): self
    {
        $this->containerName = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['account_name'])) {
            $this->accountName = $value['account_name'];
            unset($value['account_name']);
        }
    
        if (isset($value['account_key'])) {
            $this->accountKey = $value['account_key'];
            unset($value['account_key']);
        }
    
        if (isset($value['container_name'])) {
            $this->containerName = $value['container_name'];
            unset($value['container_name']);
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
        if (null !== $this->accountName) {
            $output['account_name'] = $this->accountName;
        }
        if (null !== $this->accountKey) {
            $output['account_key'] = $this->accountKey;
        }
        if (null !== $this->containerName) {
            $output['container_name'] = $this->containerName;
        }
    
        return $output;
    }
    

}
