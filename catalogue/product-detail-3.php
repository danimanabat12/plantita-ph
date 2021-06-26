<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <title>Oregano | Plantita.ph</title>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="pd-style.css">
</head>
<body>
    <div class="container-wrapper">
        <?php
            include_once '../navbar/navbar.php';
        ?>
        <!---content-->
        <div class="sections">
            <section class="landing-page">
                <div class="main-landing">
                    <div class="product-img">
                        <a href="catalogue.php">
                            <div class="go-back-btn">
                                <img src="img/big-arrow-left.svg" alt="go-back-btn">
                                <h2>Go back</h2>
                            </div>
                        </a>
                        <img src="img/image3.jpg" alt="oregano">
                    </div>
                    <div class="hero-headlines">
                        <h1>Oregano</h1>
                        <p>Possibly one of the most recognized herbs in the cook's garden, oregano is easy to grow and adds plenty of taste to food. It fantastic when cut fresh from the plant and can easily be dried for long-term storage.</p>
                        <p id="price">Php 350.00</p>
                        <input type="number" value="1">
                        <a href="#" class="btn">Shop Now</a>
                    </div>
                </div>
            </section>
            <!--footer-->
            <footer>
                <div class="footer-container">
                    <div class="footer-logo">
                        <img src="img/Logo.svg" alt="logo-for-footer" class="logo-footer">
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