<?php

namespace Symfony\Config\Monolog\HandlerConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ProcessPsr3MessagesConfig 
{
    private $enabled;
    private $dateFormat;
    private $removeUsedContextFields;
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dateFormat($value): self
    {
        $this->dateFormat = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function removeUsedContextFields($value): self
    {
        $this->removeUsedContextFields = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['date_format'])) {
            $this->dateFormat = $value['date_format'];
            unset($value['date_format']);
        }
    
        if (isset($value['remove_used_context_fields'])) {
            $this->removeUsedContextFields = $value['remove_used_context_fields'];
            unset($value['remove_used_context_fields']);
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
        if (null !== $this->dateFormat) {
            $output['date_format'] = $this->dateFormat;
        }
        if (null !== $this->removeUsedContextFields) {
            $output['remove_used_context_fields'] = $this->removeUsedContextFields;
        }
    
        return $output;
    }
    

}
