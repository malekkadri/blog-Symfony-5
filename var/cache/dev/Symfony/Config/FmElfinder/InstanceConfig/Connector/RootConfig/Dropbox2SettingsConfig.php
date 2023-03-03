<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Dropbox2Settings'.\DIRECTORY_SEPARATOR.'PublishPermissionConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class Dropbox2SettingsConfig 
{
    private $enabled;
    private $appKey;
    private $appSecret;
    private $accessToken;
    private $aliasFormat;
    private $path;
    private $separator;
    private $acceptedName;
    private $rootCssClass;
    private $publishPermission;
    private $getThumbSize;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function appKey($value): self
    {
        $this->appKey = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function appSecret($value): self
    {
        $this->appSecret = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accessToken($value): self
    {
        $this->accessToken = $value;
    
        return $this;
    }
    
    /**
     * @default '%s@Dropbox'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function aliasFormat($value): self
    {
        $this->aliasFormat = $value;
    
        return $this;
    }
    
    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): self
    {
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function separator($value): self
    {
        $this->separator = $value;
    
        return $this;
    }
    
    /**
     * @default '%s@Dropbox'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function acceptedName($value): self
    {
        $this->acceptedName = $value;
    
        return $this;
    }
    
    /**
     * @default 'elfinder-navbar-root-dropbox'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rootCssClass($value): self
    {
        $this->rootCssClass = $value;
    
        return $this;
    }
    
    public function publishPermission(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2Settings\PublishPermissionConfig
    {
        if (null === $this->publishPermission) {
            $this->publishPermission = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2Settings\PublishPermissionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "publishPermission()" has already been initialized. You cannot pass values the second time you call publishPermission().');
        }
    
        return $this->publishPermission;
    }
    
    /**
     * @default 'medium'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function getThumbSize($value): self
    {
        $this->getThumbSize = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['app_key'])) {
            $this->appKey = $value['app_key'];
            unset($value['app_key']);
        }
    
        if (isset($value['app_secret'])) {
            $this->appSecret = $value['app_secret'];
            unset($value['app_secret']);
        }
    
        if (isset($value['access_token'])) {
            $this->accessToken = $value['access_token'];
            unset($value['access_token']);
        }
    
        if (isset($value['aliasFormat'])) {
            $this->aliasFormat = $value['aliasFormat'];
            unset($value['aliasFormat']);
        }
    
        if (isset($value['path'])) {
            $this->path = $value['path'];
            unset($value['path']);
        }
    
        if (isset($value['separator'])) {
            $this->separator = $value['separator'];
            unset($value['separator']);
        }
    
        if (isset($value['acceptedName'])) {
            $this->acceptedName = $value['acceptedName'];
            unset($value['acceptedName']);
        }
    
        if (isset($value['rootCssClass'])) {
            $this->rootCssClass = $value['rootCssClass'];
            unset($value['rootCssClass']);
        }
    
        if (isset($value['publishPermission'])) {
            $this->publishPermission = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2Settings\PublishPermissionConfig($value['publishPermission']);
            unset($value['publishPermission']);
        }
    
        if (isset($value['getThumbSize'])) {
            $this->getThumbSize = $value['getThumbSize'];
            unset($value['getThumbSize']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->appKey) {
            $output['app_key'] = $this->appKey;
        }
        if (null !== $this->appSecret) {
            $output['app_secret'] = $this->appSecret;
        }
        if (null !== $this->accessToken) {
            $output['access_token'] = $this->accessToken;
        }
        if (null !== $this->aliasFormat) {
            $output['aliasFormat'] = $this->aliasFormat;
        }
        if (null !== $this->path) {
            $output['path'] = $this->path;
        }
        if (null !== $this->separator) {
            $output['separator'] = $this->separator;
        }
        if (null !== $this->acceptedName) {
            $output['acceptedName'] = $this->acceptedName;
        }
        if (null !== $this->rootCssClass) {
            $output['rootCssClass'] = $this->rootCssClass;
        }
        if (null !== $this->publishPermission) {
            $output['publishPermission'] = $this->publishPermission->toArray();
        }
        if (null !== $this->getThumbSize) {
            $output['getThumbSize'] = $this->getThumbSize;
        }
    
        return $output;
    }
    

}
