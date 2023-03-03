<?php

namespace Symfony\Config\FmElfinder;

require_once __DIR__.\DIRECTORY_SEPARATOR.'InstanceConfig'.\DIRECTORY_SEPARATOR.'ConnectorConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class InstanceConfig 
{
    private $locale;
    private $corsSupport;
    private $editor;
    private $editorTemplate;
    private $fullscreen;
    private $multiHomeFolder;
    private $folderSeparator;
    private $theme;
    private $tinymcePopupPath;
    private $relativePath;
    private $pathPrefix;
    private $whereIsMulti;
    private $visibleMimeTypes;
    private $connector;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function locale($value): self
    {
        $this->locale = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function corsSupport($value): self
    {
        $this->corsSupport = $value;
    
        return $this;
    }
    
    /**
     * @default 'simple'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function editor($value): self
    {
        $this->editor = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function editorTemplate($value): self
    {
        $this->editorTemplate = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function fullscreen($value): self
    {
        $this->fullscreen = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function multiHomeFolder($value): self
    {
        $this->multiHomeFolder = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function folderSeparator($value): self
    {
        $this->folderSeparator = $value;
    
        return $this;
    }
    
    /**
     * @default 'smoothness'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function theme($value): self
    {
        $this->theme = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tinymcePopupPath($value): self
    {
        $this->tinymcePopupPath = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function relativePath($value): self
    {
        $this->relativePath = $value;
    
        return $this;
    }
    
    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pathPrefix($value): self
    {
        $this->pathPrefix = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function whereIsMulti($value): self
    {
        $this->whereIsMulti = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function visibleMimeTypes($value): self
    {
        $this->visibleMimeTypes = $value;
    
        return $this;
    }
    
    public function connector(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\ConnectorConfig
    {
        if (null === $this->connector) {
            $this->connector = new \Symfony\Config\FmElfinder\InstanceConfig\ConnectorConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "connector()" has already been initialized. You cannot pass values the second time you call connector().');
        }
    
        return $this->connector;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['locale'])) {
            $this->locale = $value['locale'];
            unset($value['locale']);
        }
    
        if (isset($value['cors_support'])) {
            $this->corsSupport = $value['cors_support'];
            unset($value['cors_support']);
        }
    
        if (isset($value['editor'])) {
            $this->editor = $value['editor'];
            unset($value['editor']);
        }
    
        if (isset($value['editor_template'])) {
            $this->editorTemplate = $value['editor_template'];
            unset($value['editor_template']);
        }
    
        if (isset($value['fullscreen'])) {
            $this->fullscreen = $value['fullscreen'];
            unset($value['fullscreen']);
        }
    
        if (isset($value['multi_home_folder'])) {
            $this->multiHomeFolder = $value['multi_home_folder'];
            unset($value['multi_home_folder']);
        }
    
        if (isset($value['folder_separator'])) {
            $this->folderSeparator = $value['folder_separator'];
            unset($value['folder_separator']);
        }
    
        if (isset($value['theme'])) {
            $this->theme = $value['theme'];
            unset($value['theme']);
        }
    
        if (isset($value['tinymce_popup_path'])) {
            $this->tinymcePopupPath = $value['tinymce_popup_path'];
            unset($value['tinymce_popup_path']);
        }
    
        if (isset($value['relative_path'])) {
            $this->relativePath = $value['relative_path'];
            unset($value['relative_path']);
        }
    
        if (isset($value['path_prefix'])) {
            $this->pathPrefix = $value['path_prefix'];
            unset($value['path_prefix']);
        }
    
        if (isset($value['where_is_multi'])) {
            $this->whereIsMulti = $value['where_is_multi'];
            unset($value['where_is_multi']);
        }
    
        if (isset($value['visible_mime_types'])) {
            $this->visibleMimeTypes = $value['visible_mime_types'];
            unset($value['visible_mime_types']);
        }
    
        if (isset($value['connector'])) {
            $this->connector = new \Symfony\Config\FmElfinder\InstanceConfig\ConnectorConfig($value['connector']);
            unset($value['connector']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->locale) {
            $output['locale'] = $this->locale;
        }
        if (null !== $this->corsSupport) {
            $output['cors_support'] = $this->corsSupport;
        }
        if (null !== $this->editor) {
            $output['editor'] = $this->editor;
        }
        if (null !== $this->editorTemplate) {
            $output['editor_template'] = $this->editorTemplate;
        }
        if (null !== $this->fullscreen) {
            $output['fullscreen'] = $this->fullscreen;
        }
        if (null !== $this->multiHomeFolder) {
            $output['multi_home_folder'] = $this->multiHomeFolder;
        }
        if (null !== $this->folderSeparator) {
            $output['folder_separator'] = $this->folderSeparator;
        }
        if (null !== $this->theme) {
            $output['theme'] = $this->theme;
        }
        if (null !== $this->tinymcePopupPath) {
            $output['tinymce_popup_path'] = $this->tinymcePopupPath;
        }
        if (null !== $this->relativePath) {
            $output['relative_path'] = $this->relativePath;
        }
        if (null !== $this->pathPrefix) {
            $output['path_prefix'] = $this->pathPrefix;
        }
        if (null !== $this->whereIsMulti) {
            $output['where_is_multi'] = $this->whereIsMulti;
        }
        if (null !== $this->visibleMimeTypes) {
            $output['visible_mime_types'] = $this->visibleMimeTypes;
        }
        if (null !== $this->connector) {
            $output['connector'] = $this->connector->toArray();
        }
    
        return $output;
    }
    

}
