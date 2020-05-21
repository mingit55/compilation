<?php

use Apps\Route;

Route::get("/", "MainController@indexPage");
Route::get("/test/{input}", "MainController@test");

Route::connect();