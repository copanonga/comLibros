<?php
defined('_JEXEC') or die;

class LibrosController extends JControllerLegacy
{
    protected $default_view = 'libros';

    public function display($cachable = false, $urlparams = false)
    {

        require_once JPATH_COMPONENT.'/helpers/libro.php';

        $this->mostrarZona(__CLASS__,__METHOD__);

        $view   = $this->input->get('view', 'libros');
        $layout = $this->input->get('layout', 'default');
        $id     = $this->input->getInt('id');

        if ($view == 'libro' && $layout == 'edit' && !$this->checkEditId('com_libros.edit.libro', $id))
        {
            $this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
            $this->setMessage($this->getError(), 'error');
            $this->setRedirect(JRoute::_('index.php?option=com_libros&view=libros', false));

            return false;
        }

        parent::display();

        return $this;

    }

    function mostrarZona($clase,$metodo){

        if (JRequest::getVar( 'DEBUG') == JRequest::getVar( 'ACTIVAR_DEBUG')) {
            echo "------------------------- <br> ";
            echo "Clase: ". $clase ." <br>";
            echo "Método: ". $metodo ." <br>";
            echo "------------------------- <br> ";
        }

    }
        
}