<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <title>Monstera | Plantita.ph</title>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="pd-style.css">
</head>
<body>
    <div class="container-wrapper">
        <!---navbar-->
        <!-- <nav>
            <div class="outer-shell">
                <div class="logo">
                    <a href="#"><img src="../img/nav-logo.svg" alt="logo"></a>
                </div>     
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <div class="cart">
                    <img src="../img/shopping-cart.png" alt="cart">
                    <p id="no-of-items">0</p>
                </div>
            </div>   
            <div class="inner-shell">
                <div class="top-part">
                    <div class="logo2">
                        <img src="../img/nav-logo.svg" alt="logo">
                        <p><a href="#">Plantita.ph</a></p>
                    </div>
                </div>
                <div class="middle-part">
                    <ul class="nav-links">
                        <li>
                            <h1 class="current"><a href="#">home</a></h1>
                        </li>
                        <li class="catalogue-container">
                            <h1><a href="#">catalogue</a></h1>
                            <p><a href="#">homeplants</a></p>
                            <p><a href="#">outdoor plants</a></p>   
                            <p><a href="#">succulents</a></p>
                        </li>
                        <li>
                            <h1><a href="#">about</a></h1>
                        </li>
                        <li>
                            <h1><a href="#">guides</a></h1>
                        </li>
                        <li class="sublinks">
                            <p><a href="#">sign in</a></p>
                            <p><a href="#">contact us</a></p>
                            <p><a href="#">policies</a></p>
                            <p><a href="#">help</a></p>
                        </li>
                    </ul>
                    <div class="burger-inside">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </div>
                <div class="cart-inside">
                    <img src="../img/shopping-cart.png" alt="cart">
                    <p id="no-of-items">0</p>
                </div>
            </div>
            <div class="shopping-cart">
                <div class="top-part">
                    <div class="logo2">
                        <img src="../img/nav-logo.svg" alt="logo">
                        <p><a href="#">Plantita.ph</a></p>
                    </div>
                    <p class="closing-btn">close</p>
                </div>
                <div class="sc-middle-part">
                    <h1 class="sc-title">My Shopping Cart</h1>
                    <div class="shopping-cart-items">
                        <ul class="shopping-list">
                        </ul>
                    </div>
                </div>
                <div class="cart">
                </div>
            </div>    
        </nav> -->
        <?php
            include_once '../navbar/navbar.php';
        ?>
        <!---content-->
        <div class="sections">
            <section class="landing-page">
                <div class="main-landing">
                    <div class="product-img">
                        <img src="img/image1.png" alt="monstera">
                    </div>
                    <div class="hero-headlines">
                        <h1>Monstera</h1>
                        <p>Monstera deliciosa plant is also known as the "tropical split-leaf philodendron." This climbing evergreen is a popular easy-to-grow houseplant and a favorite of many interior designers for both residential and commercial spaces. </p>
                        <p id="price">Php 600.00</p>
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