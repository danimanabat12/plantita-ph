<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <title>About Us | Plantita ph</title>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="aboutus.css">
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
        <div class="sections">
            <section class="landing-page">
                <div class="main-landing">
                    <div class="hero-headlines">
                        <div class="third-page-bg left-side">
                            <img src="../homepage/images/third-page-bg.png" alt="background leaves">
                        </div>
                        <div class="third-page-bg right-side">
                            <img src="../homepage/images/bg-plant-picture-right.png" alt="background leaves">
                        </div>
                        <h1>“Plant love, let it sprout.”</h1><h3>― H.S. Crow</h3>
                        <br>
                        <h2>Welcome to <span>plantita.ph</span></h2>
                        <p>We aim to offer our customers a variety of the latest homeplants, outdoor plants, and secculents. 
                        We’ve come a long way, so we know exactly which direction to take when supplying you with high quality yet budget-friendly products. 
                        We offer all of this while providing excellent customer service and friendly support.
                        We always keep an eye on the latest trends in plants and put our customers’ wishes first. 
                        That is why we have satisfied customers all over the world, and are thrilled to be a part of the plant industry.</p>
                        <p>In  today’s  market  trend,  going  green  is  the  “way”. People often engage themselves with plants as their new hobby, especially during this seem-to-never-end quarantine. 
                        When it comes to buying plants, it is indeed the  greatest  task  for  consumers  to  know  where  to  buy plants that they want. 
                        In some cases, people just want to buy plants that suit their lifestyle, but they mostly do not know what plants are going to meet their wants.</p>
                        <p>The interests of our customers are always top priority for us, so we hope you will enjoy our products as much as we enjoy making them available to you.</p>
                    </div>
                </div>
            </section>
            <section class="third-page">
                <div class="third-page-container">
                    <div class="third-page-heading">
                        <h1>Meet the Team</h1>
                    </div>
                    <div class="team-content">
                    <!--insert img src for your pictures-->
                        <div class="team-1 team">
                            <img src="images/junyel.jpg" alt="junniel" class="top-image">
                            <h2 class="team-name">Junniel Rome A. Ardepuela</h2>
                            <p class="position">President <br> Chief Executive Officer</p>
                        </div>
                        <div class="team-2 team">
                            <img src="images/dani.jpg" alt="dani" class="top-image">
                            <h2 class="team-name">Daniel Gabriel S. Manabat</h2>
                            <p class="position">Chief Operating Officer <br> Chief Financial Officer</p>
                        </div>
                        <div class="team-3 team">
                            <img src="images/port.jpg" alt="fourthram" class="top-image">
                            <h2 class="team-name">Fourthram R. Kaimo</h2>
                            <p class="position">Senior Vice President<br> Customer Experience</p>
                        </div>
                        <div class="team-4 team">
                            <img src="images/ron.jpg" alt="ron" class="top-image">
                            <h2 class="team-name">Ron Bryan M. Vertudes</h2>
                            <p class="position">Chief of Staff Office of the CEO<br>  </p>
                        </div>
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