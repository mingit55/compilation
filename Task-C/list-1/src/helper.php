<?php
function dump(){
    foreach(func_get_args() as $arg){
        echo "<pre>";
        var_dump($arg);
        echo "</pre>";
        echo "<br>";
    }
}

function dd(){
    dump(...func_get_args());
    exit;
}

function user(){
    return isset($_SESSION['user']) ? $_SESSION['user'] : false;
}

function go($url, $message = ""){
    echo "<script>";
    echo "location.href='$url';";
    if($message != "") echo "alert('$message');";
    echo "</script>";
}

function back($message){
    echo "<script>";
    echo "history.back()";
    if($message != "") echo "alert('$message');";
    echo "</script>";
}

function view($pagePath, $output = []){
    extract($output);
    $pagePath = _VIEW_ . DS . str_replace("/", DS, $pagePath) . ".php";

    if(is_file($pagePath)) {
        require $pagePath;
    }
}