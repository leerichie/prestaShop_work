<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfdea3 = null;
    private $initializerebda3 = null;
    private static $publicProperties82041 = [
        
    ];
    public function getConnection()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getConnection', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getMetadataFactory', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getExpressionBuilder', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'beginTransaction', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getCache', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getCache();
    }
    public function transactional($func)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'transactional', array('func' => $func), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'wrapInTransaction', array('func' => $func), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'commit', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->commit();
    }
    public function rollback()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'rollback', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getClassMetadata', array('className' => $className), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'createQuery', array('dql' => $dql), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'createNamedQuery', array('name' => $name), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'createQueryBuilder', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'flush', array('entity' => $entity), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'clear', array('entityName' => $entityName), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->clear($entityName);
    }
    public function close()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'close', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->close();
    }
    public function persist($entity)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'persist', array('entity' => $entity), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'remove', array('entity' => $entity), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'refresh', array('entity' => $entity), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'detach', array('entity' => $entity), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'merge', array('entity' => $entity), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getRepository', array('entityName' => $entityName), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'contains', array('entity' => $entity), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getEventManager', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getConfiguration', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'isOpen', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getUnitOfWork', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getProxyFactory', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'initializeObject', array('obj' => $obj), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getFilters', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'isFiltersStateClean', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'hasFilters', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerebda3 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderfdea3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfdea3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderfdea3->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, '__get', ['name' => $name], $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        if (isset(self::$publicProperties82041[$name])) {
            return $this->valueHolderfdea3->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfdea3;
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
        $targetObject = $this->valueHolderfdea3;
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
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfdea3;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderfdea3;
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
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, '__isset', array('name' => $name), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfdea3;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderfdea3;
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
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, '__unset', array('name' => $name), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfdea3;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderfdea3;
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
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, '__clone', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        $this->valueHolderfdea3 = clone $this->valueHolderfdea3;
    }
    public function __sleep()
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, '__sleep', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return array('valueHolderfdea3');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerebda3 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerebda3;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'initializeProxy', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfdea3;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfdea3;
    }
}
