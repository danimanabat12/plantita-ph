<?php //di ko sure asay tama aning duha
        // //connection of the server
        // $con = mysqli_connect('localhost', 'root', '', 'plantita_ph');
        
        // //the connection is unsuccessful
        // if(!$con){
        //     echo '<script type="text/javascript">';
        //     echo ' alert("There is a connection error.")';  //showing an alert box.
        //     echo '</script>';
            
        //     header("Location: signup.php");
        //     exit();
        // }

        // if(isset($_POST['submit'])){
        //     $name = mysqli_real_escape_string($con, $_POST['name']);
        //     $email = mysqli_real_escape_string($con, $_POST['email']);
        //     $msg = mysqli_real_escape_string($con, $_POST['message']);

        //     $sql = "SELECT * FROM partners WHERE name = '$name'";
        //     $query = mysqli_query($con, $sql) or die(mysqli_error($con));
            
        //     if (mysqli_num_rows($res_u) == 1) {    
        //         $insert = "INSERT INTO partners (name, email, message) VALUES('$name', '$email', '$msg')";
        //         $result = mysqli_query($con, $insert) or die(mysqli_error($con));
        //         $message = 'Thank you for your collaboration!';
        //     }
        // }

        // //close
        // mysqli_close($con);

			//start the connection of the server
      include_once '../inc/config.db.php';

      //session_start(); //start the session of the server
			
      //this function will validate the input
			function validate($input){
				$input = trim($input); 
				$input = stripslashes($input);
				$input = htmlspecialchars($input);
				
				return $input;            
			}

			if(isset($_POST['submit'])){
				$name = validate($_POST["name"]);    //POST function to get what was the input for the username
				$email = validate($_POST["email"]);            //POST function to get what was the input for the email address
				$msg= validate($_POST["message"]);    //POST function to get what was the input for the password
				
				$sql_u = "SELECT * FROM users WHERE username='$name'";
				//$sql_e = "SELECT * FROM users WHERE email='$txtEmail'";
        //$sql_p = "SELECT * FROM users WHERE password='$txtPassword'";
				$res_u = mysqli_query($con, $sql_u) or die(mysqli_error($con));
				//$res_e = mysqli_query($con, $sql_e) or die(mysqli_error($con));

        //$hash = password_hash($sql_p, PASSWORD_DEFAULT);

				
					$query_1 = "INSERT INTO partners (name, email, message)
							VALUES ('$name', '$email', '$msg')";
					$result = mysqli_query($con, $query_1) or die(mysqli_error($con));
                    $message = 'Thank you for your collaborations!';
                
			}

    // Close the connection
    mysqli_close($con);
	
    ?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Plantita ph</title>
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-wrapper">
        <?php
            include_once '../navbar/navbar.php';
        ?>
        <div class="sections">
            <div class="main-content-container">
                <h1>Reach out</h1>
                <?php 
                    if(isset($message)){
                        echo  '<label style= "color: #164a41; text-align: center; margin-bottom: 2rem; font-size: 2rem;">'.$message. '</label>';
                    }
                ?>
                <div class="second-part" >
                    <div class="sp-title">
                        <h2>Customer Service</h2>
                        <p>help@plantita.ph</p>
                    </div>
                    <div class="sp-title">
                        <h2>General Inquiries</h2>
                        <p>hello@plantita.ph</p>
                    </div>
                    <div class="sp-title">
                        <h2>General Inquiries</h2>
                        <p>hello@plantita.ph</p>
                    </div>
                </div>
                <div class="third-part">
                    <h1>Or get in touch with the form below</h1>
                    <form action="contact.php" method="post">
                        <div class="style-input">
                            <input type="text" name="name" id="cntct-name" placeholder="Name" required>
                        </div>
                        <div class="style-input">
                            <input type="email" name="email" id="cntct-email" placeholder="Email" required>
                        </div>
                        <div class="style-input">
                            <textarea name="message" id="cntct-message" placeholder="Message" class="input-full" required></textarea>
                        </div>
                        <input name="submit" type="submit" value="Submit" class="btn-solid">
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
</body>
</html>