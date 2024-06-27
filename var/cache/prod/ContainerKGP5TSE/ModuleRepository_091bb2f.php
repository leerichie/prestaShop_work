<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfdea3 = null;
    private $initializerebda3 = null;
    private static $publicProperties82041 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getList', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getInstalledModules', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getMustBeConfiguredModules', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getUpgradableModules', array(), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'setActionUrls', array('collection' => $collection), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        return $this->valueHolderfdea3->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerebda3 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderfdea3) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderfdea3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderfdea3->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerebda3 && ($this->initializerebda3->__invoke($valueHolderfdea3, $this, '__get', ['name' => $name], $this->initializerebda3) || 1) && $this->valueHolderfdea3 = $valueHolderfdea3;
        if (isset(self::$publicProperties82041[$name])) {
            return $this->valueHolderfdea3->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
