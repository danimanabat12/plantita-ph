<!DOCTYPE html>
<html lang="en">
<head>

<?php 
    session_start();
    include('../config/db.php'); 

    //get from current link single.php?id=#
    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
        $sql = "SELECT * FROM products  WHERE product_id='$product_id'";
        $result = mysqli_query($conn, $sql);
     
        $row = mysqli_fetch_assoc($result);
        
        //for product details
        $product_name  = $row['product_name'];
    }
?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <title><?php echo $product_name ?> | Plantita.ph</title>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="pd-style.css">
</head>
<body>
    <div class="container-wrapper">
        <?php
            include_once '../navbar/navbar.php';
                //get from current link single.php?id=#
            if(isset($_GET['id'])){
                $product_id = $_GET['id'];
                $sql = "SELECT * FROM products  WHERE product_id='$product_id'";
                $result = mysqli_query($conn, $sql);
            
                $row = mysqli_fetch_assoc($result);
                
                //for product details
                $product_name  = $row['product_name'];
                $cat_id  = $row['cat_id'];
                $price  = $row['price'];
                $product_description  = $row['product_description'];
                $thumb  = $row['thumb'];

                //for category name
                $sql2 = "SELECT * FROM category WHERE cat_id = '$cat_id'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $cat_name = $row2["cat_name"];
            }
        ?>
       <!---content-->
       <div class="sections">
            <section class="landing-page">
                <div class="main-landing">
                    <div class="product-img">
                        <img src="../admin/<?php echo $thumb ?>" alt="<?php echo $product_name ?>">
                    </div>
                    <div class="hero-headlines">
                        <h1><?php echo $product_name ?></h1>
                        <a style="text-decoration:none;" href="catalogue.php?id=<?php echo $cat_id ?>" class="category-plant-action"><p style="color:#164a41;"><b><?php echo $cat_name ?></b></p></a>
  
                        <p><?php echo $product_description ?></p>
                        <p id="price">Php <?php echo $price ?>.00</p>
                        <form action="../navbar/addTocart.php">
                        <input type="hidden" name="id" value="<?php echo  $product_id ?>">
                        <input type="number" name="quantity" value="1">
                        <button style="all: unset; cursor: pointer;" type="submit" ><a class="btn">Add to Cart</a></button>
                        </form>
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