<?php
    session_start();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        unset($_SESSION['cart'][$id]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
 ?>