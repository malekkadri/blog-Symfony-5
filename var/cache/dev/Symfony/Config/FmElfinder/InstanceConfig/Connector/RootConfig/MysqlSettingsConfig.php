<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MysqlSettingsConfig 
{
    private $enabled;
    private $host;
    private $user;
    private $pass;
    private $db;
    private $port;
    private $socket;
    private $filesTable;
    private $tmbPath;
    private $tmpPath;
    private $rootCssClass;
    private $noSessionCache;
    
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
    public function host($value): self
    {
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function user($value): self
    {
        $this->user = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pass($value): self
    {
        $this->pass = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function db($value): self
    {
        $this->db = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function port($value): self
    {
        $this->port = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function socket($value): self
    {
        $this->socket = $value;
    
        return $this;
    }
    
    /**
     * @default 'elfinder_file'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filesTable($value): self
    {
        $this->filesTable = $value;
    
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
    public function tmpPath($value): self
    {
        $this->tmpPath = $value;
    
        return $this;
    }
    
    /**
     * @default 'elfinder-navbar-root-sql'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rootCssClass($value): self
    {
        $this->rootCssClass = $value;
    
        return $this;
    }
    
    /**
     * @default 'hasdirs'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function noSessionCache($value): self
    {
        $this->noSessionCache = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['host'])) {
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (isset($value['user'])) {
            $this->user = $value['user'];
            unset($value['user']);
        }
    
        if (isset($value['pass'])) {
            $this->pass = $value['pass'];
            unset($value['pass']);
        }
    
        if (isset($value['db'])) {
            $this->db = $value['db'];
            unset($value['db']);
        }
    
        if (isset($value['port'])) {
            $this->port = $value['port'];
            unset($value['port']);
        }
    
        if (isset($value['socket'])) {
            $this->socket = $value['socket'];
            unset($value['socket']);
        }
    
        if (isset($value['files_table'])) {
            $this->filesTable = $value['files_table'];
            unset($value['files_table']);
        }
    
        if (isset($value['tmbPath'])) {
            $this->tmbPath = $value['tmbPath'];
            unset($value['tmbPath']);
        }
    
        if (isset($value['tmpPath'])) {
            $this->tmpPath = $value['tmpPath'];
            unset($value['tmpPath']);
        }
    
        if (isset($value['rootCssClass'])) {
            $this->rootCssClass = $value['rootCssClass'];
            unset($value['rootCssClass']);
        }
    
        if (isset($value['noSessionCache'])) {
            $this->noSessionCache = $value['noSessionCache'];
            unset($value['noSessionCache']);
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
        if (null !== $this->host) {
            $output['host'] = $this->host;
        }
        if (null !== $this->user) {
            $output['user'] = $this->user;
        }
        if (null !== $this->pass) {
            $output['pass'] = $this->pass;
        }
        if (null !== $this->db) {
            $output['db'] = $this->db;
        }
        if (null !== $this->port) {
            $output['port'] = $this->port;
        }
        if (null !== $this->socket) {
            $output['socket'] = $this->socket;
        }
        if (null !== $this->filesTable) {
            $output['files_table'] = $this->filesTable;
        }
        if (null !== $this->tmbPath) {
            $output['tmbPath'] = $this->tmbPath;
        }
        if (null !== $this->tmpPath) {
            $output['tmpPath'] = $this->tmpPath;
        }
        if (null !== $this->rootCssClass) {
            $output['rootCssClass'] = $this->rootCssClass;
        }
        if (null !== $this->noSessionCache) {
            $output['noSessionCache'] = $this->noSessionCache;
        }
    
        return $output;
    }
    

}
