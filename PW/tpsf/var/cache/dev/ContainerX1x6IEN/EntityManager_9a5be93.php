<?php

namespace ContainerX1x6IEN;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdd01a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerff74e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties46fb4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getConnection', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getMetadataFactory', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getExpressionBuilder', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'beginTransaction', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getCache', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'transactional', array('func' => $func), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'commit', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->commit();
    }

    public function rollback()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'rollback', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getClassMetadata', array('className' => $className), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'createQuery', array('dql' => $dql), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'createNamedQuery', array('name' => $name), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'createQueryBuilder', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'flush', array('entity' => $entity), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'clear', array('entityName' => $entityName), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->clear($entityName);
    }

    public function close()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'close', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->close();
    }

    public function persist($entity)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'persist', array('entity' => $entity), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'remove', array('entity' => $entity), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'refresh', array('entity' => $entity), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'detach', array('entity' => $entity), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'merge', array('entity' => $entity), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'contains', array('entity' => $entity), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getEventManager', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getConfiguration', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'isOpen', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getUnitOfWork', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getProxyFactory', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'initializeObject', array('obj' => $obj), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'getFilters', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'isFiltersStateClean', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'hasFilters', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return $this->valueHolderdd01a->hasFilters();
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

        $instance->initializerff74e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdd01a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdd01a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdd01a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, '__get', ['name' => $name], $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        if (isset(self::$publicProperties46fb4[$name])) {
            return $this->valueHolderdd01a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd01a;

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

        $targetObject = $this->valueHolderdd01a;
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
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd01a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdd01a;
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
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, '__isset', array('name' => $name), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd01a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdd01a;
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
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, '__unset', array('name' => $name), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd01a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdd01a;
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
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, '__clone', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        $this->valueHolderdd01a = clone $this->valueHolderdd01a;
    }

    public function __sleep()
    {
        $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, '__sleep', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;

        return array('valueHolderdd01a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerff74e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerff74e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerff74e && ($this->initializerff74e->__invoke($valueHolderdd01a, $this, 'initializeProxy', array(), $this->initializerff74e) || 1) && $this->valueHolderdd01a = $valueHolderdd01a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd01a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd01a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
