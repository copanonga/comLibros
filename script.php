<?php
defined('_JEXEC') or die;

class com_librosInstallerScript
{
	function install($parent)
	{
		$parent->getParent()->setRedirectURL('index.php?option=com_libros');
	}

	function uninstall($parent)
	{
		echo '<p>' . JText::_('COM_LIBROS_UNINSTALL_TEXT') . '</p>';
	}

	function update($parent)
	{
		echo '<p>' . JText::_('COM_LIBROS_UPDATE_TEXT') . '</p>';
	}

	function preflight($type, $parent)
	{
		echo '<p>' . JText::_('COM_LIBROS_PREFLIGHT_' . $type . '_TEXT') . '</p>';
	}

	function postflight($type, $parent)
	{
		echo '<p>' . JText::_('COM_LIBROS_POSTFLIGHT_' . $type . '_TEXT') . '</p>';
	}
}