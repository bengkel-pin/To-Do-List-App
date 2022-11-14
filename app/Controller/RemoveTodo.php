<?php

require_once __DIR__ . '/../Model/TodoList.php';

$todo = $_GET['number'];

array_splice($_SESSION['todo'], $todo, 1);

header("Location: ../App");
exit();