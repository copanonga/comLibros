<?php
defined('_JEXEC') or die;

class LibrosHelper
{
    public static function getActions($categoryId = 0)
    {
        $user	= JFactory::getUser();
        $result	= new JObject;

        if (empty($categoryId))
        {
                $assetName = 'com_libros';
                $level = 'component';
        }
        else
        {
                $assetName = 'com_libros.category.'.(int) $categoryId;
                $level = 'category';
        }

        $actions = JAccess::getActions('com_libros', $level);

        foreach ($actions as $action)
        {
                $result->set($action->name,	$user->authorise($action->name, $assetName));
        }
        
        Funciones::mostrarZona(__CLASS__,__METHOD__,$result,1);

        return $result;
    }
}