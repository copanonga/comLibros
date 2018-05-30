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
                'company', 'a.company',
                'publish_up', 'a.publish_up',
                'publish_down', 'a.publish_down'
            );
        }
        
        Funciones::mostrarZona(__CLASS__,__METHOD__,$config,1);

        parent::__construct($config);
        
    }
    
    protected function populateState($ordering = null, $direction = null)
    {
        parent::populateState('a.title', 'asc');
    }

    protected function getListQuery()
    {

        Funciones::mostrarZona(__CLASS__,__METHOD__,"Antes",1);

        $db = $this->getDbo();
        $query	= $db->getQuery(true);

        $query->select(
            $this->getState(
                    'list.select',
                    'a.id, a.title,' .
                    'a.state, a.company,' .
                    'a.publish_up, a.publish_down'
            )
        );
        $query->from($db->quoteName('#__libros').' AS a');
        
        $orderCol	= $this->state->get('list.ordering');
        $orderDirn	= $this->state->get('list.direction');
        $query->order($db->escape($orderCol.' '.$orderDirn));
        
        Funciones::mostrarZona(__CLASS__,__METHOD__,$query,1);

        return $query;
        
    }
        
}