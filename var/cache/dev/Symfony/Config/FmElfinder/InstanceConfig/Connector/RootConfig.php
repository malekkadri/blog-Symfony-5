<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector;

require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'AttributesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'ArchiversConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'FlysystemConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'PluginsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'DriverOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'Dropbox2SettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'BoxSettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'OnedriveSettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'FtpSettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'MysqlSettingsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class RootConfig 
{
    private $driver;
    private $volumeId;
    private $path;
    private $autoload;
    private $phash;
    private $trashHash;
    private $locale;
    private $i18nFolderName;
    private $mimeDetect;
    private $mimefile;
    private $securityVoter;
    private $startPath;
    private $encoding;
    private $url;
    private $alias;
    private $imgLib;
    private $tmbPath;
    private $tmbPathMode;
    private $tmbUrl;
    private $tmbSize;
    private $tmbCrop;
    private $tmbBgColor;
    private $quarantine;
    private $copyOverwrite;
    private $copyJoin;
    private $copyFrom;
    private $copyTo;
    private $uploadOverwrite;
    private $fileMode;
    private $uploadAllow;
    private $uploadDeny;
    private $uploadOrder;
    private $uploadMaxSize;
    private $uploadMaxConn;
    private $defaults;
    private $attributes;
    private $acceptedName;
    private $showHidden;
    private $disabledCommands;
    private $treeDeep;
    private $checkSubfolders;
    private $separator;
    private $dateFormat;
    private $timeFormat;
    private $archiveMimes;
    private $archivers;
    private $flysystem;
    private $glideUrl;
    private $glideKey;
    private $plugins;
    private $driverOptions;
    private $dropbox2Settings;
    private $boxSettings;
    private $onedriveSettings;
    private $ftpSettings;
    private $mysqlSettings;
    
    /**
     * @default 'LocalFileSystem'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function driver($value): self
    {
        $this->driver = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function volumeId($value): self
    {
        $this->volumeId = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): self
    {
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoload($value): self
    {
        $this->autoload = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function phash($value): self
    {
        $this->phash = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function trashHash($value): self
    {
        $this->trashHash = $value;
    
        return $this;
    }
    
    /**
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
    public function i18nFolderName($value): self
    {
        $this->i18nFolderName = $value;
    
        return $this;
    }
    
    /**
     * @default 'auto'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mimeDetect($value): self
    {
        $this->mimeDetect = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mimefile($value): self
    {
        $this->mimefile = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityVoter($value): self
    {
        $this->securityVoter = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function startPath($value): self
    {
        $this->startPath = $value;
    
        return $this;
    }
    
    /**
     * @default 'UTF-8'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function encoding($value): self
    {
        $this->encoding = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function url($value): self
    {
        $this->url = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function alias($value): self
    {
        $this->alias = $value;
    
        return $this;
    }
    
    /**
     * @default 'auto'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function imgLib($value): self
    {
        $this->imgLib = $value;
    
        return $this;
    }
    
    /**
     * @default '.tmb'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmbPath($value): self
    {
        $this->tmbPath = $value;
    
        return $this;
    }
    
    /**
     * @default 511
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmbPathMode($value): self
    {
        $this->tmbPathMode = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmbUrl($value): self
    {
        $this->tmbUrl = $value;
    
        return $this;
    }
    
    /**
     * @default 48
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function tmbSize($value): self
    {
        $this->tmbSize = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function tmbCrop($value): self
    {
        $this->tmbCrop = $value;
    
        return $this;
    }
    
    /**
     * @default '#ffffff'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmbBgColor($value): self
    {
        $this->tmbBgColor = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function quarantine($value): self
    {
        $this->quarantine = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function copyOverwrite($value): self
    {
        $this->copyOverwrite = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function copyJoin($value): self
    {
        $this->copyJoin = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function copyFrom($value): self
    {
        $this->copyFrom = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function copyTo($value): self
    {
        $this->copyTo = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function uploadOverwrite($value): self
    {
        $this->uploadOverwrite = $value;
    
        return $this;
    }
    
    /**
     * @default 420
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fileMode($value): self
    {
        $this->fileMode = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function uploadAllow($value): self
    {
        $this->uploadAllow = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function uploadDeny($value): self
    {
        $this->uploadDeny = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function uploadOrder($value): self
    {
        $this->uploadOrder = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uploadMaxSize($value): self
    {
        $this->uploadMaxSize = $value;
    
        return $this;
    }
    
    /**
     * @default 3
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function uploadMaxConn($value): self
    {
        $this->uploadMaxConn = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function defaults(string $defaults, $value): self
    {
        $this->defaults[$defaults] = $value;
    
        return $this;
    }
    
    public function attributes(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\AttributesConfig
    {
        return $this->attributes[] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\AttributesConfig($value);
    }
    
    /**
     * @default '/^\\w[\\w\\s\\.\\%\\-]*$/u'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function acceptedName($value): self
    {
        $this->acceptedName = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showHidden($value): self
    {
        $this->showHidden = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function disabledCommands($value): self
    {
        $this->disabledCommands = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function treeDeep($value): self
    {
        $this->treeDeep = $value;
    
        return $this;
    }
    
    /**
     * @default 1
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function checkSubfolders($value): self
    {
        $this->checkSubfolders = $value;
    
        return $this;
    }
    
    /**
     * @default '\\'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function separator($value): self
    {
        $this->separator = $value;
    
        return $this;
    }
    
    /**
     * @default 'j M Y H:i'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dateFormat($value): self
    {
        $this->dateFormat = $value;
    
        return $this;
    }
    
    /**
     * @default 'H:i'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function timeFormat($value): self
    {
        $this->timeFormat = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function archiveMimes($value): self
    {
        $this->archiveMimes = $value;
    
        return $this;
    }
    
    public function archivers(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\ArchiversConfig
    {
        if (null === $this->archivers) {
            $this->archivers = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\ArchiversConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "archivers()" has already been initialized. You cannot pass values the second time you call archivers().');
        }
    
        return $this->archivers;
    }
    
    public function flysystem(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FlysystemConfig
    {
        if (null === $this->flysystem) {
            $this->flysystem = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FlysystemConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "flysystem()" has already been initialized. You cannot pass values the second time you call flysystem().');
        }
    
        return $this->flysystem;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function glideUrl($value): self
    {
        $this->glideUrl = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function glideKey($value): self
    {
        $this->glideKey = $value;
    
        return $this;
    }
    
    public function plugins(string $name, array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\PluginsConfig
    {
        if (!isset($this->plugins[$name])) {
            return $this->plugins[$name] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\PluginsConfig($value);
        }
        if ([] === $value) {
            return $this->plugins[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "plugins()" has already been initialized. You cannot pass values the second time you call plugins().');
    }
    
    public function driverOptions(string $name, array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\DriverOptionsConfig
    {
        if (!isset($this->driverOptions[$name])) {
            return $this->driverOptions[$name] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\DriverOptionsConfig($value);
        }
        if ([] === $value) {
            return $this->driverOptions[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "driverOptions()" has already been initialized. You cannot pass values the second time you call driverOptions().');
    }
    
    public function dropbox2Settings(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2SettingsConfig
    {
        if (null === $this->dropbox2Settings) {
            $this->dropbox2Settings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "dropbox2Settings()" has already been initialized. You cannot pass values the second time you call dropbox2Settings().');
        }
    
        return $this->dropbox2Settings;
    }
    
    public function boxSettings(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\BoxSettingsConfig
    {
        if (null === $this->boxSettings) {
            $this->boxSettings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\BoxSettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "boxSettings()" has already been initialized. You cannot pass values the second time you call boxSettings().');
        }
    
        return $this->boxSettings;
    }
    
    public function onedriveSettings(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\OnedriveSettingsConfig
    {
        if (null === $this->onedriveSettings) {
            $this->onedriveSettings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\OnedriveSettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "onedriveSettings()" has already been initialized. You cannot pass values the second time you call onedriveSettings().');
        }
    
        return $this->onedriveSettings;
    }
    
    public function ftpSettings(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FtpSettingsConfig
    {
        if (null === $this->ftpSettings) {
            $this->ftpSettings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FtpSettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "ftpSettings()" has already been initialized. You cannot pass values the second time you call ftpSettings().');
        }
    
        return $this->ftpSettings;
    }
    
    public function mysqlSettings(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\MysqlSettingsConfig
    {
        if (null === $this->mysqlSettings) {
            $this->mysqlSettings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\MysqlSettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "mysqlSettings()" has already been initialized. You cannot pass values the second time you call mysqlSettings().');
        }
    
        return $this->mysqlSettings;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['driver'])) {
            $this->driver = $value['driver'];
            unset($value['driver']);
        }
    
        if (isset($value['volume_id'])) {
            $this->volumeId = $value['volume_id'];
            unset($value['volume_id']);
        }
    
        if (isset($value['path'])) {
            $this->path = $value['path'];
            unset($value['path']);
        }
    
        if (isset($value['autoload'])) {
            $this->autoload = $value['autoload'];
            unset($value['autoload']);
        }
    
        if (isset($value['phash'])) {
            $this->phash = $value['phash'];
            unset($value['phash']);
        }
    
        if (isset($value['trash_hash'])) {
            $this->trashHash = $value['trash_hash'];
            unset($value['trash_hash']);
        }
    
        if (isset($value['locale'])) {
            $this->locale = $value['locale'];
            unset($value['locale']);
        }
    
        if (isset($value['i18n_folder_name'])) {
            $this->i18nFolderName = $value['i18n_folder_name'];
            unset($value['i18n_folder_name']);
        }
    
        if (isset($value['mime_detect'])) {
            $this->mimeDetect = $value['mime_detect'];
            unset($value['mime_detect']);
        }
    
        if (isset($value['mimefile'])) {
            $this->mimefile = $value['mimefile'];
            unset($value['mimefile']);
        }
    
        if (isset($value['security_voter'])) {
            $this->securityVoter = $value['security_voter'];
            unset($value['security_voter']);
        }
    
        if (isset($value['start_path'])) {
            $this->startPath = $value['start_path'];
            unset($value['start_path']);
        }
    
        if (isset($value['encoding'])) {
            $this->encoding = $value['encoding'];
            unset($value['encoding']);
        }
    
        if (isset($value['url'])) {
            $this->url = $value['url'];
            unset($value['url']);
        }
    
        if (isset($value['alias'])) {
            $this->alias = $value['alias'];
            unset($value['alias']);
        }
    
        if (isset($value['img_lib'])) {
            $this->imgLib = $value['img_lib'];
            unset($value['img_lib']);
        }
    
        if (isset($value['tmb_path'])) {
            $this->tmbPath = $value['tmb_path'];
            unset($value['tmb_path']);
        }
    
        if (isset($value['tmb_path_mode'])) {
            $this->tmbPathMode = $value['tmb_path_mode'];
            unset($value['tmb_path_mode']);
        }
    
        if (isset($value['tmb_url'])) {
            $this->tmbUrl = $value['tmb_url'];
            unset($value['tmb_url']);
        }
    
        if (isset($value['tmb_size'])) {
            $this->tmbSize = $value['tmb_size'];
            unset($value['tmb_size']);
        }
    
        if (isset($value['tmb_crop'])) {
            $this->tmbCrop = $value['tmb_crop'];
            unset($value['tmb_crop']);
        }
    
        if (isset($value['tmb_bg_color'])) {
            $this->tmbBgColor = $value['tmb_bg_color'];
            unset($value['tmb_bg_color']);
        }
    
        if (isset($value['quarantine'])) {
            $this->quarantine = $value['quarantine'];
            unset($value['quarantine']);
        }
    
        if (isset($value['copy_overwrite'])) {
            $this->copyOverwrite = $value['copy_overwrite'];
            unset($value['copy_overwrite']);
        }
    
        if (isset($value['copy_join'])) {
            $this->copyJoin = $value['copy_join'];
            unset($value['copy_join']);
        }
    
        if (isset($value['copy_from'])) {
            $this->copyFrom = $value['copy_from'];
            unset($value['copy_from']);
        }
    
        if (isset($value['copy_to'])) {
            $this->copyTo = $value['copy_to'];
            unset($value['copy_to']);
        }
    
        if (isset($value['upload_overwrite'])) {
            $this->uploadOverwrite = $value['upload_overwrite'];
            unset($value['upload_overwrite']);
        }
    
        if (isset($value['fileMode'])) {
            $this->fileMode = $value['fileMode'];
            unset($value['fileMode']);
        }
    
        if (isset($value['upload_allow'])) {
            $this->uploadAllow = $value['upload_allow'];
            unset($value['upload_allow']);
        }
    
        if (isset($value['upload_deny'])) {
            $this->uploadDeny = $value['upload_deny'];
            unset($value['upload_deny']);
        }
    
        if (isset($value['upload_order'])) {
            $this->uploadOrder = $value['upload_order'];
            unset($value['upload_order']);
        }
    
        if (isset($value['upload_max_size'])) {
            $this->uploadMaxSize = $value['upload_max_size'];
            unset($value['upload_max_size']);
        }
    
        if (isset($value['upload_max_conn'])) {
            $this->uploadMaxConn = $value['upload_max_conn'];
            unset($value['upload_max_conn']);
        }
    
        if (isset($value['defaults'])) {
            $this->defaults = $value['defaults'];
            unset($value['defaults']);
        }
    
        if (isset($value['attributes'])) {
            $this->attributes = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\AttributesConfig($v); }, $value['attributes']);
            unset($value['attributes']);
        }
    
        if (isset($value['accepted_name'])) {
            $this->acceptedName = $value['accepted_name'];
            unset($value['accepted_name']);
        }
    
        if (isset($value['show_hidden'])) {
            $this->showHidden = $value['show_hidden'];
            unset($value['show_hidden']);
        }
    
        if (isset($value['disabled_commands'])) {
            $this->disabledCommands = $value['disabled_commands'];
            unset($value['disabled_commands']);
        }
    
        if (isset($value['tree_deep'])) {
            $this->treeDeep = $value['tree_deep'];
            unset($value['tree_deep']);
        }
    
        if (isset($value['check_subfolders'])) {
            $this->checkSubfolders = $value['check_subfolders'];
            unset($value['check_subfolders']);
        }
    
        if (isset($value['separator'])) {
            $this->separator = $value['separator'];
            unset($value['separator']);
        }
    
        if (isset($value['date_format'])) {
            $this->dateFormat = $value['date_format'];
            unset($value['date_format']);
        }
    
        if (isset($value['time_format'])) {
            $this->timeFormat = $value['time_format'];
            unset($value['time_format']);
        }
    
        if (isset($value['archive_mimes'])) {
            $this->archiveMimes = $value['archive_mimes'];
            unset($value['archive_mimes']);
        }
    
        if (isset($value['archivers'])) {
            $this->archivers = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\ArchiversConfig($value['archivers']);
            unset($value['archivers']);
        }
    
        if (isset($value['flysystem'])) {
            $this->flysystem = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FlysystemConfig($value['flysystem']);
            unset($value['flysystem']);
        }
    
        if (isset($value['glide_url'])) {
            $this->glideUrl = $value['glide_url'];
            unset($value['glide_url']);
        }
    
        if (isset($value['glide_key'])) {
            $this->glideKey = $value['glide_key'];
            unset($value['glide_key']);
        }
    
        if (isset($value['plugins'])) {
            $this->plugins = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\PluginsConfig($v); }, $value['plugins']);
            unset($value['plugins']);
        }
    
        if (isset($value['driver_options'])) {
            $this->driverOptions = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\DriverOptionsConfig($v); }, $value['driver_options']);
            unset($value['driver_options']);
        }
    
        if (isset($value['dropbox2_settings'])) {
            $this->dropbox2Settings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2SettingsConfig($value['dropbox2_settings']);
            unset($value['dropbox2_settings']);
        }
    
        if (isset($value['box_settings'])) {
            $this->boxSettings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\BoxSettingsConfig($value['box_settings']);
            unset($value['box_settings']);
        }
    
        if (isset($value['onedrive_settings'])) {
            $this->onedriveSettings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\OnedriveSettingsConfig($value['onedrive_settings']);
            unset($value['onedrive_settings']);
        }
    
        if (isset($value['ftp_settings'])) {
            $this->ftpSettings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FtpSettingsConfig($value['ftp_settings']);
            unset($value['ftp_settings']);
        }
    
        if (isset($value['mysql_settings'])) {
            $this->mysqlSettings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\MysqlSettingsConfig($value['mysql_settings']);
            unset($value['mysql_settings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->driver) {
            $output['driver'] = $this->driver;
        }
        if (null !== $this->volumeId) {
            $output['volume_id'] = $this->volumeId;
        }
        if (null !== $this->path) {
            $output['path'] = $this->path;
        }
        if (null !== $this->autoload) {
            $output['autoload'] = $this->autoload;
        }
        if (null !== $this->phash) {
            $output['phash'] = $this->phash;
        }
        if (null !== $this->trashHash) {
            $output['trash_hash'] = $this->trashHash;
        }
        if (null !== $this->locale) {
            $output['locale'] = $this->locale;
        }
        if (null !== $this->i18nFolderName) {
            $output['i18n_folder_name'] = $this->i18nFolderName;
        }
        if (null !== $this->mimeDetect) {
            $output['mime_detect'] = $this->mimeDetect;
        }
        if (null !== $this->mimefile) {
            $output['mimefile'] = $this->mimefile;
        }
        if (null !== $this->securityVoter) {
            $output['security_voter'] = $this->securityVoter;
        }
        if (null !== $this->startPath) {
            $output['start_path'] = $this->startPath;
        }
        if (null !== $this->encoding) {
            $output['encoding'] = $this->encoding;
        }
        if (null !== $this->url) {
            $output['url'] = $this->url;
        }
        if (null !== $this->alias) {
            $output['alias'] = $this->alias;
        }
        if (null !== $this->imgLib) {
            $output['img_lib'] = $this->imgLib;
        }
        if (null !== $this->tmbPath) {
            $output['tmb_path'] = $this->tmbPath;
        }
        if (null !== $this->tmbPathMode) {
            $output['tmb_path_mode'] = $this->tmbPathMode;
        }
        if (null !== $this->tmbUrl) {
            $output['tmb_url'] = $this->tmbUrl;
        }
        if (null !== $this->tmbSize) {
            $output['tmb_size'] = $this->tmbSize;
        }
        if (null !== $this->tmbCrop) {
            $output['tmb_crop'] = $this->tmbCrop;
        }
        if (null !== $this->tmbBgColor) {
            $output['tmb_bg_color'] = $this->tmbBgColor;
        }
        if (null !== $this->quarantine) {
            $output['quarantine'] = $this->quarantine;
        }
        if (null !== $this->copyOverwrite) {
            $output['copy_overwrite'] = $this->copyOverwrite;
        }
        if (null !== $this->copyJoin) {
            $output['copy_join'] = $this->copyJoin;
        }
        if (null !== $this->copyFrom) {
            $output['copy_from'] = $this->copyFrom;
        }
        if (null !== $this->copyTo) {
            $output['copy_to'] = $this->copyTo;
        }
        if (null !== $this->uploadOverwrite) {
            $output['upload_overwrite'] = $this->uploadOverwrite;
        }
        if (null !== $this->fileMode) {
            $output['fileMode'] = $this->fileMode;
        }
        if (null !== $this->uploadAllow) {
            $output['upload_allow'] = $this->uploadAllow;
        }
        if (null !== $this->uploadDeny) {
            $output['upload_deny'] = $this->uploadDeny;
        }
        if (null !== $this->uploadOrder) {
            $output['upload_order'] = $this->uploadOrder;
        }
        if (null !== $this->uploadMaxSize) {
            $output['upload_max_size'] = $this->uploadMaxSize;
        }
        if (null !== $this->uploadMaxConn) {
            $output['upload_max_conn'] = $this->uploadMaxConn;
        }
        if (null !== $this->defaults) {
            $output['defaults'] = $this->defaults;
        }
        if (null !== $this->attributes) {
            $output['attributes'] = array_map(function ($v) { return $v->toArray(); }, $this->attributes);
        }
        if (null !== $this->acceptedName) {
            $output['accepted_name'] = $this->acceptedName;
        }
        if (null !== $this->showHidden) {
            $output['show_hidden'] = $this->showHidden;
        }
        if (null !== $this->disabledCommands) {
            $output['disabled_commands'] = $this->disabledCommands;
        }
        if (null !== $this->treeDeep) {
            $output['tree_deep'] = $this->treeDeep;
        }
        if (null !== $this->checkSubfolders) {
            $output['check_subfolders'] = $this->checkSubfolders;
        }
        if (null !== $this->separator) {
            $output['separator'] = $this->separator;
        }
        if (null !== $this->dateFormat) {
            $output['date_format'] = $this->dateFormat;
        }
        if (null !== $this->timeFormat) {
            $output['time_format'] = $this->timeFormat;
        }
        if (null !== $this->archiveMimes) {
            $output['archive_mimes'] = $this->archiveMimes;
        }
        if (null !== $this->archivers) {
            $output['archivers'] = $this->archivers->toArray();
        }
        if (null !== $this->flysystem) {
            $output['flysystem'] = $this->flysystem->toArray();
        }
        if (null !== $this->glideUrl) {
            $output['glide_url'] = $this->glideUrl;
        }
        if (null !== $this->glideKey) {
            $output['glide_key'] = $this->glideKey;
        }
        if (null !== $this->plugins) {
            $output['plugins'] = array_map(function ($v) { return $v->toArray(); }, $this->plugins);
        }
        if (null !== $this->driverOptions) {
            $output['driver_options'] = array_map(function ($v) { return $v->toArray(); }, $this->driverOptions);
        }
        if (null !== $this->dropbox2Settings) {
            $output['dropbox2_settings'] = $this->dropbox2Settings->toArray();
        }
        if (null !== $this->boxSettings) {
            $output['box_settings'] = $this->boxSettings->toArray();
        }
        if (null !== $this->onedriveSettings) {
            $output['onedrive_settings'] = $this->onedriveSettings->toArray();
        }
        if (null !== $this->ftpSettings) {
            $output['ftp_settings'] = $this->ftpSettings->toArray();
        }
        if (null !== $this->mysqlSettings) {
            $output['mysql_settings'] = $this->mysqlSettings->toArray();
        }
    
        return $output;
    }
    

}
