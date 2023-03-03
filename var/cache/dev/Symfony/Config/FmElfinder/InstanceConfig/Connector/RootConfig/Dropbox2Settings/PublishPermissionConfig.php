<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2Settings;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class PublishPermissionConfig 
{
    private $requestedVisibility;
    
    /**
     * @default 'public'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function requestedVisibility($value): self
    {
        $this->requestedVisibility = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['requested_visibility'])) {
            $this->requestedVisibility = $value['requested_visibility'];
            unset($value['requested_visibility']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->requestedVisibility) {
            $output['requested_visibility'] = $this->requestedVisibility;
        }
    
        return $output;
    }
    

}
