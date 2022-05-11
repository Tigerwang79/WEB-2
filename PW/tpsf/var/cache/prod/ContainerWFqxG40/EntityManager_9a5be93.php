<?php

namespace ContainerWFqxG40;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera31ea = null;
    private $initializer4da3a = null;
    private static $publicProperties9db16 = [
        
    ];
    public function getConnection()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getConnection', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getMetadataFactory', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getExpressionBuilder', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'beginTransaction', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getCache', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getCache();
    }
    public function transactional($func)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'transactional', array('func' => $func), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'commit', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->commit();
    }
    public function rollback()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'rollback', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getClassMetadata', array('className' => $className), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'createQuery', array('dql' => $dql), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'createNamedQuery', array('name' => $name), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'createQueryBuilder', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'flush', array('entity' => $entity), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'clear', array('entityName' => $entityName), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->clear($entityName);
    }
    public function close()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'close', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->close();
    }
    public function persist($entity)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'persist', array('entity' => $entity), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'remove', array('entity' => $entity), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'refresh', array('entity' => $entity), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'detach', array('entity' => $entity), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'merge', array('entity' => $entity), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'contains', array('entity' => $entity), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getEventManager', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getConfiguration', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'isOpen', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getUnitOfWork', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getProxyFactory', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'initializeObject', array('obj' => $obj), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'getFilters', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'isFiltersStateClean', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'hasFilters', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return $this->valueHoldera31ea->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer4da3a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera31ea) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera31ea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera31ea->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, '__get', ['name' => $name], $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        if (isset(self::$publicProperties9db16[$name])) {
            return $this->valueHoldera31ea->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera31ea;
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
        $targetObject = $this->valueHoldera31ea;
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
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera31ea;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera31ea;
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
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, '__isset', array('name' => $name), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera31ea;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera31ea;
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
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, '__unset', array('name' => $name), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera31ea;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera31ea;
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
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, '__clone', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        $this->valueHoldera31ea = clone $this->valueHoldera31ea;
    }
    public function __sleep()
    {
        $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, '__sleep', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
        return array('valueHoldera31ea');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4da3a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4da3a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer4da3a && ($this->initializer4da3a->__invoke($valueHoldera31ea, $this, 'initializeProxy', array(), $this->initializer4da3a) || 1) && $this->valueHoldera31ea = $valueHoldera31ea;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera31ea;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera31ea;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
