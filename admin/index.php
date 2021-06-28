 
<?php

session_start();
include('../config/db.php');
if(!isset($_SESSION['user']) && empty($_SESSION['user']) ){
 header('location:login.php');
}
?>
<?php include('inc/header.php') ?>

<title>Admin Dashboard</title>

<?php include('inc/nav.php') ?>
