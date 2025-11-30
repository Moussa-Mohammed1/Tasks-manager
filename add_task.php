<?php
    session_start(); 
    $task = $_POST['task'];
    $_SESSION['tasks'][] = $task;
    header("Location: index.php");
    exit();