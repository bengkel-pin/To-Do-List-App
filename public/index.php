<?php

$path = 'App';

if(isset($_SERVER['PATH_INFO'])){
    $path = $_SERVER['PATH_INFO'];
}

require __DIR__ . '/../app/' . $path . '.php';