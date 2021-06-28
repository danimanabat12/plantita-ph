<?php

    // for shopping cart
    $count = '';

    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
        $count = count($cart);
    }
?>

    <nav>
        <!-- Changes na gibuhat -->
        <?php
            if(isset($_SESSION['username'])){    //checks if the user is signed in
                echo '<style type="text/css">    
                    .user-shell {
                        visibility: unset;
                    }
                </style>';                       //removes the visibility:hidden sa style sa user-shell sa css
            }
        ?>
        <div class="user-shell">
            <div class="user-details">
                <p>Hello,</p>
                <!-- I-call niya ang user-name from DB-->
                <h3><?php echo $_SESSION['username']?></h3> 
            </div>
            <div class="user-profile-shortcut">
                <a href="../profile/profile.php"><img src="../navbar/profile-logo.svg" alt="profile- icon"></a>
            </div>
        </div>
        
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
                <p id="no-of-items"><?php if($count > 0) echo $count; else echo '0'; ?></p> 
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
                    <!-- populate categories -->
                    <?php
                        $sql2 = "SELECT * FROM category";
                        $result2 = mysqli_query($conn, $sql2);
                    
                        // output data of each row
                        $count_cat = 1;
                        while($row2 = mysqli_fetch_assoc($result2)) {
                            if($count_cat < 6){
                    ?> 
                                <li><a href="../catalogue/catalogue.php?id=<?php echo $row2["cat_id"] ?>"><?php echo  $row2["cat_name"] ?></a></li>
                    <?php
                            }
                            else{
                    ?>
                                <li><a href="../catalogue/catalogue.php"><b>more categories</b></a></li>
                    <?php
                                break;
                            }
                        }
                    ?>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <h1><a href="../about-us/aboutus.php">about</a></h1>
                    </li>
                    <li>
                <!-- If signed in, show profile link. Else, login. -->
                <?php
                    if(isset($_SESSION['username'])){
                        echo '<h1><a href="../profile/profile.php" name="profile">profile</a></h1>';
                    }
                    else{
                        echo '<h1><a href="../signup-login/login.php">profile</a></h1>';
                    }
                ?>
                    </li>
                    <li class="sublinks">
                <!-- If signed in, show logout. Else, sign up. -->
                <?php
                    if(isset($_SESSION['username'])){
                        echo '<p><a href="../profile/my-orders.php">my orders</a></p>';
                        echo '<p><a href="../signup-login/logout.php">log out</a></p>';
                    }
                    else{
                        echo '<p><a href=" ../signup-login/signup.php">sign up</a></p>';
                    }
                ?>
                        <p><a href="../contact-us/contact.php">contact us</a></p>
                        <p><a href="../filler-page/policies.php">policies</a></p>
                        <p><a href="../filler-page/help.php">help</a></p>
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
                <p id="no-of-items"><?php if($count > 0) echo $count; else echo '0'; ?></p>
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
            <!-- If naay sulod si cart, then populate -->
            <?php
                if(isset($_SESSION['cart'])){
                    $total = 0;
                    foreach($cart as $key => $value){
                        $sql = "SELECT * FROM products where product_id = $key";
                        $result = mysqli_query($conn, $sql);

                        $row = mysqli_fetch_assoc($result);
            ?>
                        <li class = "sc-item">
                            <div class="item-img">
                                <a href="single.php?id=<?php echo  $row["product_id"] ?>"><img style="
                                                                                                width:100%;
                                                                                                height:100%;
                                                                                                object-fit:cover;" src="../admin/<?php echo  $row["thumb"] ?>" alt="<?php echo $row['product_name']?>"></a>
                            </div>
                            <div class="item-info">
                                <div class="ii-top-part">
                                    <a href="../catalogue/single.php?id=<?php echo $row['product_id']?>"><h1 class="item-name"><?php echo $row['product_name']?></h1></a>
            <!-- For category name -->
            <?php
                                $cat_id = $row['cat_id'];
                                $sql2 = "SELECT * FROM category WHERE cat_id=$cat_id";
                                $result2 = mysqli_query($conn, $sql2);
                                $row2 = mysqli_fetch_assoc($result2)
            ?>
                                    <a href="../catalogue/catalogue.php?id=<?php echo $row2['cat_id']?>"><?php echo $row2['cat_name']?></a>
                                    <p class="item-price">Php <?php echo $row['price']?>.00</p>
                                </div>
                                <div class="ii-bottom-part">
                                    <p class="ii-item-qty">x<?php echo $value['quantity']?></p>
                                </div>
                            </div>
                            <form style="display: inline" action="#" method="get">
                                <button class="sc-remove-btn"><a href='../navbar/deletecart.php?id=<?php echo $key; ?>'>x</a></button> 
                            </form>   
                        </li>
            <?php
                    // kung kailangan lang ang total
                        $total = $total +  ($row['price'] * $value['quantity']);
                    }
                }
            ?>
                    </ul>
                </div>
                <div class="call-to-action">
                    <?php if($count > 0) echo '<a href="../checkout-new/checkout.php">Proceed to checkout</a>'; else echo '<a href="#">Cart is Empty!</a>'; ?>
                </div>
            </div>
            <div class="cart">

            </div>
        </div>    
    </nav>
 