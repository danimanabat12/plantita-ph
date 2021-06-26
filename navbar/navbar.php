
    <nav>
        <div class="outer-shell">
            <div class="logo">
                <a href="../homepage/index.php"><img src="../navbar/nav-logo.svg" alt="logo"></a>
            </div>     
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="cart">
                <img src="../navbar/shopping-cart.png" alt="cart">
                <!-- NOTE: Dapat mag-update ni sa total count sa no of items sa user -->
                <p id="no-of-items">5</p> 
            </div>
        </div>   
        <div class="inner-shell">
            <div class="top-part">
                <div class="logo2">
                    <img src="../navbar/nav-logo.svg" alt="logo">
                    <p><a href="../homepage/index.php">Plantita.ph</a></p>
                </div>
            </div>
            <div class="middle-part">
                <ul class="nav-links">
                    <li>
                        <h1><a href="../homepage/index.php">home</a></h1>
                    </li>
                    <li class="catalogue-container">
                        <h1><a href="../catalogue/catalogue.php">catalogue</a></h1>
                        <div class="catalogue-inside-links">
                            <ul class="catalogue-links">
                                <li><a href="../catalogue/homeplant.php">homeplants</a></li>
                                <li><a href="../catalogue/outdoor.php">outdoor plants</a></li>
                                <li><a href="../catalogue/succulent.php">succulents</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <h1><a href="../about-us/aboutus.php">about</a></h1>
                    </li>
                    <li>
                        <h1><a href="../filler-page/404page.php">profile</a></h1>
                    </li>
                    <li class="sublinks">
                        <p><a href="../signup-login/login.php">sign in</a></p>
                        <p><a href="../contact-us/contact.php">contact us</a></p>
                        <p><a href="../filler-page/404p age.php">policies</a></p>
                        <p><a href="../filler-page/404page.php">help</a></p>
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
                <!-- NOTE: Diri mag-reflect sad/.  -->
                <p id="no-of-items">5</p>
            </div>
        </div>
        <div class="shopping-cart">
            <div class="top-part">
                <div class="logo2">
                    <img src="../navbar/nav-logo.svg" alt="logo">
                    <p><a href="../homepage/index.php">Plantita.ph</a></p>
                </div>
                <p class="closing-btn">close</p>
            </div>
            <!-- NOTE: Naay changes diri. I copy paste na lang tibuok sc-middle-part -->
            <div class="sc-middle-part">
                <h1 class="sc-title">My Shopping Cart</h1>
                <div class="shopping-cart-items">
                    <!-- Diri mag-reflect ang mga items sa shopping cart sa user -->
                    <ul class="shopping-list">
                        <!-- Template -->
                        <li class = "sc-item">
                            <div class="item-img">
                                <a href=""><img src="" alt="cart item"></a>
                            </div>
                            <div class="item-info">
                                <div class="ii-top-part">
                                    <h1 class="item-name">Plant name</h1>
                                    <p class="item-classification">Classification</p>
                                    <p class="item-price">Price</p>
                                </div>
                                <div class="ii-bottom-part">
                                    <button type="button" class="ii-item-decrease">-</button>
                                    <p class="ii-item-qty">1</p>
                                    <button type="button" class="ii-item-increase">+</button>
                                </div>
                            </div>
                            <form style="display: inline" action="#" method="get">
                                <button class="sc-remove-btn">x</button> 
                            </form>   
                        </li>
                        <li class = "sc-item">
                            <div class="item-img">
                                <a href=""><img src="" alt="cart item"></a>
                            </div>
                            <div class="item-info">
                                <div class="ii-top-part">
                                    <h1 class="item-name">Plant name</h1>
                                    <p class="item-classification">Classification</p>
                                    <p class="item-price">Price</p>
                                </div>
                                <div class="ii-bottom-part">
                                    <button type="button" class="ii-item-decrease">-</button>
                                    <p class="ii-item-qty">1</p>
                                    <button type="button" class="ii-item-increase">+</button>
                                </div>
                            </div>
                            <form style="display: inline" action="#" method="get">
                                <button class="sc-remove-btn">x</button> 
                            </form>  
                        </li>
                        <li class = "sc-item">
                            <div class="item-img">
                                <a href=""><img src="" alt="cart item"></a>
                            </div>
                            <div class="item-info">
                                <div class="ii-top-part">
                                    <h1 class="item-name">Plant name</h1>
                                    <p class="item-classification">Classification</p>
                                    <p class="item-price">Price</p>
                                </div>
                                <div class="ii-bottom-part">
                                    <button type="button" class="ii-item-decrease">-</button>
                                    <p class="ii-item-qty">1</p>
                                    <button type="button" class="ii-item-increase">+</button>
                                </div>
                            </div>
                            <form style="display: inline" action="#" method="get">
                                <button class="sc-remove-btn">x</button> 
                            </form>  
                        </li>
                        <li class = "sc-item">
                            <div class="item-img">
                                <a href=""><img src="" alt="cart item"></a>
                            </div>
                            <div class="item-info">
                                <div class="ii-top-part">
                                    <h1 class="item-name">Plant name</h1>
                                    <p class="item-classification">Classification</p>
                                    <p class="item-price">Price</p>
                                </div>
                                <div class="ii-bottom-part">
                                    <button type="button" class="ii-item-decrease">-</button>
                                    <p class="ii-item-qty">1</p>
                                    <button type="button" class="ii-item-increase">+</button>
                                </div>
                            </div>
                            <form style="display: inline" action="#" method="get">
                                <button class="sc-remove-btn">x</button> 
                            </form>  
                        </li>
                        <li class = "sc-item">
                            <div class="item-img">
                                <a href=""><img src="" alt="cart item"></a>
                            </div>
                            <div class="item-info">
                                <div class="ii-top-part">
                                    <h1 class="item-name">Plant name</h1>
                                    <p class="item-classification">Classification</p>
                                    <p class="item-price">Price</p>
                                </div>
                                <div class="ii-bottom-part">
                                    <button type="button" class="ii-item-decrease">-</button>
                                    <p class="ii-item-qty">1</p>
                                    <button type="button" class="ii-item-increase">+</button>
                                </div>
                            </div>
                            <form style="display: inline" action="#" method="get">
                                <button class="sc-remove-btn">x</button> 
                            </form>  
                        </li>
                    </ul>
                </div>
                <div class="call-to-action">
                    <a href="../checkout-new/checkout.php">Proceed to checkout</a>
                </div>
            </div>
            <div class="cart">

            </div>
        </div>    
    </nav>
 