<?php
/**
 * Module file
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   LosUi
 * @license    https://github.com/Acplo/LosUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/LosUi
 */
namespace LosUi;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

/**
 * Module class
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   LosUi
 * @license    https://github.com/Acplo/LosUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/LosUi
 */
class Module implements AutoloaderProviderInterface
{
    /**
     * (non-PHPdoc)
     * @see \Zend\ModuleManager\Feature\AutoloaderProviderInterface::getAutoloaderConfig()
     */
    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\ClassMapAutoloader' => [
                __DIR__.'/../../autoload_classmap.php',
            ],
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__,
                ],
            ],
        ];
    }

    public function getConfig()
    {
        return include __DIR__.'/../../config/module.config.php';
    }
}
