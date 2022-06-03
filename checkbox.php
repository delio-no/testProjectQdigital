<?php

session_start();

if ($_POST['btn'] == "true") {
    $id = $_POST['key'];
    foreach ($_SESSION['checked'] as $key => &$value){
        if($key == $id){
            $_SESSION['checked'][$id] = 'checked';
        }
    }
}

if ($_POST['btn'] == "false"){
    $id = $_POST['key'];
    foreach ($_SESSION['checked'] as $key => &$value){
        if($key == $id){
            $_SESSION['checked'][$id] = 'unchecked';
        }
    }
}

header("location: ../index.php");


