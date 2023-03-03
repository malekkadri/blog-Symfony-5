<?php

namespace Symfony\Config\StofDoctrineExtensions;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class UploadableConfig 
{
    private $defaultFilePath;
    private $mimeTypeGuesserClass;
    private $defaultFileInfoClass;
    private $validateWritableDirectory;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultFilePath($value): self
    {
        $this->defaultFilePath = $value;
    
        return $this;
    }
    
    /**
     * @default 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mimeTypeGuesserClass($value): self
    {
        $this->mimeTypeGuesserClass = $value;
    
        return $this;
    }
    
    /**
     * @default 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultFileInfoClass($value): self
    {
        $this->defaultFileInfoClass = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function validateWritableDirectory($value): self
    {
        $this->validateWritableDirectory = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['default_file_path'])) {
            $this->defaultFilePath = $value['default_file_path'];
            unset($value['default_file_path']);
        }
    
        if (isset($value['mime_type_guesser_class'])) {
            $this->mimeTypeGuesserClass = $value['mime_type_guesser_class'];
            unset($value['mime_type_guesser_class']);
        }
    
        if (isset($value['default_file_info_class'])) {
            $this->defaultFileInfoClass = $value['default_file_info_class'];
            unset($value['default_file_info_class']);
        }
    
        if (isset($value['validate_writable_directory'])) {
            $this->validateWritableDirectory = $value['validate_writable_directory'];
            unset($value['validate_writable_directory']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defaultFilePath) {
            $output['default_file_path'] = $this->defaultFilePath;
        }
        if (null !== $this->mimeTypeGuesserClass) {
            $output['mime_type_guesser_class'] = $this->mimeTypeGuesserClass;
        }
        if (null !== $this->defaultFileInfoClass) {
            $output['default_file_info_class'] = $this->defaultFileInfoClass;
        }
        if (null !== $this->validateWritableDirectory) {
            $output['validate_writable_directory'] = $this->validateWritableDirectory;
        }
    
        return $output;
    }
    

}
