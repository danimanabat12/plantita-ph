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

    <?php 
        session_start();
        include('../config/db.php'); 
			
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
				
		$query_1 = "INSERT INTO partners (name, email, message) VALUES ('$name', '$email', '$msg')";
		$result = mysqli_query($conn, $query_1) or die(mysqli_error($conn));
        
        echo '<script>
			window.location.href="../contact-us/contact.php";
			alert("Thank you for your collaborations!");
			</script>';
		exit();     
	}
	
?>
</head>
<body>
    <div class="container-wrapper">
        <?php
           include_once '../navbar/navbar.php';
        ?>
        <div class="sections">
            <div class="main-content-container">
                <h1>Reach out</h1>
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
                            <!-- <label for="email">Email</label> -->
                            <input type="email" name="email" id="cntct-email" placeholder="Email" required>
                        </div>
                        <div class="style-input">
                            <!-- <label for="message">Message</label> -->
                            <textarea name="message" id="cntct-message" placeholder="Message" class="input-full" required></textarea>
                        </div>
                        <input name="submit" type="submit" value="Submit" class="btn-solid">
                        <!-- <button  name="submit"  type="submit" class="btn-solid">Submit</button> -->
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