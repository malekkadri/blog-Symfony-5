<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ExtractConfig 
{
    private $cmd;
    private $argc;
    private $ext;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cmd($value): self
    {
        $this->cmd = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function argc($value): self
    {
        $this->argc = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ext($value): self
    {
        $this->ext = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['cmd'])) {
            $this->cmd = $value['cmd'];
            unset($value['cmd']);
        }
    
        if (isset($value['argc'])) {
            $this->argc = $value['argc'];
            unset($value['argc']);
        }
    
        if (isset($value['ext'])) {
            $this->ext = $value['ext'];
            unset($value['ext']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->cmd) {
            $output['cmd'] = $this->cmd;
        }
        if (null !== $this->argc) {
            $output['argc'] = $this->argc;
        }
        if (null !== $this->ext) {
            $output['ext'] = $this->ext;
        }
    
        return $output;
    }
    

}
