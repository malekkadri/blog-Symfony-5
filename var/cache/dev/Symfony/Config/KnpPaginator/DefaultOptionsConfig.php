<?php

namespace Symfony\Config\KnpPaginator;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DefaultOptionsConfig 
{
    private $sortFieldName;
    private $sortDirectionName;
    private $filterFieldName;
    private $filterValueName;
    private $pageName;
    private $distinct;
    private $pageOutOfRange;
    private $defaultLimit;
    
    /**
     * @default 'sort'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sortFieldName($value): self
    {
        $this->sortFieldName = $value;
    
        return $this;
    }
    
    /**
     * @default 'direction'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sortDirectionName($value): self
    {
        $this->sortDirectionName = $value;
    
        return $this;
    }
    
    /**
     * @default 'filterField'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filterFieldName($value): self
    {
        $this->filterFieldName = $value;
    
        return $this;
    }
    
    /**
     * @default 'filterValue'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filterValueName($value): self
    {
        $this->filterValueName = $value;
    
        return $this;
    }
    
    /**
     * @default 'page'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pageName($value): self
    {
        $this->pageName = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function distinct($value): self
    {
        $this->distinct = $value;
    
        return $this;
    }
    
    /**
     * @default 'ignore'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pageOutOfRange($value): self
    {
        $this->pageOutOfRange = $value;
    
        return $this;
    }
    
    /**
     * @default 10
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultLimit($value): self
    {
        $this->defaultLimit = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['sort_field_name'])) {
            $this->sortFieldName = $value['sort_field_name'];
            unset($value['sort_field_name']);
        }
    
        if (isset($value['sort_direction_name'])) {
            $this->sortDirectionName = $value['sort_direction_name'];
            unset($value['sort_direction_name']);
        }
    
        if (isset($value['filter_field_name'])) {
            $this->filterFieldName = $value['filter_field_name'];
            unset($value['filter_field_name']);
        }
    
        if (isset($value['filter_value_name'])) {
            $this->filterValueName = $value['filter_value_name'];
            unset($value['filter_value_name']);
        }
    
        if (isset($value['page_name'])) {
            $this->pageName = $value['page_name'];
            unset($value['page_name']);
        }
    
        if (isset($value['distinct'])) {
            $this->distinct = $value['distinct'];
            unset($value['distinct']);
        }
    
        if (isset($value['page_out_of_range'])) {
            $this->pageOutOfRange = $value['page_out_of_range'];
            unset($value['page_out_of_range']);
        }
    
        if (isset($value['default_limit'])) {
            $this->defaultLimit = $value['default_limit'];
            unset($value['default_limit']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->sortFieldName) {
            $output['sort_field_name'] = $this->sortFieldName;
        }
        if (null !== $this->sortDirectionName) {
            $output['sort_direction_name'] = $this->sortDirectionName;
        }
        if (null !== $this->filterFieldName) {
            $output['filter_field_name'] = $this->filterFieldName;
        }
        if (null !== $this->filterValueName) {
            $output['filter_value_name'] = $this->filterValueName;
        }
        if (null !== $this->pageName) {
            $output['page_name'] = $this->pageName;
        }
        if (null !== $this->distinct) {
            $output['distinct'] = $this->distinct;
        }
        if (null !== $this->pageOutOfRange) {
            $output['page_out_of_range'] = $this->pageOutOfRange;
        }
        if (null !== $this->defaultLimit) {
            $output['default_limit'] = $this->defaultLimit;
        }
    
        return $output;
    }
    

}
