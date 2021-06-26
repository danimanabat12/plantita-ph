<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Plantita ph</title>
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../navbar/style.css">
</head>
<body>
    <div class="container-wrapper">
        <?php
        include_once '../navbar/navbar.php';
        ?>
        <div class="sections">
            <div class="hero">
                <div class="super-center">
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
                                    <li class="sc-item">
                                        <div class="item-img">
                                            <div class="remove-btn" data-itemID="item1">
                                                <button>x</button>
                                            </div>
                                            <img src="" alt="item image">
                                        </div>
                                        <div class="os-item-info">
                                            <div class="item-upper">
                                                <div class="info-top-part">
                                                    <h1 class="item-name">Astrophytum</h1>
                                                    <p class="item-price">Original Price</p>
                                                </div>
                                                <div class="info-bottom-part">
                                                    <button type="button" class="item-decrease">-</button>
                                                    <p class="item-qty">1</p>
                                                    <button type="button" class="item-increase">+</button>
                                                </div>
                                            </div>
                                           <div class="item-lower">
                                                <div class="info-total-price">
                                                    <p>Php.69.00</p> 
                                                </div>
                                           </div>
                                        </div>
                                    </li>
                                    <li class="sc-item">
                                        <div class="item-img">
                                            <div class="remove-btn" data-itemID="item2">
                                                <button>x</button>
                                            </div>
                                            <img src="" alt="item image">
                                        </div>
                                        <div class="os-item-info">
                                            <div class="item-upper">
                                                <div class="info-top-part">
                                                    <h1 class="item-name">Astrophytum</h1>
                                                    <p class="item-price">Original Price</p>
                                                </div>
                                                <div class="info-bottom-part">
                                                    <button type="button" class="item-decrease">-</button>
                                                    <p class="item-qty">1</p>
                                                    <button type="button" class="item-increase">+</button>
                                                </div>
                                            </div>
                                           <div class="item-lower">
                                                <div class="info-total-price">
                                                    <p>Php.69.00</p> 
                                                </div>
                                           </div>
                                        </div>
                                    </li>
                                    <li class="sc-item">
                                        <div class="item-img">
                                            <div class="remove-btn" data-itemID="item2">
                                                <button>x</button>
                                            </div>
                                            <img src="" alt="item image">
                                        </div>
                                        <div class="os-item-info">
                                            <div class="item-upper">
                                                <div class="info-top-part">
                                                    <h1 class="item-name">Astrophytum</h1>
                                                    <p class="item-price">Original Price</p>
                                                </div>
                                                <div class="info-bottom-part">
                                                    <button type="button" class="item-decrease">-</button>
                                                    <p class="item-qty">1</p>
                                                    <button type="button" class="item-increase">+</button>
                                                </div>
                                            </div>
                                           <div class="item-lower">
                                                <div class="info-total-price">
                                                    <p>Php.69.00</p> 
                                                </div>
                                           </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="last-part-os">
                            <div class="payment-summary-os">
                                <span class="ps-left">Subtotal:</span>
                                <span class="ps-right ps-subtotal">Php. 207.00</span>
                            </div>
                            <div class="payment-summary-os">
                                <span class="ps-left">Shipping: </span>
                                <span class="ps-right ps-shipping">Php. 150.00</span>
                            </div>
                            <div class="payment-summary-os last-pso">
                                <span class="ps-left">TOTAL:</span>
                                <span class="ps-right ps-cummulative">Php. 357.00</span>
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
    <script src="../navbar/app.js"></script>
    <script src="app.js"></script>
    <script>
        var x = window.matchMedia("(min-width: 1200px)")
        changeQuery(x); 
        x.addListener(changeQuery);
    </script>
</body>
</html>