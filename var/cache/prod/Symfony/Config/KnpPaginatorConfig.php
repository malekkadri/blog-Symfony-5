<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpPaginator'.\DIRECTORY_SEPARATOR.'DefaultOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpPaginator'.\DIRECTORY_SEPARATOR.'TemplateConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class KnpPaginatorConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaultOptions;
    private $template;
    private $pageRange;
    private $pageLimit;
    
    public function defaultOptions(array $value = []): \Symfony\Config\KnpPaginator\DefaultOptionsConfig
    {
        if (null === $this->defaultOptions) {
            $this->defaultOptions = new \Symfony\Config\KnpPaginator\DefaultOptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "defaultOptions()" has already been initialized. You cannot pass values the second time you call defaultOptions().');
        }
    
        return $this->defaultOptions;
    }
    
    public function template(array $value = []): \Symfony\Config\KnpPaginator\TemplateConfig
    {
        if (null === $this->template) {
            $this->template = new \Symfony\Config\KnpPaginator\TemplateConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "template()" has already been initialized. You cannot pass values the second time you call template().');
        }
    
        return $this->template;
    }
    
    /**
     * @default 5
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pageRange($value): self
    {
        $this->pageRange = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function pageLimit($value): self
    {
        $this->pageLimit = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'knp_paginator';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['default_options'])) {
            $this->defaultOptions = new \Symfony\Config\KnpPaginator\DefaultOptionsConfig($value['default_options']);
            unset($value['default_options']);
        }
    
        if (isset($value['template'])) {
            $this->template = new \Symfony\Config\KnpPaginator\TemplateConfig($value['template']);
            unset($value['template']);
        }
    
        if (isset($value['page_range'])) {
            $this->pageRange = $value['page_range'];
            unset($value['page_range']);
        }
    
        if (isset($value['page_limit'])) {
            $this->pageLimit = $value['page_limit'];
            unset($value['page_limit']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defaultOptions) {
            $output['default_options'] = $this->defaultOptions->toArray();
        }
        if (null !== $this->template) {
            $output['template'] = $this->template->toArray();
        }
        if (null !== $this->pageRange) {
            $output['page_range'] = $this->pageRange;
        }
        if (null !== $this->pageLimit) {
            $output['page_limit'] = $this->pageLimit;
        }
    
        return $output;
    }
    

}
