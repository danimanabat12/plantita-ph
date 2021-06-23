<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Plantita ph</title>
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-wrapper">
        <!-- <nav>
            <div class="outer-shell">
                <div class="logo">
                    <a href="../homepage/index.html"><img src="images/nav-logo.svg" alt="logo"></a>
                </div>     
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <div class="cart">
                    <img src="images/shopping-cart.png" alt="cart">
                    <p id="no-of-items">0</p>
                </div>
            </div>   
            <div class="inner-shell">
                <div class="top-part">
                    <div class="logo2">
                        <img src="images/nav-logo.svg" alt="logo">
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
                            <h1><a href="../about-us/aboutus.html">about</a></h1>
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
                    <img src="images/shopping-cart.png" alt="cart">
                    <p id="no-of-items">0</p>
                </div>
            </div>
            <div class="shopping-cart">
                <div class="top-part">
                    <div class="logo2">
                        <img src="images/nav-logo.svg" alt="logo">
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
            <div class="hero">
                <div class="super-center">
                    <!-- Naa ni background picture -->
                    <h1>Checkout</h1>
                    <h3>confirm & pay</h3>
                </div>
            </div>
            <div class="top-order-summary">
                <div class="outer-shell-os">
                    <p>ORDER SUMMARY</p>
                    <div class="clickhere-btn">
                        click here
                    </div>
                </div>
                <div class="inner-shell-os">
                    <div class="close-me">
                        <p>CLOSE</p>
                    </div>
                    <div class="inner-shell-container">
                        <div class="top-part-os">
                            <div class="logo2">
                                <img src="images/nav-logo.svg" alt="logo">
                            </div>
                        </div>
                        <div class="middle-part-os">
                            <h1 class="os-title">Order summary</h1>
                            <div class="order-summary-items">
                                <ul class="order-list">
                                </ul>
                            </div>
                        </div>
                        <div class="last-part-os">
                            <div class="payment-summary-os">
                                <p class="subtotal">Subtotal: <span class="show-tot"></span></p>
                                <p class="shipping-fee">Shipping: <span class="show-tot"></span></p>
                                <p class="total">TOTAL: <span class="show-tot"></span></p>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="main">
                <div class="main-form">
                    <form action="">
                        <div class="forms top-forms">
                            <div class="form-title">
                                <h2>01</h2>
                                <h1>PERSONAL INFORMATION</h1>
                            </div> 
                            <div class="form-content form1">
                                <div class="basic-top-form">
                                    <div class="style2" style="margin-right: 2.625rem">
                                        <label for="firstname">First name</label>
                                        <input type="text" name="firstname" id="cstmr-fn" placeholder="ex. Juan" required>
                                    </div>
                                    <div class="style2">
                                        <label for="lastname">Last name</label>
                                        <input type="text" name="lastname" id="cstmr-ln" placeholder="ex. dela Cruz" required>    
                                    </div>
                                    <p class="error-message"></p>
                                </div>
                                <div class="basic-bottom-form">
                                    <div class="style2" style="margin-right: 2.625rem">
                                        <label for="emailadd">Email address</label>
                                        <input type="email" name="emailadd" id="cstmr-email" placeholder="ex. plantita_ph@gmail.com" required>
                                    </div>
                                    <div class="style2">
                                        <label for="phonenum">Phone number</label>
                                        <input type="tel" name="phonenum" id="cstmr-phonenum" pattern="[0-9]{11}" placeholder="ex. 09123456789" required>
                                    </div>
                                    <p class="error-message"></p>
                                </div> 
                            </div>
                        </div>
                        <div class="forms">
                            <div class="form-title">
                                <h2>02</h2>
                                <h1>SHIPPING DETAILS</h1>
                            </div>
                            <div class="form-content form2">
                                <p class="title-p">Shipping address</p>
                                <div class="complex-top-form">
                                    <label for="address">Full address</label>
                                    <textarea name="address" id="cstmr-address" cols="50" rows="3"></textarea>
                                    <div class="complex-bottom-form">
                                        <div class="inner-bottom">
                                            <div class="style1 first-style">
                                                <label for="zipcode">Zip code</label>
                                                <input type="text" name="zipcode" id="cstmr-zip">
                                            </div>
                                            <div class="style1"> 
                                                <label for="city/municipality">City/Municipality</label>
                                                <input type="text" name="city/municipality" id="cstmr-c/m">
                                            </div>  
                                        </div>
                                        <div class="bottom-bottom">
                                            <label for="province">Province</label>
                                            <input type="text" name="province" id="cstmr-prov">
                                        </div>
                                    </div>
                                </div>
                                <p class="title-p">Shipping method</p>
                                <div class="shipping-method">
                                    <div class="complex-bottom-form">
                                        <div class="shipping sh-1">
                                            <img src="images/j&t.png" alt="j&t express logo" class="jt">
                                            <div class="inner-details">
                                                <label for="j&texpr">J&T Express</label>
                                                <p>5-7 Days</p>
                                            </div>
                                            <!-- side note, bawal same same values sa id mygod your brain bestie? rotten -->
                                            <input type="radio" name="shipping-method" id="pref-j&t" required>
                                        </div>
                                        <div class="shipping sh-2">
                                            <img src="images/ninjavan.png" alt="ninjavan logo" class="nj">
                                            <div class="inner-details">
                                                <label for="ninjavan">Ninjavan</label>
                                                <p>5-7 Days</p>
                                            </div>
                                            <input type="radio" name="shipping-method" id="pref-ninjavan">
                                        </div>
                                        <div class="shipping sh-3">
                                            <img src="images/lbc.png" alt="lbc logo" class="lbc">
                                            <div class="inner-details">
                                                <label for="lbc">LBC</label>
                                                <p>3-6 Days</p>
                                            </div>
                                            <input type="radio" name="shipping-method" id="pref-lbc">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="forms">
                            <div class="form-title">
                                <h2>03</h2>
                                <h1>PAYMENT METHOD</h1>
                            </div> 
                            <div class="form-content form3">
                                <div class="basic-top-form">
                                    <div class="top-top">
                                        <label for="cardnumber">Card number</label>
                                        <input name = "cardnumber" id="cstmr-ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" required class="input-type-1">
                                    </div>
                                    <div class="inner-bottom">
                                        <div class="style1">
                                            <label for="expirydate">Expiry date</label>
                                            <input type="text" name="expirydate" id="cstmr-ed" placeholder="mm/yy" pattern="[0-9]{2}+/[0-9]{2}" class="input-type-2" minlength="5" maxlength="5" required >
                                        </div>
                                        <div class="style1">
                                            <label for="cvv">CVV/CVC</label>
                                            <input type="text" name="cvv/cvc" id="cstmr-cvv" placeholder="xxx" pattern="[0-9]{3}" class="input-type-2" minlength="3" maxlength="3" required>
                                        </div> 
                                    </div>
                                   
                                </div>
                                <div class="basic-bottom-form">
                                    <label for="cardname">Name on card</label>
                                    <input type="text" name="cardname" id="cstmr-noc" placeholder="Ex. Juan A dela Cruz" class="input-type-1">
                                </div>
                            </div>
                        </div>
                        <!-- <button type="submit" class= "btns btn-solid checkout-btn" onclick="confirmationSlide()">Submit</button> -->
                        <input type="submit" value="Submit" class= "btn-solid checkout-btn" onclick="return confirm('Are you sure?')"/>
                    </form>     
                </div>
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
    <!-- <div class="others first-popup">
        <div class="confirmation-wrapper">
            <div class="confirmation">
                <h1>Confirm order?</h1>
                <p>Would you like to confirm your order? After confirming, you can no longer make changes on your filled-up information such as your <span>shipping address</span> and <span>contact details</span>.</p>
            </div>
           <div class="buttons">
               <div class="btns place-btn">
                    <p>Place order</p>
               </div>
               <div class="btns go-back-btn">
                    <p>I would like to change something</p>
               </div>
           </div>
        </div>
        <div class="img-wrapper">
            <img src="images/order_confirmation_pic.png" alt="hands holding a plant">
        </div>
    </div>
    <div class="others second-popup">
        <div class="confirmation-wrapper">
            <div class="confirmation">
                <h1>Thank you for your purchase!</h1>
                <p>An email containing the details of this transaction will be sent in the email address you provided. Should you have any more concern, please email us <span>plantitaph@support.com</span></p>
            </div>
           <div class="btns">
               <a href="#"><p>Go back to home</p></a>
           </div>
        </div>
        <div class="img-wrapper2">
            <img src="images/thankyou-bg.png" alt="plant leaves">
        </div>
    </div> -->
    <script src="app.js"></script>
    <script>
        var x = window.matchMedia("(min-width: 1200px)")
        changeQuery(x); 
        x.addListener(changeQuery);
    </script>
</body>
</html>