<?php

namespace ContainerXHsoP0h;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder462ab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4fda3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesadaa3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getConnection', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getMetadataFactory', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getExpressionBuilder', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'beginTransaction', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getCache', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'transactional', array('func' => $func), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'commit', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->commit();
    }

    public function rollback()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'rollback', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getClassMetadata', array('className' => $className), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'createQuery', array('dql' => $dql), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'createNamedQuery', array('name' => $name), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'createQueryBuilder', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'flush', array('entity' => $entity), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'clear', array('entityName' => $entityName), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->clear($entityName);
    }

    public function close()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'close', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->close();
    }

    public function persist($entity)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'persist', array('entity' => $entity), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'remove', array('entity' => $entity), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'refresh', array('entity' => $entity), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'detach', array('entity' => $entity), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'merge', array('entity' => $entity), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'contains', array('entity' => $entity), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getEventManager', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getConfiguration', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'isOpen', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getUnitOfWork', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getProxyFactory', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'initializeObject', array('obj' => $obj), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'getFilters', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'isFiltersStateClean', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'hasFilters', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return $this->valueHolder462ab->hasFilters();
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

        $instance->initializer4fda3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder462ab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder462ab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder462ab->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, '__get', ['name' => $name], $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        if (isset(self::$publicPropertiesadaa3[$name])) {
            return $this->valueHolder462ab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder462ab;

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

        $targetObject = $this->valueHolder462ab;
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
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder462ab;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder462ab;
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
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, '__isset', array('name' => $name), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder462ab;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder462ab;
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
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, '__unset', array('name' => $name), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder462ab;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder462ab;
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
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, '__clone', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        $this->valueHolder462ab = clone $this->valueHolder462ab;
    }

    public function __sleep()
    {
        $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, '__sleep', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;

        return array('valueHolder462ab');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4fda3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4fda3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4fda3 && ($this->initializer4fda3->__invoke($valueHolder462ab, $this, 'initializeProxy', array(), $this->initializer4fda3) || 1) && $this->valueHolder462ab = $valueHolder462ab;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder462ab;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder462ab;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
