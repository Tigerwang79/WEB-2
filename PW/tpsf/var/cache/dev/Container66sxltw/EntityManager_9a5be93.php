<?php

namespace Container66sxltw;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere5864 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer42db2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6eb50 = [
        
    ];

    public function getConnection()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getConnection', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getMetadataFactory', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getExpressionBuilder', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'beginTransaction', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getCache', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getCache();
    }

    public function transactional($func)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'transactional', array('func' => $func), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'wrapInTransaction', array('func' => $func), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'commit', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->commit();
    }

    public function rollback()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'rollback', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getClassMetadata', array('className' => $className), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'createQuery', array('dql' => $dql), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'createNamedQuery', array('name' => $name), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'createQueryBuilder', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'flush', array('entity' => $entity), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'clear', array('entityName' => $entityName), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->clear($entityName);
    }

    public function close()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'close', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->close();
    }

    public function persist($entity)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'persist', array('entity' => $entity), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'remove', array('entity' => $entity), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'refresh', array('entity' => $entity), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'detach', array('entity' => $entity), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'merge', array('entity' => $entity), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getRepository', array('entityName' => $entityName), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'contains', array('entity' => $entity), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getEventManager', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getConfiguration', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'isOpen', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getUnitOfWork', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getProxyFactory', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'initializeObject', array('obj' => $obj), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'getFilters', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'isFiltersStateClean', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'hasFilters', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return $this->valueHoldere5864->hasFilters();
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

        $instance->initializer42db2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere5864) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere5864 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere5864->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, '__get', ['name' => $name], $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        if (isset(self::$publicProperties6eb50[$name])) {
            return $this->valueHoldere5864->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5864;

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

        $targetObject = $this->valueHoldere5864;
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
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5864;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere5864;
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
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, '__isset', array('name' => $name), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5864;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere5864;
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
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, '__unset', array('name' => $name), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5864;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere5864;
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
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, '__clone', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        $this->valueHoldere5864 = clone $this->valueHoldere5864;
    }

    public function __sleep()
    {
        $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, '__sleep', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;

        return array('valueHoldere5864');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer42db2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer42db2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer42db2 && ($this->initializer42db2->__invoke($valueHoldere5864, $this, 'initializeProxy', array(), $this->initializer42db2) || 1) && $this->valueHoldere5864 = $valueHoldere5864;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere5864;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere5864;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
