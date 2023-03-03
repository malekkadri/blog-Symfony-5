<?php

namespace Symfony\Config\FosCkEditor\TemplatesConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class TemplatesConfig 
{
    private $title;
    private $image;
    private $description;
    private $html;
    private $template;
    private $templateParameters;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function title($value): self
    {
        $this->title = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function image($value): self
    {
        $this->image = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function description($value): self
    {
        $this->description = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function html($value): self
    {
        $this->html = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function template($value): self
    {
        $this->template = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function templateParameters(string $name, $value): self
    {
        $this->templateParameters[$name] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['title'])) {
            $this->title = $value['title'];
            unset($value['title']);
        }
    
        if (isset($value['image'])) {
            $this->image = $value['image'];
            unset($value['image']);
        }
    
        if (isset($value['description'])) {
            $this->description = $value['description'];
            unset($value['description']);
        }
    
        if (isset($value['html'])) {
            $this->html = $value['html'];
            unset($value['html']);
        }
    
        if (isset($value['template'])) {
            $this->template = $value['template'];
            unset($value['template']);
        }
    
        if (isset($value['template_parameters'])) {
            $this->templateParameters = $value['template_parameters'];
            unset($value['template_parameters']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->title) {
            $output['title'] = $this->title;
        }
        if (null !== $this->image) {
            $output['image'] = $this->image;
        }
        if (null !== $this->description) {
            $output['description'] = $this->description;
        }
        if (null !== $this->html) {
            $output['html'] = $this->html;
        }
        if (null !== $this->template) {
            $output['template'] = $this->template;
        }
        if (null !== $this->templateParameters) {
            $output['template_parameters'] = $this->templateParameters;
        }
    
        return $output;
    }
    

}
