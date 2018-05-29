<?php
defined('_JEXEC') or die;

class LibrosViewLibro extends JViewLegacy
{
    protected $item;

    protected $form;

    public function display($tpl = null)
    {

        Funciones::mostrarZona(__CLASS__,__METHOD__,"Display",1);

        $this->item = $this->get('Item');
        
        Funciones::mostrarZona(__CLASS__,__METHOD__,$this->item,1);
        
        $this->form = $this->get('Form');

        
        
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode("\n", $errors));
            return false;
        }

        $this->addToolbar();
        parent::display($tpl);

    }

    protected function addToolbar()
    {
        JFactory::getApplication()->input->set('hidemainmenu', true);

        JToolbarHelper::title(JText::_('COM_LIBROS_MANAGER_LIBROS'), '');

        JToolbarHelper::save('libro.save');

        if (empty($this->item->id))
        {
            JToolbarHelper::cancel('libro.cancel');
        }
        else
        {
            JToolbarHelper::cancel('libro.cancel', 'JTOOLBAR_CLOSE');
        }
    }
        
}