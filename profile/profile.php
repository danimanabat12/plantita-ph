<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <title>Profile | Plantita ph</title>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="container-wrapper">
        <?php
            include_once '../navbar/navbar.php';
        ?>
        <div class="sections">
            <section class="fourth-page">
                <div class="fourth-page-container">
                    <div class="fourth-page-headline">
                        <h1>Profile</h1>
                        <label for="username">Username</label>
                        <p>LOWOEOWOEOW</p>
                        <label for="fname">First Name</label>
                        <p>im kekew</p>
                        <label for="lname">Last Name</label>
                        <p>im kekew</p>
                        <label for="email">Email Address</label>
                        <p>im kekekw@geemail.coum</p>
                        <label for="phone">Phone Number</label>
                        <p>01283401324</p>

                    </div>
                    <div class="fourth-page-img">
                        <h2>Change Password</h2>
                        <br>
                        <br>
                        <br>
                        <form>
                            <label for="name">Current Password</label>
                            <input id="curr-pass" type="password" name="input-name" class="form-input">
                            <br>
                            <label for="new-pass">New Password</label>
                            <input id="new-pass" type="password" name="input-name" class="form-input">
                            <br>
                            <label for="confirm">Retype New Password</label>
                            <input id="confirm" type="password" name="input-name" class="form-input">
                        </form>
                        <input type="submit" class="form-submit">
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
   
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../navbar/app.js"></script>
</body>
</html>