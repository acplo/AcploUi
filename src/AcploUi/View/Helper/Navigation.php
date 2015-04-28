<?php
/**
 * Navigation view helper
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   AcploUi
 * @license    https://github.com/Acplo/AcploUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/AcploUi
 */
namespace AcploUi\View\Helper;

use Zend\View\Helper\Navigation as ZendNavigation;

/**
 * Navigation view helper
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   AcploUi
 * @license    https://github.com/Acplo/AcploUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/AcploUi
 */
class Navigation extends ZendNavigation
{
    protected $defaultProxy = 'menu';

    protected $defaultHelpers = [
        'breadcrumbs' => 'AcploUi\View\Helper\Navigation\Breadcrumbs',
        'menu'        => 'AcploUi\View\Helper\Navigation\Menu',
    ];

    public function getPluginManager()
    {
        $pm = parent::getPluginManager();
        foreach ($this->defaultHelpers as $name => $invokableClass) {
            $pm->setInvokableClass($name, $invokableClass);
        }

        return $pm;
    }
}
