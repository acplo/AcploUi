<?php
/**
 * "Fake" Navigation Page to add a divider in the Menu
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   AcploUi
 * @license    https://github.com/Acplo/AcploUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/AcploUi
 */
namespace AcploUi\Navigation\Page;

use Zend\Navigation\Page\AbstractPage;

/**
 * "Fake" Navigation Page to add a divider in the Menu
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   AcploUi
 * @license    https://github.com/Acplo/AcploUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/AcploUi
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
