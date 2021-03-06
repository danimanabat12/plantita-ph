<?php 
	//start the connection of the server
    include_once '../config/db.php';
    session_start(); //start the session of the server

	if(isset($_POST['submit'])){
	    $name = $_POST['name'];    //POST function to get what was the input for the username
		$email = $_POST['email'];            //POST function to get what was the input for the email address
		$msg= $_POST['message'];    //POST function to get what was the input for the password
        
        if($name != '' && $email != '' && $msg != ''){
            $sql_u = "SELECT * FROM users WHERE username='$name'";
            $res_u = mysqli_query($conn, $sql_u) or die(mysqli_error($conn));
            $query_1 = "INSERT INTO partners (name, email, message) VALUES ('$name', '$email', '$msg')";
            $result = mysqli_query($conn, $query_1) or die(mysqli_error($conn));

            $_SESSION['partner'] = $name;
            echo '<script>
				window.location.href="index.php";
				alert("Thank you for taking an interest in collaborating with us!");
				</script>';
			exit();     
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <title>Home | Plantita ph</title>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-wrapper">
        <?php
            include_once '../navbar/navbar.php';
        ?>
        <div class="sections">
            <section class="landing-page">
                <div class="top-notice">
                    <p>Free shipping for orders exceeding Php. 500.00</p>
                </div>
                <div class="main-landing">
                    <div class="hero-headlines">
                        <h1>100% Pure and Fresh.</h1>
                        <p>find your newest plant companion through the wide-array of selections here in <span>plantita.ph</span></p>
                        <a href="../catalogue/catalogue.php" class="btn">Shop Now</a>
                    </div>
                    <div class="hero-socmed-icons">
                        <ul>
                            <li><a href="https://www.facebook.com" class="fab fa-facebook fa-2x"></a></li>
                            <li><a href="https://www.instagram.com" class="fab fa-instagram fa-2x"></a></li>
                            <li><a href="https://www.twitter.com" class="fab fa-twitter fa-2x"></a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="second-page">
                <div class="second-page-headline">
                    <h1>Don't know where to start? <span>Here's <span class="underline">how</span>:</span></h1>
                    <p>Read our articles today to learn more about the basics and the general tips and tricks as a beginner plant enthusiast!</p>
                </div>
                <div class="second-page-contents">
                    <p class="title-second-page">ALL ARTICLES</p>
                    <div class="articles-slide">
                        <a href="../filler-page/404page.php">
                            <div class="article-1 articles">
                                <p class="title-top">1</p>
                                <img src="images/image-1.png" alt="article-1-image" class="top-image">
                                <h2 class="article-heading">Gardening 101: Basic tips and tricks</h2>
                                <p class="read-time">5 minutes read</p>
                                <p class="date-time">July 2020</p>
                            </div>
                        </a>
                        <a href="../filler-page/404page.php">
                            <div class="article-2 articles">
                                <p class="title-top">2</p>
                                <img src="images/image-2.png" alt="article-2-image" class="top-image">
                                <h2 class="article-heading">Best plants to take care of as a beginner enthusiast</h2>
                                <p class="read-time">3 minutes read</p>
                                <p class="date-time">April 2021</p>
                            </div>
                        </a>
                        <a href="../filler-page/404page.php">
                            <div class="article-3 articles">
                                <p class="title-top">3</p>
                                <img src="images/image-3.png" alt="article-3-image" class="top-image">
                                <h2 class="article-heading">How to pick the best plant for you?</h2>
                                <p class="read-time">3 minutes read</p>
                                <p class="date-time">March 2021</p>
                            </div>
                        </a>
                       <a href="../filler-page/404page.php">
                            <div class="article-4 articles">
                                <p class="title-top">4</p>
                                <img src="images/image-4.png" alt="article-4-image" class="top-image">
                                <h2 class="article-heading">Taking care of a cacti: A guide</h2>
                                <p class="read-time">1 minute read</p>
                                <p class="date-time">December 2020</p>
                            </div>
                       </a>
                       <a href="../filler-page/404page.php">
                            <div class="article-5 articles">
                                <p class="title-top">5</p>
                                <img src="images/image-2.png" alt="article-2-image" class="top-image">
                                <h2 class="article-heading">Lorem ipsum dolor sit.</h2>
                                <p class="read-time">8 minutes</p>
                                <p class="date-time">May 2021</p>
                            </div>
                       </a>
                    </div>
                </div>
            </section>
            <section class="third-page">
                <div class="third-page-bg left-side">
                    <img src="images/third-page-bg.png" alt="background leaves">
                </div>
                <div class="third-page-bg right-side">
                    <img src="images/bg-plant-picture-right.png" alt="background leaves">
                </div>
                <div class="third-page-container">
                    <div class="third-page-heading">
                        <h1>Our bestsellers</h1>
                        <p>month of may</p>
                    </div>
                    <div class="bestseller-content">
                        <div class="bestseller-1 bestseller">
                            <p class="title-top">1</p>
                            <img src="images/best-seller-image-1.png" alt="best-seller-1" class="top-image">
                            <h2 class="bestseller-title">Snake Plants</h2>
                            <p class="price">Php 400.00</p>
                            <a href="../catalogue/catalogue.php" class="view-plant-action">View plant</a>
                        </div>
                        <div class="bestseller-2 bestseller">
                            <p class="title-top">2</p>
                            <img src="images/best-seller-image2.png" alt="best-seller-2" class="top-image">
                            <h2 class="bestseller-title">Monstera</h2>
                            <p class="price">Php 600.00</p>
                            <a href="../catalogue/catalogue.php" class="view-plant-action">View plant</a>
                        </div>
                        <div class="bestseller-3 bestseller">
                            <p class="title-top">3</p>
                            <img src="images/best-seller-image-1.png" alt="best-seller-3" class="top-image">
                            <h2 class="bestseller-title">Lorem ipsum</h2>
                            <p class="price">Php 350.00</p>
                            <a href="../catalogue/catalogue.php" class="view-plant-action">View plant</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fourth-page">
                <div class="fourth-page-container">
                    <div class="fourth-page-headline">
                        <h1>Become our partner!</h1>
                        <p>We love supporting our local gardeners. Send us a quick message and we will talk about it!</p>
                        <form method="post" action="">
                            <label for="name">Name/Organization</label>
                            <input id="name" type="text" name="name" class="form-input" required>
                            <br>
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" class="form-input" required>
                            <br>
                            <label for="message">Message</label>
                            <textarea name="message" cols="50" rows="3" class="form-input" required></textarea>
                            <br>
                            <input style="margin-top: 2rem;" type="submit" name ="submit" class="form-submit">
                        </form>
                        
                    </div>
                    <div class="fourth-page-img">
                        <img src="images/page-4-image.png" alt="woman taking care of plants">
                    </div>
                </div>
            </section>
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