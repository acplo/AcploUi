<?php
/**
 * Form Collection View Helper
 *
 * This view helper overrides the default ZF2 helper to use the AcploFormRow
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   AcploUi
 * @license    https://github.com/Acplo/AcploUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/AcploUi
 * @link       http://getbootstrap.com/css/#forms
 */
namespace AcploUi\Form\View\Helper;

use Zend\Form\View\Helper\FormCollection as ZfFormCollection;

/**
 * Form Collection View Helper
 *
 * This view helper overrides the default ZF2 helper to use the AcploFormRow
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   AcploUi
 * @license    https://github.com/Acplo/AcploUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/AcploUi
 * @link       http://getbootstrap.com/css/#forms
 */
class FormCollection extends ZfFormCollection
{
    protected $defaultElementHelper = 'acploformrow';
}
