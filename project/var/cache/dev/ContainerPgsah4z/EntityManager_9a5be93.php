<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldercee00 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer34824 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb0e9f = [
        
    ];

    public function getConnection()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getConnection', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getMetadataFactory', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getExpressionBuilder', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'beginTransaction', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getCache', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getCache();
    }

    public function transactional($func)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'transactional', array('func' => $func), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->transactional($func);
    }

    public function commit()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'commit', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->commit();
    }

    public function rollback()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'rollback', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getClassMetadata', array('className' => $className), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'createQuery', array('dql' => $dql), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'createNamedQuery', array('name' => $name), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'createQueryBuilder', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'flush', array('entity' => $entity), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'clear', array('entityName' => $entityName), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->clear($entityName);
    }

    public function close()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'close', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->close();
    }

    public function persist($entity)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'persist', array('entity' => $entity), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'remove', array('entity' => $entity), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'refresh', array('entity' => $entity), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'detach', array('entity' => $entity), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'merge', array('entity' => $entity), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getRepository', array('entityName' => $entityName), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'contains', array('entity' => $entity), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getEventManager', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getConfiguration', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'isOpen', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getUnitOfWork', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getProxyFactory', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'initializeObject', array('obj' => $obj), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'getFilters', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'isFiltersStateClean', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'hasFilters', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return $this->valueHoldercee00->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer34824 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercee00) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercee00 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercee00->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, '__get', ['name' => $name], $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        if (isset(self::$publicPropertiesb0e9f[$name])) {
            return $this->valueHoldercee00->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercee00;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHoldercee00;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercee00;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldercee00;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, '__isset', array('name' => $name), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercee00;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercee00;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, '__unset', array('name' => $name), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercee00;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercee00;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, '__clone', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        $this->valueHoldercee00 = clone $this->valueHoldercee00;
    }

    public function __sleep()
    {
        $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, '__sleep', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;

        return array('valueHoldercee00');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer34824 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer34824;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer34824 && ($this->initializer34824->__invoke($valueHoldercee00, $this, 'initializeProxy', array(), $this->initializer34824) || 1) && $this->valueHoldercee00 = $valueHoldercee00;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercee00;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHoldercee00;
    }


}
