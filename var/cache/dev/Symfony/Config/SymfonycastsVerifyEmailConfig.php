<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SymfonycastsVerifyEmailConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $lifetime;
    
    /**
     * The length of time in seconds that a signed URI is valid for after it is created.
     * @default 3600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function lifetime($value): self
    {
        $this->lifetime = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'symfonycasts_verify_email';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['lifetime'])) {
            $this->lifetime = $value['lifetime'];
            unset($value['lifetime']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->lifetime) {
            $output['lifetime'] = $this->lifetime;
        }
    
        return $output;
    }
    

}
