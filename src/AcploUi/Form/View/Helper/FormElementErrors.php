<?php
/**
 * Form Element Errors styled for Bootstrap 3
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   AcploUi
 * @license    https://github.com/Acplo/AcploUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/AcploUi
 * @link       http://getbootstrap.com/css/#forms
 */
namespace AcploUi\Form\View\Helper;

use Zend\Form\View\Helper\FormElementErrors as ZendFormElementErrors;

/**
 *
 * Form Element Errors styled for Bootstrap 3
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   AcploUi
 * @license    https://github.com/Acplo/AcploUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/AcploUi
 * @link       http://getbootstrap.com/css/#forms
 */
class FormElementErrors extends ZendFormElementErrors
{
    protected $messageCloseString = '</p></div>';

    protected $messageOpenFormat = '<div%s><p>';

    protected $messageSeparatorString = '</p><p>';
}
