<?php

session_start();

if (!isset($_POST['btnadd'])) {
    $work = $_POST["work"];
    if(isset($_SESSION['listWork'])){
        if (/*end($_SESSION['listWork']) != $work &&*/ $work != null){
        array_push($_SESSION['listWork'], $work);
        array_push($_SESSION['checked'], 'unchecked');
        }
    }
    else {
        $_SESSION['checked'] = array();
        $_SESSION['listWork'] = array();
        array_unshift($_SESSION['listWork'], $work);
        array_unshift($_SESSION['checked'], 'unchecked');
    }
    header("location: ../index.php");
}
