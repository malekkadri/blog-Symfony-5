<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'FosCkEditor'.\DIRECTORY_SEPARATOR.'ConfigsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'FosCkEditor'.\DIRECTORY_SEPARATOR.'PluginsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'FosCkEditor'.\DIRECTORY_SEPARATOR.'StylesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'FosCkEditor'.\DIRECTORY_SEPARATOR.'TemplatesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'FosCkEditor'.\DIRECTORY_SEPARATOR.'ToolbarsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FosCkEditorConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $enable;
    private $async;
    private $autoInline;
    private $inline;
    private $autoload;
    private $jquery;
    private $requireJs;
    private $inputSync;
    private $basePath;
    private $jsPath;
    private $jqueryPath;
    private $defaultConfig;
    private $configs;
    private $plugins;
    private $styles;
    private $templates;
    private $filebrowsers;
    private $toolbars;
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enable($value): self
    {
        $this->enable = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function async($value): self
    {
        $this->async = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoInline($value): self
    {
        $this->autoInline = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function inline($value): self
    {
        $this->inline = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoload($value): self
    {
        $this->autoload = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function jquery($value): self
    {
        $this->jquery = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function requireJs($value): self
    {
        $this->requireJs = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function inputSync($value): self
    {
        $this->inputSync = $value;
    
        return $this;
    }
    
    /**
     * @default 'bundles/fosckeditor/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function basePath($value): self
    {
        $this->basePath = $value;
    
        return $this;
    }
    
    /**
     * @default 'bundles/fosckeditor/ckeditor.js'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function jsPath($value): self
    {
        $this->jsPath = $value;
    
        return $this;
    }
    
    /**
     * @default 'bundles/fosckeditor/adapters/jquery.js'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function jqueryPath($value): self
    {
        $this->jqueryPath = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultConfig($value): self
    {
        $this->defaultConfig = $value;
    
        return $this;
    }
    
    public function configs(string $name, array $value = []): \Symfony\Config\FosCkEditor\ConfigsConfig
    {
        if (!isset($this->configs[$name])) {
            return $this->configs[$name] = new \Symfony\Config\FosCkEditor\ConfigsConfig($value);
        }
        if ([] === $value) {
            return $this->configs[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "configs()" has already been initialized. You cannot pass values the second time you call configs().');
    }
    
    public function plugins(string $name, array $value = []): \Symfony\Config\FosCkEditor\PluginsConfig
    {
        if (!isset($this->plugins[$name])) {
            return $this->plugins[$name] = new \Symfony\Config\FosCkEditor\PluginsConfig($value);
        }
        if ([] === $value) {
            return $this->plugins[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "plugins()" has already been initialized. You cannot pass values the second time you call plugins().');
    }
    
    public function styles(string $name, array $value = []): \Symfony\Config\FosCkEditor\StylesConfig
    {
        if (!isset($this->styles[$name])) {
            return $this->styles[$name] = new \Symfony\Config\FosCkEditor\StylesConfig($value);
        }
        if ([] === $value) {
            return $this->styles[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "styles()" has already been initialized. You cannot pass values the second time you call styles().');
    }
    
    public function templates(string $name, array $value = []): \Symfony\Config\FosCkEditor\TemplatesConfig
    {
        if (!isset($this->templates[$name])) {
            return $this->templates[$name] = new \Symfony\Config\FosCkEditor\TemplatesConfig($value);
        }
        if ([] === $value) {
            return $this->templates[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "templates()" has already been initialized. You cannot pass values the second time you call templates().');
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filebrowsers(string $name, $value): self
    {
        $this->filebrowsers[$name] = $value;
    
        return $this;
    }
    
    public function toolbars(array $value = []): \Symfony\Config\FosCkEditor\ToolbarsConfig
    {
        if (null === $this->toolbars) {
            $this->toolbars = new \Symfony\Config\FosCkEditor\ToolbarsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "toolbars()" has already been initialized. You cannot pass values the second time you call toolbars().');
        }
    
        return $this->toolbars;
    }
    
    public function getExtensionAlias(): string
    {
        return 'fos_ck_editor';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enable'])) {
            $this->enable = $value['enable'];
            unset($value['enable']);
        }
    
        if (isset($value['async'])) {
            $this->async = $value['async'];
            unset($value['async']);
        }
    
        if (isset($value['auto_inline'])) {
            $this->autoInline = $value['auto_inline'];
            unset($value['auto_inline']);
        }
    
        if (isset($value['inline'])) {
            $this->inline = $value['inline'];
            unset($value['inline']);
        }
    
        if (isset($value['autoload'])) {
            $this->autoload = $value['autoload'];
            unset($value['autoload']);
        }
    
        if (isset($value['jquery'])) {
            $this->jquery = $value['jquery'];
            unset($value['jquery']);
        }
    
        if (isset($value['require_js'])) {
            $this->requireJs = $value['require_js'];
            unset($value['require_js']);
        }
    
        if (isset($value['input_sync'])) {
            $this->inputSync = $value['input_sync'];
            unset($value['input_sync']);
        }
    
        if (isset($value['base_path'])) {
            $this->basePath = $value['base_path'];
            unset($value['base_path']);
        }
    
        if (isset($value['js_path'])) {
            $this->jsPath = $value['js_path'];
            unset($value['js_path']);
        }
    
        if (isset($value['jquery_path'])) {
            $this->jqueryPath = $value['jquery_path'];
            unset($value['jquery_path']);
        }
    
        if (isset($value['default_config'])) {
            $this->defaultConfig = $value['default_config'];
            unset($value['default_config']);
        }
    
        if (isset($value['configs'])) {
            $this->configs = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\ConfigsConfig($v); }, $value['configs']);
            unset($value['configs']);
        }
    
        if (isset($value['plugins'])) {
            $this->plugins = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\PluginsConfig($v); }, $value['plugins']);
            unset($value['plugins']);
        }
    
        if (isset($value['styles'])) {
            $this->styles = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\StylesConfig($v); }, $value['styles']);
            unset($value['styles']);
        }
    
        if (isset($value['templates'])) {
            $this->templates = array_map(function ($v) { return new \Symfony\Config\FosCkEditor\TemplatesConfig($v); }, $value['templates']);
            unset($value['templates']);
        }
    
        if (isset($value['filebrowsers'])) {
            $this->filebrowsers = $value['filebrowsers'];
            unset($value['filebrowsers']);
        }
    
        if (isset($value['toolbars'])) {
            $this->toolbars = new \Symfony\Config\FosCkEditor\ToolbarsConfig($value['toolbars']);
            unset($value['toolbars']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enable) {
            $output['enable'] = $this->enable;
        }
        if (null !== $this->async) {
            $output['async'] = $this->async;
        }
        if (null !== $this->autoInline) {
            $output['auto_inline'] = $this->autoInline;
        }
        if (null !== $this->inline) {
            $output['inline'] = $this->inline;
        }
        if (null !== $this->autoload) {
            $output['autoload'] = $this->autoload;
        }
        if (null !== $this->jquery) {
            $output['jquery'] = $this->jquery;
        }
        if (null !== $this->requireJs) {
            $output['require_js'] = $this->requireJs;
        }
        if (null !== $this->inputSync) {
            $output['input_sync'] = $this->inputSync;
        }
        if (null !== $this->basePath) {
            $output['base_path'] = $this->basePath;
        }
        if (null !== $this->jsPath) {
            $output['js_path'] = $this->jsPath;
        }
        if (null !== $this->jqueryPath) {
            $output['jquery_path'] = $this->jqueryPath;
        }
        if (null !== $this->defaultConfig) {
            $output['default_config'] = $this->defaultConfig;
        }
        if (null !== $this->configs) {
            $output['configs'] = array_map(function ($v) { return $v->toArray(); }, $this->configs);
        }
        if (null !== $this->plugins) {
            $output['plugins'] = array_map(function ($v) { return $v->toArray(); }, $this->plugins);
        }
        if (null !== $this->styles) {
            $output['styles'] = array_map(function ($v) { return $v->toArray(); }, $this->styles);
        }
        if (null !== $this->templates) {
            $output['templates'] = array_map(function ($v) { return $v->toArray(); }, $this->templates);
        }
        if (null !== $this->filebrowsers) {
            $output['filebrowsers'] = $this->filebrowsers;
        }
        if (null !== $this->toolbars) {
            $output['toolbars'] = $this->toolbars->toArray();
        }
    
        return $output;
    }
    

}
