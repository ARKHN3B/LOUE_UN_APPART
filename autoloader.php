<?php

function loadMyClass($class)
{
    //Je vérifie si la class n'a pas été déclarée :
    if (class_exists($class) === false) {

        //Si elle n'est pas déclaré, je vérifie quelle est bien dans le dossier "model". 
        $string = 'Model/Class/'. $class .'.php';
        $string2 = 'Services/'. $class .'.php';

        if (file_exists($string) === true) { // '===' égal et de même type
            require $string;
        } elseif (file_exists($string2) === true) {
            require $string2;
        }
    }
}

spl_autoload_register('loadMyClass');


?>