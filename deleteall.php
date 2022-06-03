<?php
session_start();

if (isset($_POST['btnrmall'])) {
    //$_SESSION['listWork'] = [];
    session_destroy();
}

header("location: ../index.php");