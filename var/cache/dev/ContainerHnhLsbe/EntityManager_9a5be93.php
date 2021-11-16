<?php

namespace ContainerHnhLsbe;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder183ec = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer25cbe = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1ae85 = [
        
    ];

    public function getConnection()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getConnection', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getMetadataFactory', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getExpressionBuilder', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'beginTransaction', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getCache', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getCache();
    }

    public function transactional($func)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'transactional', array('func' => $func), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'wrapInTransaction', array('func' => $func), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'commit', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->commit();
    }

    public function rollback()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'rollback', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getClassMetadata', array('className' => $className), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'createQuery', array('dql' => $dql), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'createNamedQuery', array('name' => $name), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'createQueryBuilder', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'flush', array('entity' => $entity), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'clear', array('entityName' => $entityName), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->clear($entityName);
    }

    public function close()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'close', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->close();
    }

    public function persist($entity)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'persist', array('entity' => $entity), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'remove', array('entity' => $entity), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'refresh', array('entity' => $entity), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'detach', array('entity' => $entity), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'merge', array('entity' => $entity), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getRepository', array('entityName' => $entityName), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'contains', array('entity' => $entity), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getEventManager', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getConfiguration', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'isOpen', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getUnitOfWork', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getProxyFactory', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'initializeObject', array('obj' => $obj), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'getFilters', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'isFiltersStateClean', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'hasFilters', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return $this->valueHolder183ec->hasFilters();
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

        $instance->initializer25cbe = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder183ec) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder183ec = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder183ec->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, '__get', ['name' => $name], $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        if (isset(self::$publicProperties1ae85[$name])) {
            return $this->valueHolder183ec->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder183ec;

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

        $targetObject = $this->valueHolder183ec;
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
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder183ec;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder183ec;
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
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, '__isset', array('name' => $name), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder183ec;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder183ec;
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
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, '__unset', array('name' => $name), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder183ec;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder183ec;
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
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, '__clone', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        $this->valueHolder183ec = clone $this->valueHolder183ec;
    }

    public function __sleep()
    {
        $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, '__sleep', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;

        return array('valueHolder183ec');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer25cbe = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer25cbe;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer25cbe && ($this->initializer25cbe->__invoke($valueHolder183ec, $this, 'initializeProxy', array(), $this->initializer25cbe) || 1) && $this->valueHolder183ec = $valueHolder183ec;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder183ec;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder183ec;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
