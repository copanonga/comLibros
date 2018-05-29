<?php
defined('_JEXEC') or die;

if (!JFactory::getUser()->authorise('core.manage', 'com_libros'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

JRequest::setVar( 'DEBUG', "SI") ;
JRequest::setVar( 'ACTIVAR_DEBUG', "SI") ;
//JRequest::setVar( 'ACTIVAR_DEBUG', "NO") ;

$controller	= JControllerLegacy::getInstance('Libros');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();