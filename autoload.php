<?php

function load($classe)
{
    $pathClass=$classe .'.php';
    if(file_exists($pathClass)){
        require $pathClass;
    }else{
        $pathClass='../model/'. $classe . '.php';
        if(file_exists($pathClass)){
            require $pathClass;
        }
        else{
            $pathClass='../controller/'. $classe . '.php';
            if(file_exists($pathClass)){
                require $pathClass;}
        }
    }
}

spl_autoload_register('load');