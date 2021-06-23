<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us | Plantita ph</title>
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-wrapper">
        <!-- <nav>
            <div class="outer-shell">
                <div class="logo">
                    <a href="../homepage/index.html"><img src="../navbar/nav-logo.svg" alt="logo"></a>
                </div>     
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <div class="cart">
                    <img src="../navbar/shopping-cart.png" alt="cart">
                    <p id="no-of-items">0</p>
                </div>
            </div>   
            <div class="inner-shell">
                <div class="top-part">
                    <div class="logo2">
                        <img src="../navbar/nav-logo.svg" alt="logo">
                        <p><a href="../homepage/index.html">Plantita.ph</a></p>
                    </div>
                </div>
                <div class="middle-part">
                    <ul class="nav-links">
                        <li>
                            <h1><a href="../homepage/index.html">home</a></h1>
                        </li>
                        <li class="catalogue-container">
                            <h1><a href="../catalogue/index.html">catalogue</a></h1>
                            <p><a href="../catalogue/index.html">homeplants</a></p>
                            <p><a href="../catalogue/index.html">outdoor plants</a></p>   
                            <p><a href="../catalogue/index.html">succulents</a></p>
                        </li>
                        <li>
                            <h1 class="current"><a href="#">about</a></h1>
                        </li>
                        <li>
                            <h1><a href="../filler_page/404page.html">guides</a></h1>
                        </li>
                        <li class="sublinks">
                            <p><a href="../signup-login/login.html">sign in</a></p>
                            <p><a href="../contact-us/contact.html">contact us</a></p>
                            <p><a href="../filler_page/404page.html">policies</a></p>
                            <p><a href="../filler_page/404page.html">help</a></p>
                        </li>
                    </ul>
                    <div class="burger-inside">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </div>
                <div class="cart-inside">
                    <img src="../navbar/shopping-cart.png" alt="cart">
                    <p id="no-of-items">0</p>
                </div>
            </div>
            <div class="shopping-cart">
                <div class="top-part">
                    <div class="logo2">
                        <img src="../navbar/nav-logo.svg" alt="logo">
                        <p><a href="../homepage/index.html">Plantita.ph</a></p>
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
        <div class="sections">
            <div class="main-contents">
                <div class="header">
                    <h1>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium”</h1>
                </div>
                <div class="content">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."</p>
                </div>
                <a href="../catalogue/catalogue.php" class="btn">View plants</a>
            </div>
            <footer>
                <div class="footer-container">
                    <div class="footer-logo">
                        <img src="images/Logo.svg" alt="logo-for-footer" class="logo-footer">
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