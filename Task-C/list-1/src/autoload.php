<?php

function loadClass($classPath){
    $classPath = str_replace("\\", DS, $classPath);
    $filePath = _SRC_.DS.$classPath . ".php";
    if(is_file($filePath)) require $filePath;
}

spl_autoload_register("loadClass");