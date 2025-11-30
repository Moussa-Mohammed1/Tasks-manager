<?php
    session_start();
    $task = $_GET['task'];
    $key = array_search($task , $_SESSION['tasks']);
    if($key !== false){
        unset($_SESSION['tasks'][$key]);
    }
    header("Location: index.php");
    exit();