<?php
defined('_JEXEC') or die;

class LibrosViewLibros extends JViewLegacy
{
	protected $items;

	public function display($tpl = null)
	{
            $this->items = $this->get('Items');

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