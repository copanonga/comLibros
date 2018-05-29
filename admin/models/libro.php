<?php
defined('_JEXEC') or die;

class LibrosModelLibro extends JModelAdmin
{
	protected $text_prefix = 'COM_LIBROS';

	public function getTable($type = 'Libro', $prefix = 'LibroTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	public function getForm($data = array(), $loadData = true)
	{
		$app = JFactory::getApplication();

		$form = $this->loadForm('com_libro.libro', 'libro', array('control' => 'jform', 'load_data' => $loadData));
		if (empty($form))
		{
			return false;
		}

		return $form;
	}

	protected function loadFormData()
	{
		$data = JFactory::getApplication()->getUserState('com_libros.edit.libro.data', array());

		if (empty($data))
		{
			$data = $this->getItem();
		}

		return $data;
	}

	protected function prepareTable($table)
	{
		$table->title		= htmlspecialchars_decode($table->title, ENT_QUOTES);
	}
}