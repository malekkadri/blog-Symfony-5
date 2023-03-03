<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class GregwarCaptchaConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $length;
    private $width;
    private $height;
    private $font;
    private $keepValue;
    private $charset;
    private $asFile;
    private $asUrl;
    private $reload;
    private $imageFolder;
    private $webPath;
    private $gcFreq;
    private $expiration;
    private $quality;
    private $invalidMessage;
    private $bypassCode;
    private $whitelistKey;
    private $humanity;
    private $distortion;
    private $maxFrontLines;
    private $maxBehindLines;
    private $interpolation;
    private $textColor;
    private $backgroundColor;
    private $backgroundImages;
    private $disabled;
    private $ignoreAllEffects;
    private $sessionKey;
    
    /**
     * @default 5
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function length($value): self
    {
        $this->length = $value;
    
        return $this;
    }
    
    /**
     * @default 130
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function width($value): self
    {
        $this->width = $value;
    
        return $this;
    }
    
    /**
     * @default 50
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function height($value): self
    {
        $this->height = $value;
    
        return $this;
    }
    
    /**
     * @default 'C:\\Users\\Malik\\Desktop\\blog-main\\vendor\\gregwar\\captcha-bundle\\DependencyInjection/../Generator/Font/captcha.ttf'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function font($value): self
    {
        $this->font = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function keepValue($value): self
    {
        $this->keepValue = $value;
    
        return $this;
    }
    
    /**
     * @default 'abcdefhjkmnprstuvwxyz23456789'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function charset($value): self
    {
        $this->charset = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function asFile($value): self
    {
        $this->asFile = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function asUrl($value): self
    {
        $this->asUrl = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function reload($value): self
    {
        $this->reload = $value;
    
        return $this;
    }
    
    /**
     * @default 'captcha'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function imageFolder($value): self
    {
        $this->imageFolder = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.project_dir%/public'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function webPath($value): self
    {
        $this->webPath = $value;
    
        return $this;
    }
    
    /**
     * @default 100
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function gcFreq($value): self
    {
        $this->gcFreq = $value;
    
        return $this;
    }
    
    /**
     * @default 60
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function expiration($value): self
    {
        $this->expiration = $value;
    
        return $this;
    }
    
    /**
     * @default 50
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function quality($value): self
    {
        $this->quality = $value;
    
        return $this;
    }
    
    /**
     * @default 'Bad code value'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function invalidMessage($value): self
    {
        $this->invalidMessage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bypassCode($value): self
    {
        $this->bypassCode = $value;
    
        return $this;
    }
    
    /**
     * @default 'captcha_whitelist_key'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function whitelistKey($value): self
    {
        $this->whitelistKey = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function humanity($value): self
    {
        $this->humanity = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function distortion($value): self
    {
        $this->distortion = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxFrontLines($value): self
    {
        $this->maxFrontLines = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxBehindLines($value): self
    {
        $this->maxBehindLines = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function interpolation($value): self
    {
        $this->interpolation = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function textColor($value): self
    {
        $this->textColor = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function backgroundColor($value): self
    {
        $this->backgroundColor = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function backgroundImages($value): self
    {
        $this->backgroundImages = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function disabled($value): self
    {
        $this->disabled = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ignoreAllEffects($value): self
    {
        $this->ignoreAllEffects = $value;
    
        return $this;
    }
    
    /**
     * @default 'captcha'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sessionKey($value): self
    {
        $this->sessionKey = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'gregwar_captcha';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['length'])) {
            $this->length = $value['length'];
            unset($value['length']);
        }
    
        if (isset($value['width'])) {
            $this->width = $value['width'];
            unset($value['width']);
        }
    
        if (isset($value['height'])) {
            $this->height = $value['height'];
            unset($value['height']);
        }
    
        if (isset($value['font'])) {
            $this->font = $value['font'];
            unset($value['font']);
        }
    
        if (isset($value['keep_value'])) {
            $this->keepValue = $value['keep_value'];
            unset($value['keep_value']);
        }
    
        if (isset($value['charset'])) {
            $this->charset = $value['charset'];
            unset($value['charset']);
        }
    
        if (isset($value['as_file'])) {
            $this->asFile = $value['as_file'];
            unset($value['as_file']);
        }
    
        if (isset($value['as_url'])) {
            $this->asUrl = $value['as_url'];
            unset($value['as_url']);
        }
    
        if (isset($value['reload'])) {
            $this->reload = $value['reload'];
            unset($value['reload']);
        }
    
        if (isset($value['image_folder'])) {
            $this->imageFolder = $value['image_folder'];
            unset($value['image_folder']);
        }
    
        if (isset($value['web_path'])) {
            $this->webPath = $value['web_path'];
            unset($value['web_path']);
        }
    
        if (isset($value['gc_freq'])) {
            $this->gcFreq = $value['gc_freq'];
            unset($value['gc_freq']);
        }
    
        if (isset($value['expiration'])) {
            $this->expiration = $value['expiration'];
            unset($value['expiration']);
        }
    
        if (isset($value['quality'])) {
            $this->quality = $value['quality'];
            unset($value['quality']);
        }
    
        if (isset($value['invalid_message'])) {
            $this->invalidMessage = $value['invalid_message'];
            unset($value['invalid_message']);
        }
    
        if (isset($value['bypass_code'])) {
            $this->bypassCode = $value['bypass_code'];
            unset($value['bypass_code']);
        }
    
        if (isset($value['whitelist_key'])) {
            $this->whitelistKey = $value['whitelist_key'];
            unset($value['whitelist_key']);
        }
    
        if (isset($value['humanity'])) {
            $this->humanity = $value['humanity'];
            unset($value['humanity']);
        }
    
        if (isset($value['distortion'])) {
            $this->distortion = $value['distortion'];
            unset($value['distortion']);
        }
    
        if (isset($value['max_front_lines'])) {
            $this->maxFrontLines = $value['max_front_lines'];
            unset($value['max_front_lines']);
        }
    
        if (isset($value['max_behind_lines'])) {
            $this->maxBehindLines = $value['max_behind_lines'];
            unset($value['max_behind_lines']);
        }
    
        if (isset($value['interpolation'])) {
            $this->interpolation = $value['interpolation'];
            unset($value['interpolation']);
        }
    
        if (isset($value['text_color'])) {
            $this->textColor = $value['text_color'];
            unset($value['text_color']);
        }
    
        if (isset($value['background_color'])) {
            $this->backgroundColor = $value['background_color'];
            unset($value['background_color']);
        }
    
        if (isset($value['background_images'])) {
            $this->backgroundImages = $value['background_images'];
            unset($value['background_images']);
        }
    
        if (isset($value['disabled'])) {
            $this->disabled = $value['disabled'];
            unset($value['disabled']);
        }
    
        if (isset($value['ignore_all_effects'])) {
            $this->ignoreAllEffects = $value['ignore_all_effects'];
            unset($value['ignore_all_effects']);
        }
    
        if (isset($value['session_key'])) {
            $this->sessionKey = $value['session_key'];
            unset($value['session_key']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->length) {
            $output['length'] = $this->length;
        }
        if (null !== $this->width) {
            $output['width'] = $this->width;
        }
        if (null !== $this->height) {
            $output['height'] = $this->height;
        }
        if (null !== $this->font) {
            $output['font'] = $this->font;
        }
        if (null !== $this->keepValue) {
            $output['keep_value'] = $this->keepValue;
        }
        if (null !== $this->charset) {
            $output['charset'] = $this->charset;
        }
        if (null !== $this->asFile) {
            $output['as_file'] = $this->asFile;
        }
        if (null !== $this->asUrl) {
            $output['as_url'] = $this->asUrl;
        }
        if (null !== $this->reload) {
            $output['reload'] = $this->reload;
        }
        if (null !== $this->imageFolder) {
            $output['image_folder'] = $this->imageFolder;
        }
        if (null !== $this->webPath) {
            $output['web_path'] = $this->webPath;
        }
        if (null !== $this->gcFreq) {
            $output['gc_freq'] = $this->gcFreq;
        }
        if (null !== $this->expiration) {
            $output['expiration'] = $this->expiration;
        }
        if (null !== $this->quality) {
            $output['quality'] = $this->quality;
        }
        if (null !== $this->invalidMessage) {
            $output['invalid_message'] = $this->invalidMessage;
        }
        if (null !== $this->bypassCode) {
            $output['bypass_code'] = $this->bypassCode;
        }
        if (null !== $this->whitelistKey) {
            $output['whitelist_key'] = $this->whitelistKey;
        }
        if (null !== $this->humanity) {
            $output['humanity'] = $this->humanity;
        }
        if (null !== $this->distortion) {
            $output['distortion'] = $this->distortion;
        }
        if (null !== $this->maxFrontLines) {
            $output['max_front_lines'] = $this->maxFrontLines;
        }
        if (null !== $this->maxBehindLines) {
            $output['max_behind_lines'] = $this->maxBehindLines;
        }
        if (null !== $this->interpolation) {
            $output['interpolation'] = $this->interpolation;
        }
        if (null !== $this->textColor) {
            $output['text_color'] = $this->textColor;
        }
        if (null !== $this->backgroundColor) {
            $output['background_color'] = $this->backgroundColor;
        }
        if (null !== $this->backgroundImages) {
            $output['background_images'] = $this->backgroundImages;
        }
        if (null !== $this->disabled) {
            $output['disabled'] = $this->disabled;
        }
        if (null !== $this->ignoreAllEffects) {
            $output['ignore_all_effects'] = $this->ignoreAllEffects;
        }
        if (null !== $this->sessionKey) {
            $output['session_key'] = $this->sessionKey;
        }
    
        return $output;
    }
    

}
