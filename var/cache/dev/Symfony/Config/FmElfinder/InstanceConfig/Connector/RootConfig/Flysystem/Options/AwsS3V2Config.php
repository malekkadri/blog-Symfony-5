<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AwsS3V2Config 
{
    private $enabled;
    private $key;
    private $secret;
    private $region;
    private $bucketName;
    private $optionalPrefix;
    private $baseUrl;
    
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
    public function key($value): self
    {
        $this->key = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secret($value): self
    {
        $this->secret = $value;
    
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
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bucketName($value): self
    {
        $this->bucketName = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function optionalPrefix($value): self
    {
        $this->optionalPrefix = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function baseUrl($value): self
    {
        $this->baseUrl = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['key'])) {
            $this->key = $value['key'];
            unset($value['key']);
        }
    
        if (isset($value['secret'])) {
            $this->secret = $value['secret'];
            unset($value['secret']);
        }
    
        if (isset($value['region'])) {
            $this->region = $value['region'];
            unset($value['region']);
        }
    
        if (isset($value['bucket_name'])) {
            $this->bucketName = $value['bucket_name'];
            unset($value['bucket_name']);
        }
    
        if (isset($value['optional_prefix'])) {
            $this->optionalPrefix = $value['optional_prefix'];
            unset($value['optional_prefix']);
        }
    
        if (isset($value['base_url'])) {
            $this->baseUrl = $value['base_url'];
            unset($value['base_url']);
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
        if (null !== $this->key) {
            $output['key'] = $this->key;
        }
        if (null !== $this->secret) {
            $output['secret'] = $this->secret;
        }
        if (null !== $this->region) {
            $output['region'] = $this->region;
        }
        if (null !== $this->bucketName) {
            $output['bucket_name'] = $this->bucketName;
        }
        if (null !== $this->optionalPrefix) {
            $output['optional_prefix'] = $this->optionalPrefix;
        }
        if (null !== $this->baseUrl) {
            $output['base_url'] = $this->baseUrl;
        }
    
        return $output;
    }
    

}
