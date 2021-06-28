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
    <?php 
        session_start();
        include('../config/db.php'); 

        if(!isset($_SESSION['cart']) && empty($_SESSION['cart']) ){
            header('location: ../homepage/index.php');
        }

        // for shopping cart
        $count = '';

        if(isset($_SESSION['cart'])){
            $cart = $_SESSION['cart'];
            $count = count($cart);
        }

        if($count == 0){
            header('location: ../homepage/index.php');
        }


        //this function will validate the input
	    function validate($input){
            $input = trim($input); 
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            $input = strval($input);
                    
            return $input;            
        }
        
        if (isset($_POST['submit']) & !empty($_POST['submit'])) {
            $fname = validate($_POST['firstname']);
            $lname = validate($_POST["lastname"]);
            $Email = validate($_POST["emailadd"]);
            $Phone = validate($_POST["phonenum"]);

            $address = validate($_POST["address"]);
            $Postcode = validate($_POST["zipcode"]);
            $city = validate($_POST["city/municipality"]);
            $province = validate($_POST["province"]);

            $payment = $_POST["shipping-method"];

            
            $card_num = validate($_POST["cardnumber"]);
            $card_name = validate($_POST["cardname"]);
            $card_exp = validate($_POST["expirydate"]);
            $cvv = validate($_POST["cvv/cvc"]);
    
            if(isset($_SESSION['user_id'])){
                $cid = $_SESSION['user_id'];
                //   update query
                $up_sql = "UPDATE user_data SET firstname='$fname', lastname='$lname', email='$Email', phone='$Phone',
                                                full_address='$address', zip='$Postcode', city='$city', province='$province',
                                                ship='$payment',
                                                card_num='$card_num', card_name='$card_name', card_exp='$card_exp', cvv='$cvv'
                                            WHERE id=$cid";
    
                $Updated = mysqli_query($conn, $up_sql);
                if ($Updated) {
                    if (isset($_SESSION['cart'])) {
                        $total = 0;
                        foreach ($cart as $key => $value) {
                            // echo $key ." : ". $value['quantity'] . "<br>";
    
                            $sql_cart = "SELECT * FROM products where product_id = $key";
                            $result_cart = mysqli_query($conn, $sql_cart);
                            $row_cart = mysqli_fetch_assoc($result_cart);
                            $total = $total +  ($row_cart['price'] * $value['quantity']);
                        }
                    }
    
    
                    // echo 'order table and order items - updated';
    
                    $insertOrder = "INSERT INTO orders (user_id, totalprice, orderstatus, paymentmode )
                                    VALUES ('$cid', '$total', 'Order Placed', '$payment')";
    
                    if (mysqli_query($conn, $insertOrder)) {
                        $orderid = mysqli_insert_id($conn);
                        foreach ($cart as $key => $value) {
                            $sql_cart = "SELECT * FROM products where product_id = $key";
                            $result_cart = mysqli_query($conn, $sql_cart);
                            $row_cart = mysqli_fetch_assoc($result_cart);

                            $key = $row_cart["product_id"];
                            $price_product = $row_cart["price"];
                            $q  = $value["quantity"];

                            $insertordersItems = "INSERT INTO orderitems (order_id, product_id, quantity, product_price) 
                                                        VALUES ('$orderid', '$key', '$q', '$price_product')";
                            $orditmres = mysqli_query($conn, $insertordersItems) or die(mysqli_error($conn));
                        }
                    }
                    unset($_SESSION['cart']);
                    header("location: success-redirect.php");
                }
            } 
            else {
                // insert 
                
                //count how many guests are in users table
                $sql = "SELECT COUNT(*) AS totalguest FROM users where username LIKE '%guest%'";
                $result = mysqli_query($conn, $sql);
                $guest_num = mysqli_fetch_assoc($result);
                $username = 'guest'.$guest_num['totalguest'];
                
                //insert the guest into users table
                $ins_sql = "INSERT INTO users (username)
                VALUES ('$username')";
                $inserted = mysqli_query($conn, $ins_sql);
                
                //know the updated id for guest
                if ($inserted) {
                    $sql1 = "SELECT * FROM users WHERE username='{$username}'";
                    $result1 = mysqli_query($conn, $sql1);
                    $row1 = mysqli_fetch_assoc($result1);
                    $cid = $row1['id'];
                }
                
                //insert the guest into user_data table
                $ins_sql = "INSERT INTO user_data (username, firstname, lastname, email, phone,
                full_address, zip, city, province, ship, card_num, card_name, card_exp, cvv)
                            VALUES ('$username', '$fname', '$lname', '$Email', '$Phone',
                            '$address', '$Postcode', '$city', '$province', '$province',
                            '$payment', '$card_num', '$card_exp', '$cvv')";
                
                $inserted = mysqli_query($conn, $ins_sql);
                if ($inserted) {
                    // echo 'order table and order items - inserted';
    
                    if (isset($_SESSION['cart'])) {
                        $total = 0;
                        foreach ($cart as $key => $value) {
                            // echo $key ." : ". $value['quantity'] . "<br>";
    
                            $sql_cart = "SELECT * FROM products where product_id = $key";
                            $result_cart = mysqli_query($conn, $sql_cart);
                            $row_cart = mysqli_fetch_assoc($result_cart);
                            $total = $total +  ($row_cart['price'] * $value['quantity']);
                        }
                    }
    
    
                    // echo 'order table and order items - updated';
    
                    $insertOrder = "INSERT INTO orders (user_id, totalprice, orderstatus, paymentmode )
                                    VALUES ('$cid', '$total', 'Order Placed', '$payment')";
    
                    if (mysqli_query($conn, $insertOrder)) {
                        $orderid = mysqli_insert_id($conn);
                        foreach ($cart as $key => $value) {
                            $sql_cart = "SELECT * FROM products where product_id = $key";
                            $result_cart = mysqli_query($conn, $sql_cart);
                            $row_cart = mysqli_fetch_assoc($result_cart);

                            $key = $row_cart["product_id"];
                            $price_product = $row_cart["price"];
                            $q  = $value["quantity"];

                            $insertordersItems = "INSERT INTO orderitems (order_id, product_id, quantity, product_price) 
                                                        VALUES ('$orderid', '$key', '$q', '$price_product')";
                            $orditmres = mysqli_query($conn, $insertordersItems) or die(mysqli_error($conn));
                        }
                    }
                    unset($_SESSION['cart']);
                    header("location: success-redirect.php");
                }
            }
        }
        
        if(isset($_SESSION['user_id'])){
            $cid = $_SESSION['user_id'];
            $sql = "SELECT * FROM user_data WHERE id='{$cid}'";
            $res = mysqli_query($conn, $sql);
            $r = mysqli_fetch_assoc($res);
        }
    ?>
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
                        <!-- If naay sulod si cart, then populate -->
                        <?php
                            if(isset($_SESSION['cart'])){
                                $total = 0;
                                foreach($cart as $key => $value){
                                    $sql = "SELECT * FROM products where product_id = $key";
                                    $result = mysqli_query($conn, $sql);

                                    $row = mysqli_fetch_assoc($result);
                        ?>
                                    <li class="sc-item">
                                        <div class="item-img">
                                            <div class="remove-btn" data-itemID="item1">
                                                <button><a href='../navbar/deletecart.php?id=<?php echo $key; ?>'>x</a></button>
                                            </div>
                                            <img style="width:100%;
                                                        height:100%;
                                                        object-fit:cover;" src="../admin/<?php echo  $row["thumb"] ?>" alt="<?php echo $row['product_name']?>"></a>
                                        </div>
                                        <div class="os-item-info">
                                            <div class="item-upper">
                                                <div class="info-top-part">
                                                    <h1 class="item-name"><?php echo $row['product_name']?></h1>
                                                    <p class="item-price">Php <?php echo $row['price']?>.00</p>
                                                </div>
                                                <div class="info-bottom-part">
                                                    <p class="item-qty">x<?php echo $value['quantity']?></p>
                                                </div>
                                            </div>
                                           <div class="item-lower">
                                                <div class="info-total-price">
                                                    <p>Php <?php echo $value['quantity'] * $row['price']?>.00</p> 
                                                </div>
                                           </div>
                                        </div>
                                    </li>
                        <?php
                                // kung kailangan lang ang total
                                    $total = $total +  ($row['price'] * $value['quantity']);
                                }
                            }
                        ?>
                                </ul>
                            </div>
                        </div>
                        <div class="last-part-os">
                            <div class="payment-summary-os">
                                <span class="ps-left">Subtotal:</span>
                                <span class="ps-right ps-subtotal">Php <?php echo $total?>.00</span>
                            </div>
                            <div class="payment-summary-os">
                                <span class="ps-left">Shipping: </span>
                                <span class="ps-right ps-shipping"><?php if($total > 500) echo 'FREE'; else {$total=$total+150; echo 'Php 150.00';}?></span>
                            </div>
                            <div class="payment-summary-os last-pso">
                                <span class="ps-left">TOTAL:</span>
                                <span class="ps-right ps-cummulative">Php <?php echo $total?>.00</span>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="main">
                <div class="main-form">
                    <form method="post">
                        <div class="forms top-forms">
                            <div class="form-title">
                                <h2>01</h2>
                                <h1>PERSONAL INFORMATION</h1>
                            </div> 
                            <div class="form-content form1">
                                <div class="basic-top-form">
                                    <div class="style2" style="margin-right: 2.625rem">
                                        <label for="firstname">First name</label>
                                        <input type="text" name="firstname" value="<?php if(!empty($r['firstname'])) echo $r['firstname']?>" id="cstmr-fn" placeholder="ex. Juan" required>
                                    </div>
                                    <div class="style2">
                                        <label for="lastname">Last name</label>
                                        <input type="text" name="lastname" value="<?php if(!empty($r['lastname'])) echo $r['lastname']?>" id="cstmr-ln" placeholder="ex. dela Cruz" required>    
                                    </div>
                                    <p class="error-message"></p>
                                </div>
                                <div class="basic-bottom-form">
                                    <div class="style2" style="margin-right: 2.625rem">
                                        <label for="emailadd">Email address</label>
                                        <input type="email" name="emailadd" value="<?php if(!empty($r['email'])) echo $r['email']?>" id="cstmr-email" placeholder="ex. plantita_ph@gmail.com" required>
                                    </div>
                                    <div class="style2">
                                        <label for="phonenum">Phone number</label>
                                        <input type="tel" name="phonenum" value="<?php if(!empty($r['phone'])) echo $r['phone']?>" id="cstmr-phonenum" pattern="[0-9]{11}" placeholder="ex. 09123456789" required>
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
                                    <textarea name="address" id="cstmr-address" cols="50" rows="3"><?php if(!empty($r['full_address'])) echo $r['full_address']?></textarea>
                                    <div class="complex-bottom-form">
                                        <div class="inner-bottom">
                                            <div class="style1 first-style">
                                                <label for="zipcode">Zip code</label>
                                                <input type="text" name="zipcode" value="<?php if(!empty($r['zip'])) echo $r['zip']?>" id="cstmr-zip">
                                            </div>
                                            <div class="style1"> 
                                                <label for="city/municipality">City/Municipality</label>
                                                <input type="text" name="city/municipality" value="<?php if(!empty($r['city'])) echo $r['city']?>" id="cstmr-c/m">
                                            </div>  
                                        </div>
                                        <div class="bottom-bottom">
                                            <label for="province">Province</label>
                                            <input type="text" name="province" value="<?php if(!empty($r['province'])) echo $r['province']?>" id="cstmr-prov">
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
                                            <input type="radio" name="shipping-method" id="pref-j&t" value="J&T" checked required>
                                        </div>
                                        <div class="shipping sh-2">
                                            <img src="images/ninjavan.png" alt="ninjavan logo" class="nj">
                                            <div class="inner-details">
                                                <label for="ninjavan">Ninjavan</label>
                                                <p>5-7 Days</p>
                                            </div>
                                            <input type="radio" name="shipping-method" id="pref-ninjavan" value="ninjavan">
                                        </div>
                                        <div class="shipping sh-3">
                                            <img src="images/lbc.png" alt="lbc logo" class="lbc">
                                            <div class="inner-details">
                                                <label for="lbc">LBC</label>
                                                <p>3-6 Days</p>
                                            </div>
                                            <input type="radio" name="shipping-method" id="pref-lbc" value="LBC">
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
                                        <input name = "cardnumber" value="<?php if(!empty($r['card_num'])) echo $r['card_num']?>" id="cstmr-ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" required class="input-type-1">
                                    </div>
                                    <div class="inner-bottom">
                                        <div class="style1">
                                            <label for="expirydate">Expiry date</label>
                                            <input type="text" name="expirydate" value="<?php if(!empty($r['card_exp'])) echo $r['card_exp']?>" id="cstmr-ed" placeholder="mm/yy" pattern="[0-9]{2}+/[0-9]{2}" class="input-type-2" minlength="5" maxlength="5" required >
                                        </div>
                                        <div class="style1">
                                            <label for="cvv">CVV/CVC</label>
                                            <input type="text" name="cvv/cvc" value="<?php if(!empty($r['cvv'])) echo $r['cvv']?>" id="cstmr-cvv" placeholder="xxx" pattern="[0-9]{3}" class="input-type-2" minlength="3" maxlength="3" required>
                                        </div> 
                                    </div>
                                   
                                </div>
                                <div class="basic-bottom-form">
                                    <label for="cardname">Name on card</label>
                                    <input type="text" name="cardname" value="<?php if(!empty($r['card_name'])) echo $r['card_name']?>" id="cstmr-noc" placeholder="Ex. Juan A dela Cruz" class="input-type-1">
                                </div>
                            </div>
                        </div>
                        <!-- <button type="submit" class= "btns btn-solid checkout-btn" onclick="confirmationSlide()">Submit</button> -->
                        <input type="submit" value="Submit" name="submit" class= "btn-solid checkout-btn" onclick="return confirm('Are you sure?')"/>
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