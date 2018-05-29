<?php
defined('_JEXEC') or die;

class LibrosTableLibro extends JTable
{
    
    public function __construct(&$db)
    {
        Funciones::mostrarZona(__CLASS__,__METHOD__,"Constructor",0);
        parent::__construct('#__libros', 'id', $db);
    }

    public function bind($array, $ignore = '')
    {
        Funciones::mostrarZona(__CLASS__,__METHOD__,$array,1);
        return parent::bind($array, $ignore);
    }

    public function store($updateNulls = false)
    {
        Funciones::mostrarZona(__CLASS__,__METHOD__,"Store",1);
        Funciones::mostrarZona(__CLASS__,__METHOD__,$updateNulls,0);
        die;
        return parent::store($updateNulls);
    }
        
}