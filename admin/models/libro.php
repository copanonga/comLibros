<?php
defined('_JEXEC') or die;

class LibrosModelLibro extends JModelAdmin
{
    protected $text_prefix = 'COM_LIBROS';

    public function getTable($type = 'Libro', $prefix = 'LibrosTable', $config = array())
    {

        Funciones::mostrarZona(__CLASS__,__METHOD__,$type,1);
        Funciones::mostrarZona(__CLASS__,__METHOD__,$prefix,0);
        Funciones::mostrarZona(__CLASS__,__METHOD__,$config,0);

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
        
        //Funciones::mostrarZona(__CLASS__,__METHOD__,$form,1);

        return $form;
    }

    protected function loadFormData()
    {

        $data = JFactory::getApplication()->getUserState('com_libros.edit.libro.data', array());

        if (empty($data))
        {
                $data = $this->getItem();
        }

        Funciones::mostrarZona(__CLASS__,__METHOD__,$data,0);
        
        return $data;
    }

    protected function prepareTable($table)
    {

        $table->title = htmlspecialchars_decode($table->title, ENT_QUOTES);
        Funciones::mostrarZona(__CLASS__,__METHOD__,$table->title,1);
        
    }
        
}