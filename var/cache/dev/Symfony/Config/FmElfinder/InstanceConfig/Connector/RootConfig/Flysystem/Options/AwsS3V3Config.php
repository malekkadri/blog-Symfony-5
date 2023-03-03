<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options;

require_once __DIR__.\DIRECTORY_SEPARATOR.'AwsS3V3'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AwsS3V3Config 
{
    private $enabled;
    private $key;
    private $secret;
    private $region;
    private $version;
    private $bucketName;
    private $optionalPrefix;
    private $endpoint;
    private $usePathStyleEndpoint;
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
    public function version($value): self
    {
        $this->version = $value;
    
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
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function endpoint($value): self
    {
        $this->endpoint = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function usePathStyleEndpoint($value): self
    {
        $this->usePathStyleEndpoint = $value;
    
        return $this;
    }
    
    public function options(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3\OptionsConfig
    {
        if (null === $this->options) {
            $this->options = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3\OptionsConfig($value);
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
    
        if (isset($value['version'])) {
            $this->version = $value['version'];
            unset($value['version']);
        }
    
        if (isset($value['bucket_name'])) {
            $this->bucketName = $value['bucket_name'];
            unset($value['bucket_name']);
        }
    
        if (isset($value['optional_prefix'])) {
            $this->optionalPrefix = $value['optional_prefix'];
            unset($value['optional_prefix']);
        }
    
        if (isset($value['endpoint'])) {
            $this->endpoint = $value['endpoint'];
            unset($value['endpoint']);
        }
    
        if (isset($value['use_path_style_endpoint'])) {
            $this->usePathStyleEndpoint = $value['use_path_style_endpoint'];
            unset($value['use_path_style_endpoint']);
        }
    
        if (isset($value['options'])) {
            $this->options = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3\OptionsConfig($value['options']);
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
        if (null !== $this->key) {
            $output['key'] = $this->key;
        }
        if (null !== $this->secret) {
            $output['secret'] = $this->secret;
        }
        if (null !== $this->region) {
            $output['region'] = $this->region;
        }
        if (null !== $this->version) {
            $output['version'] = $this->version;
        }
        if (null !== $this->bucketName) {
            $output['bucket_name'] = $this->bucketName;
        }
        if (null !== $this->optionalPrefix) {
            $output['optional_prefix'] = $this->optionalPrefix;
        }
        if (null !== $this->endpoint) {
            $output['endpoint'] = $this->endpoint;
        }
        if (null !== $this->usePathStyleEndpoint) {
            $output['use_path_style_endpoint'] = $this->usePathStyleEndpoint;
        }
        if (null !== $this->options) {
            $output['options'] = $this->options->toArray();
        }
    
        return $output;
    }
    

}
