<?php
/**
 * Well view helper
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   AcploUi
 * @license    https://github.com/Acplo/AcploUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/AcploUi
 * @link       http://getbootstrap.com/components/#wells
 */
namespace AcploUi\View\Helper;

use Zend\Form\View\Helper\AbstractHelper;

/**
 * Well view helper
 *
 * @author     Abel Lopes <abel@abellpes.eti.br>
 * @category   AcploUi
 * @license    https://github.com/Acplo/AcploUi/blob/master/LICENSE BSD-3 License
 * @link       http://github.com/Acplo/AcploUi
 * @link       http://getbootstrap.com/components/#wells
 */
class Well extends AbstractHelper
{
    protected $format = '<div class="well%s">%s</div>';

    public function __invoke($content = '', $class = '')
    {
        if ($content) {
            return $this->render($content, $class);
        }

        return $this;
    }

    public function large($content)
    {
        return $this->render($content, 'well-lg');
    }

    public function small($content)
    {
        return $this->render($content, 'well-sm');
    }

    public function render($content, $class = '')
    {
        if (!empty($class)) {
            $class = ' '.trim($class);
        }

        return sprintf($this->format, $class, $content);
    }
}
