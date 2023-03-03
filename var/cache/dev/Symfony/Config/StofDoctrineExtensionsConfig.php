<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'StofDoctrineExtensions'.\DIRECTORY_SEPARATOR.'OrmConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'StofDoctrineExtensions'.\DIRECTORY_SEPARATOR.'MongodbConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'StofDoctrineExtensions'.\DIRECTORY_SEPARATOR.'ClassConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'StofDoctrineExtensions'.\DIRECTORY_SEPARATOR.'UploadableConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class StofDoctrineExtensionsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $orm;
    private $mongodb;
    private $class;
    private $uploadable;
    private $defaultLocale;
    private $translationFallback;
    private $persistDefaultTranslation;
    private $skipTranslationOnLoad;
    
    public function orm(string $id, array $value = []): \Symfony\Config\StofDoctrineExtensions\OrmConfig
    {
        if (!isset($this->orm[$id])) {
            return $this->orm[$id] = new \Symfony\Config\StofDoctrineExtensions\OrmConfig($value);
        }
        if ([] === $value) {
            return $this->orm[$id];
        }
    
        throw new InvalidConfigurationException('The node created by "orm()" has already been initialized. You cannot pass values the second time you call orm().');
    }
    
    public function mongodb(string $id, array $value = []): \Symfony\Config\StofDoctrineExtensions\MongodbConfig
    {
        if (!isset($this->mongodb[$id])) {
            return $this->mongodb[$id] = new \Symfony\Config\StofDoctrineExtensions\MongodbConfig($value);
        }
        if ([] === $value) {
            return $this->mongodb[$id];
        }
    
        throw new InvalidConfigurationException('The node created by "mongodb()" has already been initialized. You cannot pass values the second time you call mongodb().');
    }
    
    public function class(array $value = []): \Symfony\Config\StofDoctrineExtensions\ClassConfig
    {
        if (null === $this->class) {
            $this->class = new \Symfony\Config\StofDoctrineExtensions\ClassConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "class()" has already been initialized. You cannot pass values the second time you call class().');
        }
    
        return $this->class;
    }
    
    public function uploadable(array $value = []): \Symfony\Config\StofDoctrineExtensions\UploadableConfig
    {
        if (null === $this->uploadable) {
            $this->uploadable = new \Symfony\Config\StofDoctrineExtensions\UploadableConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "uploadable()" has already been initialized. You cannot pass values the second time you call uploadable().');
        }
    
        return $this->uploadable;
    }
    
    /**
     * @default 'en'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultLocale($value): self
    {
        $this->defaultLocale = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function translationFallback($value): self
    {
        $this->translationFallback = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function persistDefaultTranslation($value): self
    {
        $this->persistDefaultTranslation = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function skipTranslationOnLoad($value): self
    {
        $this->skipTranslationOnLoad = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'stof_doctrine_extensions';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['orm'])) {
            $this->orm = array_map(function ($v) { return new \Symfony\Config\StofDoctrineExtensions\OrmConfig($v); }, $value['orm']);
            unset($value['orm']);
        }
    
        if (isset($value['mongodb'])) {
            $this->mongodb = array_map(function ($v) { return new \Symfony\Config\StofDoctrineExtensions\MongodbConfig($v); }, $value['mongodb']);
            unset($value['mongodb']);
        }
    
        if (isset($value['class'])) {
            $this->class = new \Symfony\Config\StofDoctrineExtensions\ClassConfig($value['class']);
            unset($value['class']);
        }
    
        if (isset($value['uploadable'])) {
            $this->uploadable = new \Symfony\Config\StofDoctrineExtensions\UploadableConfig($value['uploadable']);
            unset($value['uploadable']);
        }
    
        if (isset($value['default_locale'])) {
            $this->defaultLocale = $value['default_locale'];
            unset($value['default_locale']);
        }
    
        if (isset($value['translation_fallback'])) {
            $this->translationFallback = $value['translation_fallback'];
            unset($value['translation_fallback']);
        }
    
        if (isset($value['persist_default_translation'])) {
            $this->persistDefaultTranslation = $value['persist_default_translation'];
            unset($value['persist_default_translation']);
        }
    
        if (isset($value['skip_translation_on_load'])) {
            $this->skipTranslationOnLoad = $value['skip_translation_on_load'];
            unset($value['skip_translation_on_load']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->orm) {
            $output['orm'] = array_map(function ($v) { return $v->toArray(); }, $this->orm);
        }
        if (null !== $this->mongodb) {
            $output['mongodb'] = array_map(function ($v) { return $v->toArray(); }, $this->mongodb);
        }
        if (null !== $this->class) {
            $output['class'] = $this->class->toArray();
        }
        if (null !== $this->uploadable) {
            $output['uploadable'] = $this->uploadable->toArray();
        }
        if (null !== $this->defaultLocale) {
            $output['default_locale'] = $this->defaultLocale;
        }
        if (null !== $this->translationFallback) {
            $output['translation_fallback'] = $this->translationFallback;
        }
        if (null !== $this->persistDefaultTranslation) {
            $output['persist_default_translation'] = $this->persistDefaultTranslation;
        }
        if (null !== $this->skipTranslationOnLoad) {
            $output['skip_translation_on_load'] = $this->skipTranslationOnLoad;
        }
    
        return $output;
    }
    

}
