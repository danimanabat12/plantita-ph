<?php
    session_start();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        unset($_SESSION['cart'][$id]);
        echo "<script>history.go(-1);</script>";
        exit;
    }
 ?>