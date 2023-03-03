<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SymfonycastsResetPasswordConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $requestPasswordRepository;
    private $lifetime;
    private $throttleLimit;
    private $enableGarbageCollection;
    
    /**
     * A class that implements ResetPasswordRequestRepositoryInterface - usually your ResetPasswordRequestRepository.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function requestPasswordRepository($value): self
    {
        $this->requestPasswordRepository = $value;
    
        return $this;
    }
    
    /**
     * The length of time in seconds that a password reset request is valid for after it is created.
     * @default 3600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function lifetime($value): self
    {
        $this->lifetime = $value;
    
        return $this;
    }
    
    /**
     * Another password reset cannot be made faster than this throttle time in seconds.
     * @default 3600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function throttleLimit($value): self
    {
        $this->throttleLimit = $value;
    
        return $this;
    }
    
    /**
     * Enable/Disable automatic garbage collection.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableGarbageCollection($value): self
    {
        $this->enableGarbageCollection = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'symfonycasts_reset_password';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['request_password_repository'])) {
            $this->requestPasswordRepository = $value['request_password_repository'];
            unset($value['request_password_repository']);
        }
    
        if (isset($value['lifetime'])) {
            $this->lifetime = $value['lifetime'];
            unset($value['lifetime']);
        }
    
        if (isset($value['throttle_limit'])) {
            $this->throttleLimit = $value['throttle_limit'];
            unset($value['throttle_limit']);
        }
    
        if (isset($value['enable_garbage_collection'])) {
            $this->enableGarbageCollection = $value['enable_garbage_collection'];
            unset($value['enable_garbage_collection']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->requestPasswordRepository) {
            $output['request_password_repository'] = $this->requestPasswordRepository;
        }
        if (null !== $this->lifetime) {
            $output['lifetime'] = $this->lifetime;
        }
        if (null !== $this->throttleLimit) {
            $output['throttle_limit'] = $this->throttleLimit;
        }
        if (null !== $this->enableGarbageCollection) {
            $output['enable_garbage_collection'] = $this->enableGarbageCollection;
        }
    
        return $output;
    }
    

}
