<?php
defined('_JEXEC') or die;

class Funciones
{
    function mostrarZona($clase,$metodo,$texto,$mostrarVariables){

        if (JRequest::getVar( 'DEBUG') == JRequest::getVar( 'ACTIVAR_DEBUG')) {
            echo "------------------------- <br> ";
            echo "Clase: ". $clase ." <br>";
            echo "Método: ". $metodo ." <br>";

            if (!is_array($texto)) {
                echo "Texto: ". $texto ." <br>";
                print_r($texto);
                echo "<br>";
            } else {
                echo "Array: <br>";
                print_r($texto);
                echo "<br>";
            }

            if ($mostrarVariables) {

                $numeroG = count($_GET);
                $tagsG = array_keys($_GET);
                $valoresG = array_values($_GET);
                echo "------------------------- <br> ";
                echo "GET: variables y valores <br> ";

                for($i=0 ; $i<$numeroG ; $i++){
                   echo $i .":" . $tagsG[$i] . " : " . $valoresG[$i] . "<br>";
                }

            }

            if ($mostrarVariables) {

                $numeroP = count($_POST);
                $tagsP = array_keys($_POST);
                $valoresP = array_values($_POST);
                echo "------------------------- <br> ";
                echo "POST: variables y valores <br>";

                for($i=0 ; $i<$numeroP ; $i++){
                        if ( is_array($valoresP[$i]) ) {
                                echo "Es array  ..:". $tagsP[$i]."<br>";
                                echo "ocurrencias..:".count($valoresP[$i])."<br>";
                                for($z=0 ; $z<count($valoresP[$i]) ; $z++){
                                    echo "\$z....$z:" . $valoresP[$i][$z] . "<br>";
                                }
                        }	   
                        echo $i .":" .$tagsP[$i] . " : " . $valoresP[$i] . "<br>";
                }

                echo "------------------------- <br> ";

            }

            echo "-----------XXX-------------- <br> ";
        }
        
    }
    
}