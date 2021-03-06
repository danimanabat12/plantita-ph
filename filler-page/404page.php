<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | Plantita ph</title>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="style.css">
    <?php 
        session_start();
        include('../config/db.php'); 
    ?>
</head>
<body>
    <div class="container-wrapper">
        <div class="sections">
            
        </div>
    </div>
    <div class="container">
        <?php
            include_once '../navbar/navbar.php';
        ?>
        <div class="main-content-container">
            <img src="images/bg-left.png" alt="leaf background - 1" class="bg-left">
            <img src="images/bg-right.png" alt="leaf background - 2" class="bg-right">
            <div class="main-content">
                <h1>404</h1>
                <p class="subheadline">Things are still being planted as of this moment.</p>
                <p class="return-to-home-btn"><a href="../homepage/index.php">Return to homepage</a></p>
            </div>
        </div>
    </div>
    <script src="../navbar/app.js"></script>
</body>
</html>