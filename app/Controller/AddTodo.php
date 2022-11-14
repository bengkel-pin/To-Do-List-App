<?php

require_once __DIR__ . '/../Model/TodoList.php';

if (isset($_POST['submit'])) {
    if (isset($_POST['submit'])) {

        $todo = $_POST['todo'];
        $number = sizeof($_SESSION['todo']);

        $_SESSION['todo'][$number] = $todo;

        header("Location: ../App");
        exit();
    }
}
