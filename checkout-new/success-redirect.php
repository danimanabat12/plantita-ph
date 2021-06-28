<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantita - Checkout</title>   
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="style.css"> 
    <?php 
        session_start();
        include('../config/db.php'); 
    ?>
</head>
<body>
    <div class="container-wrapper">
        <?php
            include_once '../navbar/navbar.php';
        ?>
        <div class="others second-popup">
            <div class="confirmation-wrapper">
                <div class="confirmation">
                    <h1>Thank you for your purchase!</h1>
                    <p>An email containing the details of this transaction will be sent in the email address you provided. Should you have any more concern, please email us <span>plantitaph@support.com</span></p>
                </div>
            <div class="btns">
                <a href="../homepage/index.php"><p>Go back to home</p></a>
            </div>
            </div>
            <div class="img-wrapper2">
                <img src="images/thankyou-bg.png" alt="plant leaves">
            </div>
        </div>
    </div>
    <script src="../navbar/app.js"></script>
</body>
</html>