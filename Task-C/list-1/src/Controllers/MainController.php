<?php
namespace Controllers;

class MainController {
    function indexPage(){
        view("index");
    }

    function test($input){
        view("practice/test", ["input" => $input]);
    }
}