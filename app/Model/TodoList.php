<?php

session_start();
if(!isset($_SESSION['todo'])){
    $_SESSION['todo'] = array();
}
?>