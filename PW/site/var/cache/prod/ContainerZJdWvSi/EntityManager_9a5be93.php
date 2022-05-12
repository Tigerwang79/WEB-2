<?php

namespace ContainerZJdWvSi;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder6e15d = null;
    private $initializerd074a = null;
    private static $publicProperties1e0ce = [
        
    ];
    public function getConnection()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getConnection', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getMetadataFactory', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getExpressionBuilder', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'beginTransaction', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getCache', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getCache();
    }
    public function transactional($func)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'transactional', array('func' => $func), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'commit', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->commit();
    }
    public function rollback()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'rollback', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getClassMetadata', array('className' => $className), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'createQuery', array('dql' => $dql), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'createNamedQuery', array('name' => $name), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'createQueryBuilder', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'flush', array('entity' => $entity), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'clear', array('entityName' => $entityName), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->clear($entityName);
    }
    public function close()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'close', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->close();
    }
    public function persist($entity)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'persist', array('entity' => $entity), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'remove', array('entity' => $entity), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'refresh', array('entity' => $entity), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'detach', array('entity' => $entity), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'merge', array('entity' => $entity), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'contains', array('entity' => $entity), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getEventManager', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getConfiguration', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'isOpen', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getUnitOfWork', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getProxyFactory', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'initializeObject', array('obj' => $obj), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'getFilters', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'isFiltersStateClean', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'hasFilters', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return $this->valueHolder6e15d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerd074a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder6e15d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6e15d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder6e15d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, '__get', ['name' => $name], $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        if (isset(self::$publicProperties1e0ce[$name])) {
            return $this->valueHolder6e15d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e15d;
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
        $targetObject = $this->valueHolder6e15d;
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
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e15d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder6e15d;
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
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, '__isset', array('name' => $name), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e15d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder6e15d;
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
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, '__unset', array('name' => $name), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e15d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder6e15d;
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
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, '__clone', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        $this->valueHolder6e15d = clone $this->valueHolder6e15d;
    }
    public function __sleep()
    {
        $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, '__sleep', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
        return array('valueHolder6e15d');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd074a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd074a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd074a && ($this->initializerd074a->__invoke($valueHolder6e15d, $this, 'initializeProxy', array(), $this->initializerd074a) || 1) && $this->valueHolder6e15d = $valueHolder6e15d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6e15d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6e15d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
