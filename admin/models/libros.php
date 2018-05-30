<?php
defined('_JEXEC') or die;

class LibrosModelLibros extends JModelList
{
    public function __construct($config = array())
    {

        if (empty($config['filter_fields']))
        {
            $config['filter_fields'] = array(
                'id', 'a.id',
                'title', 'a.title',
                'state', 'a.state',
                'company', 'a.company'
            );
        }
        
        Funciones::mostrarZona(__CLASS__,__METHOD__,$config,1);

        parent::__construct($config);
        
    }

    protected function getListQuery()
    {

        Funciones::mostrarZona(__CLASS__,__METHOD__,"Antes",1);

        $db = $this->getDbo();
        $query	= $db->getQuery(true);

        $query->select(
            $this->getState(
                'list.select',
                'a.id, a.title' ,
                'a.state, a.company'
            )
        );
        $query->from($db->quoteName('#__libros').' AS a');
        
        Funciones::mostrarZona(__CLASS__,__METHOD__,$query,1);

        return $query;
        
    }
        
}