<?php
/**
 * "Fake" Navigation Page to add a divider in the Menu
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   LosUi
 * @license    https://github.com/Acplo/LosUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/LosUi
 */
namespace LosUi\Navigation\Page;

use Zend\Navigation\Page\AbstractPage;

/**
 * "Fake" Navigation Page to add a divider in the Menu
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   LosUi
 * @license    https://github.com/Acplo/LosUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/LosUi
 */
class Divider extends AbstractPage
{
    /**
     * (non-PHPdoc)
     * @see \Zend\Navigation\Page\AbstractPage::getHref()
     */
    public function getHref()
    {
        return '';
    }
}
