<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy | Plantita ph</title>
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
        <div class="sections">
            <div class="container">
                <div class="main-content-container">
                    <img src="images/bg-left.png" alt="leaf background - 1" class="bg-left">
                    <img src="images/bg-right.png" alt="leaf background - 2" class="bg-right">
                    <div class="main-content">
                        <h2>Refund and Fulfilment Policies</h2>
                        <p class="sub-headline"> We guarantee the quality and count of our plants.  Our product is shipped according to your zone and per the customer’s requested shipping date(Weather Permitted).  Due to our product being live plants, we do not accept returns, If however, you have an issue with your product, please send pictures and or contact us within 30 days of delivery and we will either re-ship or refund your money.  If you need to cancel an order, please be sure to cancel at least 5 days prior to your shipping date, so that we have enough time to re-process your order and remove it from our shipping orders.  If you contact us after your product has been shipped we cannot guarantee any refunds.</p>
                        <p class="return-to-home-btn"><a href="../homepage/index.php">I agree the Policies</a></p>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footer-container">
                    <div class="footer-logo">
                        <img src="../homepage/images/Logo.svg" alt="logo-for-footer" class="logo-footer">
                        <h2 class="footer-headings">plantita.ph</h2>
                    </div>
                    <div class="footer-socmeds">
                        <a href="https://facebook.com"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://twitter.com"><i class="fab fa-twitter fa-2x"></i></a>
                    </div>
                    <div class="copyright">
                    <p>Copyright 2021 Plantita.ph. All rights reserved.</p>
                    </div>
                </div>      
            </footer>
        </div>
        
    </div>
    
    <script src="../navbar/app.js"></script>
</body>
</html>
