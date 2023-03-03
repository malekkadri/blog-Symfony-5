<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SftpConfig 
{
    private $enabled;
    private $host;
    private $username;
    private $password;
    private $port;
    private $privateKey;
    private $timeout;
    private $root;
    
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
    public function host($value): self
    {
        $this->host = $value;
    
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
    public function password($value): self
    {
        $this->password = $value;
    
        return $this;
    }
    
    /**
     * @default 21
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function port($value): self
    {
        $this->port = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function privateKey($value): self
    {
        $this->privateKey = $value;
    
        return $this;
    }
    
    /**
     * @default 10
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function timeout($value): self
    {
        $this->timeout = $value;
    
        return $this;
    }
    
    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function root($value): self
    {
        $this->root = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['host'])) {
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (isset($value['username'])) {
            $this->username = $value['username'];
            unset($value['username']);
        }
    
        if (isset($value['password'])) {
            $this->password = $value['password'];
            unset($value['password']);
        }
    
        if (isset($value['port'])) {
            $this->port = $value['port'];
            unset($value['port']);
        }
    
        if (isset($value['privateKey'])) {
            $this->privateKey = $value['privateKey'];
            unset($value['privateKey']);
        }
    
        if (isset($value['timeout'])) {
            $this->timeout = $value['timeout'];
            unset($value['timeout']);
        }
    
        if (isset($value['root'])) {
            $this->root = $value['root'];
            unset($value['root']);
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
        if (null !== $this->host) {
            $output['host'] = $this->host;
        }
        if (null !== $this->username) {
            $output['username'] = $this->username;
        }
        if (null !== $this->password) {
            $output['password'] = $this->password;
        }
        if (null !== $this->port) {
            $output['port'] = $this->port;
        }
        if (null !== $this->privateKey) {
            $output['privateKey'] = $this->privateKey;
        }
        if (null !== $this->timeout) {
            $output['timeout'] = $this->timeout;
        }
        if (null !== $this->root) {
            $output['root'] = $this->root;
        }
    
        return $output;
    }
    

}
