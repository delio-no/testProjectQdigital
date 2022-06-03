<?php

session_start();

if (isset($_POST['btnrm'])) {

    $key = $_POST['key'];

    unset($_SESSION['listWork'][$key]);

    unset($_SESSION['checked'][$key]);

    array_keys($_SESSION['listWork']);

    array_keys($_SESSION['checked']);


    header("location: ../index.php");
}