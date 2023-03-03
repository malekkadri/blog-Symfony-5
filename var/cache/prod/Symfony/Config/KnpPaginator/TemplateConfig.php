<?php

namespace Symfony\Config\KnpPaginator;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class TemplateConfig 
{
    private $pagination;
    private $filtration;
    private $sortable;
    
    /**
     * @default '@KnpPaginator/Pagination/sliding.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pagination($value): self
    {
        $this->pagination = $value;
    
        return $this;
    }
    
    /**
     * @default '@KnpPaginator/Pagination/filtration.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filtration($value): self
    {
        $this->filtration = $value;
    
        return $this;
    }
    
    /**
     * @default '@KnpPaginator/Pagination/sortable_link.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sortable($value): self
    {
        $this->sortable = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['pagination'])) {
            $this->pagination = $value['pagination'];
            unset($value['pagination']);
        }
    
        if (isset($value['filtration'])) {
            $this->filtration = $value['filtration'];
            unset($value['filtration']);
        }
    
        if (isset($value['sortable'])) {
            $this->sortable = $value['sortable'];
            unset($value['sortable']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->pagination) {
            $output['pagination'] = $this->pagination;
        }
        if (null !== $this->filtration) {
            $output['filtration'] = $this->filtration;
        }
        if (null !== $this->sortable) {
            $output['sortable'] = $this->sortable;
        }
    
        return $output;
    }
    

}
