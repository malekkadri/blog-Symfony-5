<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class CopyComConfig 
{
    private $enabled;
    private $consumerKey;
    private $consumerSecret;
    private $accessToken;
    private $tokenSecret;
    private $optionalPrefix;
    
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
    public function consumerKey($value): self
    {
        $this->consumerKey = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function consumerSecret($value): self
    {
        $this->consumerSecret = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accessToken($value): self
    {
        $this->accessToken = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tokenSecret($value): self
    {
        $this->tokenSecret = $value;
    
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
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['consumer_key'])) {
            $this->consumerKey = $value['consumer_key'];
            unset($value['consumer_key']);
        }
    
        if (isset($value['consumer_secret'])) {
            $this->consumerSecret = $value['consumer_secret'];
            unset($value['consumer_secret']);
        }
    
        if (isset($value['access_token'])) {
            $this->accessToken = $value['access_token'];
            unset($value['access_token']);
        }
    
        if (isset($value['token_secret'])) {
            $this->tokenSecret = $value['token_secret'];
            unset($value['token_secret']);
        }
    
        if (isset($value['optional_prefix'])) {
            $this->optionalPrefix = $value['optional_prefix'];
            unset($value['optional_prefix']);
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
        if (null !== $this->consumerKey) {
            $output['consumer_key'] = $this->consumerKey;
        }
        if (null !== $this->consumerSecret) {
            $output['consumer_secret'] = $this->consumerSecret;
        }
        if (null !== $this->accessToken) {
            $output['access_token'] = $this->accessToken;
        }
        if (null !== $this->tokenSecret) {
            $output['token_secret'] = $this->tokenSecret;
        }
        if (null !== $this->optionalPrefix) {
            $output['optional_prefix'] = $this->optionalPrefix;
        }
    
        return $output;
    }
    

}
