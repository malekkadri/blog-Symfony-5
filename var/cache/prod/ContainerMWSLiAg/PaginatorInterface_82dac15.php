<?php

namespace ContainerMWSLiAg;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder51d81 = null;
    private $initializer325ac = null;
    private static $publicPropertiesd574e = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;
        if ($this->valueHolder51d81 === $returnValue = $this->valueHolder51d81->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer325ac = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder51d81) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder51d81 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, '__get', ['name' => $name], $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;
        if (isset(self::$publicPropertiesd574e[$name])) {
            return $this->valueHolder51d81->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51d81;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder51d81;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51d81;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder51d81;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, '__isset', array('name' => $name), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51d81;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder51d81;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, '__unset', array('name' => $name), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51d81;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder51d81;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, '__clone', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;
        $this->valueHolder51d81 = clone $this->valueHolder51d81;
    }
    public function __sleep()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, '__sleep', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;
        return array('valueHolder51d81');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer325ac = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer325ac;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'initializeProxy', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder51d81;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder51d81;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
