<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <title>Catalogue | Plantita ph</title>
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
        <!----contents-->
        <div class="sections">
            <section class="third-page">
                <div class="third-page-container">
                    <div class="third-page-heading">
                        <a href="catalogue.php"><h1>Fresh Plants</h1></a>
                    </div>
                    <div class="third-page-sort">
                        <ul>

                            <?php
                                $sql2 = "SELECT * FROM category";
                                $result2 = mysqli_query($conn, $sql2);
                            
                                
                                // output data of each row
                                while($row2 = mysqli_fetch_assoc($result2)) {
                            
                            ?> 
                                    <li><a href="catalogue.php?id=<?php echo $row2["cat_id"] ?>"><?php echo  $row2["cat_name"] ?></a></li>
                            <?php
                                }
                            ?>

                        </ul>
                    </div>
                        <div class="bestseller-content">
                    <?php 
                        $sql = "SELECT * FROM products";
                        if(isset($_GET['id'])){
                            $catID = $_GET['id'];
                            $sql .= " WHERE cat_id = '$catID'";
                        }
                        $result = mysqli_query($conn, $sql);
                        
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result)) {
                            if($count > 3){
                    ?> 
                        <div class="bestseller-content">
                    <?php
                                $count = 1;
                            }  
                    ?>
                            <div class="bestseller-<?php echo  $count ?> bestseller">
                                <img src="../admin/<?php echo  $row["thumb"] ?>" alt="<?php echo  $row["product_name"] ?>" class="top-image">
                                    <h2 class="bestseller-title"><?php echo  $row["product_name"] ?></h2>
                                    <p class="price">Php <?php echo  $row["price"] ?>.00</p>
                                    <a href="single.php?id=<?php echo  $row["product_id"] ?>" class="view-plant-action">View plant</a>
                            </div>
                    <?php
                            $count = $count + 1;
                            if($count > 3){
                    ?>
                                </div>
                    <?php
                            }
                        }  
                    ?>
                </div>
            </section>
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