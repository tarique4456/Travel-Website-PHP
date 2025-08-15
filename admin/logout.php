<?php
session_start();

if (isset($_SESSION['admin'])){
    session_unset($_SESSION['admin']);

    // header("Location:../index.php");
    echo "<script LANGUAGE='javascript'>window.alert('Logout Successfully');
            window.location.href='../index.php';</script>";
}

?>