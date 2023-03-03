<?php

namespace Symfony\Config\StofDoctrineExtensions;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class OrmConfig 
{
    private $translatable;
    private $timestampable;
    private $blameable;
    private $sluggable;
    private $tree;
    private $loggable;
    private $sortable;
    private $softdeleteable;
    private $uploadable;
    private $referenceIntegrity;
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function translatable($value): self
    {
        $this->translatable = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function timestampable($value): self
    {
        $this->timestampable = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function blameable($value): self
    {
        $this->blameable = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sluggable($value): self
    {
        $this->sluggable = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tree($value): self
    {
        $this->tree = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function loggable($value): self
    {
        $this->loggable = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sortable($value): self
    {
        $this->sortable = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function softdeleteable($value): self
    {
        $this->softdeleteable = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uploadable($value): self
    {
        $this->uploadable = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function referenceIntegrity($value): self
    {
        $this->referenceIntegrity = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['translatable'])) {
            $this->translatable = $value['translatable'];
            unset($value['translatable']);
        }
    
        if (isset($value['timestampable'])) {
            $this->timestampable = $value['timestampable'];
            unset($value['timestampable']);
        }
    
        if (isset($value['blameable'])) {
            $this->blameable = $value['blameable'];
            unset($value['blameable']);
        }
    
        if (isset($value['sluggable'])) {
            $this->sluggable = $value['sluggable'];
            unset($value['sluggable']);
        }
    
        if (isset($value['tree'])) {
            $this->tree = $value['tree'];
            unset($value['tree']);
        }
    
        if (isset($value['loggable'])) {
            $this->loggable = $value['loggable'];
            unset($value['loggable']);
        }
    
        if (isset($value['sortable'])) {
            $this->sortable = $value['sortable'];
            unset($value['sortable']);
        }
    
        if (isset($value['softdeleteable'])) {
            $this->softdeleteable = $value['softdeleteable'];
            unset($value['softdeleteable']);
        }
    
        if (isset($value['uploadable'])) {
            $this->uploadable = $value['uploadable'];
            unset($value['uploadable']);
        }
    
        if (isset($value['reference_integrity'])) {
            $this->referenceIntegrity = $value['reference_integrity'];
            unset($value['reference_integrity']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->translatable) {
            $output['translatable'] = $this->translatable;
        }
        if (null !== $this->timestampable) {
            $output['timestampable'] = $this->timestampable;
        }
        if (null !== $this->blameable) {
            $output['blameable'] = $this->blameable;
        }
        if (null !== $this->sluggable) {
            $output['sluggable'] = $this->sluggable;
        }
        if (null !== $this->tree) {
            $output['tree'] = $this->tree;
        }
        if (null !== $this->loggable) {
            $output['loggable'] = $this->loggable;
        }
        if (null !== $this->sortable) {
            $output['sortable'] = $this->sortable;
        }
        if (null !== $this->softdeleteable) {
            $output['softdeleteable'] = $this->softdeleteable;
        }
        if (null !== $this->uploadable) {
            $output['uploadable'] = $this->uploadable;
        }
        if (null !== $this->referenceIntegrity) {
            $output['reference_integrity'] = $this->referenceIntegrity;
        }
    
        return $output;
    }
    

}
