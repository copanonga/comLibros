<?php
defined('_JEXEC') or die;

class LibrosViewLibro extends JViewLegacy
{
	protected $item;

	protected $form;

	public function display($tpl = null)
	{
		$this->item		= $this->get('Item');
		$this->form		= $this->get('Form');

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