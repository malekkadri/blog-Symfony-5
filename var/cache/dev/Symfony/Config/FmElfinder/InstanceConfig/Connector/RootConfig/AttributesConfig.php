<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AttributesConfig 
{
    private $pattern;
    private $read;
    private $write;
    private $locked;
    private $hidden;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pattern($value): self
    {
        $this->pattern = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function read($value): self
    {
        $this->read = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function write($value): self
    {
        $this->write = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function locked($value): self
    {
        $this->locked = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hidden($value): self
    {
        $this->hidden = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['pattern'])) {
            $this->pattern = $value['pattern'];
            unset($value['pattern']);
        }
    
        if (isset($value['read'])) {
            $this->read = $value['read'];
            unset($value['read']);
        }
    
        if (isset($value['write'])) {
            $this->write = $value['write'];
            unset($value['write']);
        }
    
        if (isset($value['locked'])) {
            $this->locked = $value['locked'];
            unset($value['locked']);
        }
    
        if (isset($value['hidden'])) {
            $this->hidden = $value['hidden'];
            unset($value['hidden']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->pattern) {
            $output['pattern'] = $this->pattern;
        }
        if (null !== $this->read) {
            $output['read'] = $this->read;
        }
        if (null !== $this->write) {
            $output['write'] = $this->write;
        }
        if (null !== $this->locked) {
            $output['locked'] = $this->locked;
        }
        if (null !== $this->hidden) {
            $output['hidden'] = $this->hidden;
        }
    
        return $output;
    }
    

}
