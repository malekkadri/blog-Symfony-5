<?php

namespace ContainerOGzeC30;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder51d81 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer325ac = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd574e = [
        
    ];

    public function getConnection()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getConnection', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getMetadataFactory', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getExpressionBuilder', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'beginTransaction', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getCache', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getCache();
    }

    public function transactional($func)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'transactional', array('func' => $func), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'wrapInTransaction', array('func' => $func), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'commit', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->commit();
    }

    public function rollback()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'rollback', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getClassMetadata', array('className' => $className), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'createQuery', array('dql' => $dql), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'createNamedQuery', array('name' => $name), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'createQueryBuilder', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'flush', array('entity' => $entity), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'clear', array('entityName' => $entityName), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->clear($entityName);
    }

    public function close()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'close', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->close();
    }

    public function persist($entity)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'persist', array('entity' => $entity), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'remove', array('entity' => $entity), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'detach', array('entity' => $entity), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'merge', array('entity' => $entity), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getRepository', array('entityName' => $entityName), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'contains', array('entity' => $entity), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getEventManager', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getConfiguration', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'isOpen', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getUnitOfWork', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getProxyFactory', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'initializeObject', array('obj' => $obj), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'getFilters', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'isFiltersStateClean', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, 'hasFilters', array(), $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        return $this->valueHolder51d81->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer325ac = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder51d81) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder51d81 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder51d81->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer325ac && ($this->initializer325ac->__invoke($valueHolder51d81, $this, '__get', ['name' => $name], $this->initializer325ac) || 1) && $this->valueHolder51d81 = $valueHolder51d81;

        if (isset(self::$publicPropertiesd574e[$name])) {
            return $this->valueHolder51d81->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
