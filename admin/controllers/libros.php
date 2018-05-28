<?php
defined('_JEXEC') or die;

class LibrosControllerLibros extends JControllerAdmin
{
	public function getModel($name = 'Libros', $prefix = 'LibrosModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}
}