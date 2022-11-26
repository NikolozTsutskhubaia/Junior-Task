<?php

//autoloader

spl_autoload_register('autoLoader');

function autoLoader($className)
{
    $path = "Classes/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    include_once $fullPath;
}
