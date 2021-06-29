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
    <?php
        session_start();
        include('../config/db.php');
        
        //if the user is not signed in
        if(!isset($_SESSION['username']) && empty($_SESSION['username']) ){
            header('location: ../signup-login/login.php');
        }
        
        $username = $_SESSION['username'];

        //get data from the table user_data
        $sql1 = "SELECT * FROM user_data WHERE username='{$username}'";
        $res1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($res1);

        //get data from the table users
        $sql2 = "SELECT * FROM users WHERE username='{$username}'";
        $res2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($res2);

        //fetch values from the table
        $firstName  = $row1['firstname']; 
        $lastName  = $row1['lastname'];
        $email  = $row1['email']; 
        $phone  = $row1['phone'];
        $userID = $row2['id'];
        $pwd = $row2['password'];

        if(isset($_POST['submit'])){
            //post variables for the new password
            $newPwd1 = $_POST['input1'];
            $newPwd2 = $_POST['input2'];
            
            //if the length of inputs are less than 8 chars
            if(strlen(trim($_POST['input1'])) < 8 || strlen(trim($_POST['input2']) < 8)){
                $message = 'Password must be at least 8 characters.';
            }
            else{ //inputs are atleast 8 chars
                if($newPwd1 == $newPwd2){ //if two inputs are equal or the same
                    //update the user's password
                    $sql3 = "UPDATE users SET password='$newPwd2' WHERE id=$userID";
                    $query = mysqli_query($conn, $sql3);
                    
                        //insert it to the database' table
                        $sql4 = "INSERT INTO password FROM users WHERE password = '$newPwd2' and id = '$userID'";
                        $result2 = mysqli_query($conn, $sql4);
                        
                        $_SESSION['password'] = $newPwd2;
                        //successfully updated
                        $message = 'Your password has been updated.';
                }
                else{
                    //mismatched passwords
                    $message = 'Inputs are not match!';
                }
            }
        }
    ?>
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
                        <label for="username"><b>Username</b></label>
                        <p><?php echo $username; ?></p>
                        <label for="fname"><b>First Name</b></label>
                        <p><?php echo $firstName; ?></p>
                        <label for="lname"><b>Last Name</b></label>
                        <p><?php echo $lastName; ?></p>
                        <label for="email"><b>Email Address</b></label>
                        <p><?php echo $email; ?></p>
                        <label for="phone"><b> Number</b></label>
                        <p><?php echo $phone; ?></p>

                    </div>
                    <div class="fourth-page-img">
                        <h2>Change Password</h2>
                        <br>
                        <br>
                        <br>
                        <?php 
                            if(isset($message)){
                                echo  '<label style= "color: #164a41; text-align: center; margin-bottom: 1rem; font-size: 1rem;"><b>'.$message. '</b></label><br><br>';
                            }
                        ?>
                        <form method="post" action="">
                            <label for="name">Current Password</label>
                            <br>
                            <label for="name"><b>
                            <?php 
                                //change is committed
                                if(isset($_POST['submit']) && isset($_SESSION['password'])){
                                    //if the inputs are less than 8 chars
                                    if(strlen(trim($_POST['input1'])) < 8 || strlen(trim($_POST['input2']) < 8)){
                                        //print the current password
                                        echo $pwd;
                                        $newPwd1 = $newPwd2 = '';
                                    }
                                    else { //inputs are atleast 8 chars
                                        //if both inputs are the same
                                        if ($newPwd1 == $newPwd2){
                                            //print the committed changes for the password
                                            echo $newPwd2;
                                        }
                                        else{ //inputs are not the same
                                            //print the current password
                                            echo $pwd;
                                            $newPwd1 = $newPwd2 = '';
                                        }
                                    }
                                }
                                else { //no changes committed
                                    //print the current password
                                    echo $pwd;
                                }
                            ?>
                            </b></label>
                            <br>
                            <label for="new-pass">New Password</label>
                            <input id="new-pass" type="password" name="input1" class="form-input">
                            <br>
                            <label for="confirm">Retype New Password</label>
                            <input id="confirm" type="password" name="input2" class="form-input">
                            <input type="submit" name= "submit" class="form-submit">
                        </form>
                    </div>
                </div>
            </section>
            <footer>
                <div class="footer-container">
                    <div class="footer-logo">
                        <img src="../homepage/images/Logo.svg" alt="logo-for-footer" class="logo-footer">
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
    <script src="main.js"></script>
</body>
</html>
