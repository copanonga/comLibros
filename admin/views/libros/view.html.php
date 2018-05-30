<?php
defined('_JEXEC') or die;

class LibrosViewLibros extends JViewLegacy
{
    
    protected $items;
    protected $state;

    public function display($tpl = null)
    {

        Funciones::mostrarZona(__CLASS__,__METHOD__,"Display",1);
        
        $this->items = $this->get('Items');
        $this->state = $this->get('State');

        Funciones::mostrarZona(__CLASS__,__METHOD__,$this->items,1);
        
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

        $canDo	= LibrosHelper::getActions();
        $bar = JToolBar::getInstance('toolbar');

        JToolbarHelper::title(JText::_('COM_LIBROS_MANAGER_LIBROS'), '');

        JToolbarHelper::addNew('libro.add');

        if ($canDo->get('core.edit'))
        {
            JToolbarHelper::editList('libro.edit');
        }

        if ($canDo->get('core.admin'))
        {
            JToolbarHelper::preferences('com_libros');
        }
    }
        
}