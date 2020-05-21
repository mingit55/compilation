<?php

session_start();


define("DS", DIRECTORY_SEPARATOR);
define("_ROOT_", dirname(__DIR__));
define("_SRC_", _ROOT_.DS."src");
define("_PUBLIC_", _ROOT_.DS."public");
define("_VIEW_", _SRC_.DS."Views");


require _SRC_.DS."autoload.php";
require _SRC_.DS."helper.php";
require _SRC_.DS."web.php";