<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class OnedriveSettingsConfig 
{
    private $enabled;
    private $clientId;
    private $clientSecret;
    private $accessToken;
    private $root;
    private $oneDriveApiClient;
    private $path;
    private $separator;
    private $tmbPath;
    private $tmbURL;
    private $tmpPath;
    private $acceptedName;
    private $rootCssClass;
    private $useApiThumbnail;
    
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
    public function clientId($value): self
    {
        $this->clientId = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clientSecret($value): self
    {
        $this->clientSecret = $value;
    
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
     * @default 'OneDrive.com'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function root($value): self
    {
        $this->root = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function oneDriveApiClient($value): self
    {
        $this->oneDriveApiClient = $value;
    
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
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmbPath($value): self
    {
        $this->tmbPath = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmbURL($value): self
    {
        $this->tmbURL = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmpPath($value): self
    {
        $this->tmpPath = $value;
    
        return $this;
    }
    
    /**
     * @default '#^[^/\\?*:|"<>]*[^./\\?*:|"<>]$#'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function acceptedName($value): self
    {
        $this->acceptedName = $value;
    
        return $this;
    }
    
    /**
     * @default 'elfinder-navbar-root-onedrive'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rootCssClass($value): self
    {
        $this->rootCssClass = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useApiThumbnail($value): self
    {
        $this->useApiThumbnail = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['client_id'])) {
            $this->clientId = $value['client_id'];
            unset($value['client_id']);
        }
    
        if (isset($value['client_secret'])) {
            $this->clientSecret = $value['client_secret'];
            unset($value['client_secret']);
        }
    
        if (isset($value['accessToken'])) {
            $this->accessToken = $value['accessToken'];
            unset($value['accessToken']);
        }
    
        if (isset($value['root'])) {
            $this->root = $value['root'];
            unset($value['root']);
        }
    
        if (isset($value['OneDriveApiClient'])) {
            $this->oneDriveApiClient = $value['OneDriveApiClient'];
            unset($value['OneDriveApiClient']);
        }
    
        if (isset($value['path'])) {
            $this->path = $value['path'];
            unset($value['path']);
        }
    
        if (isset($value['separator'])) {
            $this->separator = $value['separator'];
            unset($value['separator']);
        }
    
        if (isset($value['tmbPath'])) {
            $this->tmbPath = $value['tmbPath'];
            unset($value['tmbPath']);
        }
    
        if (isset($value['tmbURL'])) {
            $this->tmbURL = $value['tmbURL'];
            unset($value['tmbURL']);
        }
    
        if (isset($value['tmpPath'])) {
            $this->tmpPath = $value['tmpPath'];
            unset($value['tmpPath']);
        }
    
        if (isset($value['acceptedName'])) {
            $this->acceptedName = $value['acceptedName'];
            unset($value['acceptedName']);
        }
    
        if (isset($value['rootCssClass'])) {
            $this->rootCssClass = $value['rootCssClass'];
            unset($value['rootCssClass']);
        }
    
        if (isset($value['useApiThumbnail'])) {
            $this->useApiThumbnail = $value['useApiThumbnail'];
            unset($value['useApiThumbnail']);
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
        if (null !== $this->clientId) {
            $output['client_id'] = $this->clientId;
        }
        if (null !== $this->clientSecret) {
            $output['client_secret'] = $this->clientSecret;
        }
        if (null !== $this->accessToken) {
            $output['accessToken'] = $this->accessToken;
        }
        if (null !== $this->root) {
            $output['root'] = $this->root;
        }
        if (null !== $this->oneDriveApiClient) {
            $output['OneDriveApiClient'] = $this->oneDriveApiClient;
        }
        if (null !== $this->path) {
            $output['path'] = $this->path;
        }
        if (null !== $this->separator) {
            $output['separator'] = $this->separator;
        }
        if (null !== $this->tmbPath) {
            $output['tmbPath'] = $this->tmbPath;
        }
        if (null !== $this->tmbURL) {
            $output['tmbURL'] = $this->tmbURL;
        }
        if (null !== $this->tmpPath) {
            $output['tmpPath'] = $this->tmpPath;
        }
        if (null !== $this->acceptedName) {
            $output['acceptedName'] = $this->acceptedName;
        }
        if (null !== $this->rootCssClass) {
            $output['rootCssClass'] = $this->rootCssClass;
        }
        if (null !== $this->useApiThumbnail) {
            $output['useApiThumbnail'] = $this->useApiThumbnail;
        }
    
        return $output;
    }
    

}
