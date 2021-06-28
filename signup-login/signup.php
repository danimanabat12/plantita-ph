<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up | Plantita ph</title>
    <link rel="stylesheet" href="style.css" />

    <?php
      //start the connection of the server
      include('../config/db.php');

      session_start(); //start the session of the server
			
      //this function will validate the input
			function validate($input){
				$input = trim($input); 
				$input = stripslashes($input);
				$input = htmlspecialchars($input);
				
				return $input;            
			}

			if(isset($_POST['register'])){
				$txtUsername = validate($_POST["username"]);    //POST function to get what was the input for the username
				$txtEmail = validate($_POST["email"]);            //POST function to get what was the input for the email address
				$txtPassword = validate($_POST["password"]);    //POST function to get what was the input for the password
				
				$sql_u = "SELECT * FROM users WHERE username='$txtUsername'";
				$sql_e = "SELECT * FROM users WHERE email='$txtEmail'";
        $sql_p = "SELECT * FROM users WHERE password='$txtPassword'";
				$res_u = mysqli_query($conn, $sql_u) or die(mysqli_error($conn));
				$res_e = mysqli_query($conn, $sql_e) or die(mysqli_error($conn));

        //$hash = password_hash($sql_p, PASSWORD_DEFAULT);

				if (mysqli_num_rows($res_u) > 0) {
					$message = 'The username is already taken.';
				}
        else if(mysqli_num_rows($res_e) > 0){
					$message = 'The email is already taken';
				}
        else if (strlen(trim($_POST["password"])) < 8){
          $message = 'Password must be at least 8 characters.';
        }
        else{
					$query_1 = "INSERT INTO users (username, email, password)
							VALUES ('$txtUsername', '$txtEmail', '$txtPassword')";
					$result = mysqli_query($conn, $query_1) or die(mysqli_error($conn));

          $query_2 = "INSERT INTO user_data (username, email)
							VALUES ('$txtUsername', '$txtEmail')";
					$result_2 = mysqli_query($conn, $query_2) or die(mysqli_error($conn));
          echo '<script>
							window.location.href="login.php";
							alert("Thank you for signing up!");
						</script>';
					exit();
				}
			}
		?>
  </head>
  <body>
    <div class="split-screen">
      <div class="left bg1">
        <section class="copy"></section>
      </div>
      <div class="right">
        <a class="title"  href="../homepage/index.php">Plantita.ph</a>
        <form action="" method = "post">
          <section class="copy">
            <h2>Sign up</h2>
            <p>Already have an account? <a href="login.php">Log in</a></p>
            <div class="social-media">
              <a class="social-icon" href="https://www.google.com">
                <img src="images/google-logo.svg" alt="" />
                Sign up with Google
              </a>
              <a class="social-icon" href="facebook.com">
                <img src="images/facebook-logo.svg" alt="https://www.facebook.com" />
                Sign up with Facebook
              </a>
            </div>
            <div class="or-container">
              <div class="line 1"></div>
              <p>or</p>
              <div class="line 2"></div>
            </div>
            <?php 
              if(isset($message)){
                echo  "<div style= 'color: red;' class='alert alert-danger'>".$message. "</div>";
              }
            ?>
          </section>
          <div class="input-container name">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" required/>
            <img class="input-icon" src="Images/person-icon.svg" alt="" />
          </div>
          <div class="input-container email">
            <label for="email">Email Address</label>
            <input id="email" name="email" type="email" required/>
            <img class="input-icon" src="Images/mail-icon.svg" alt="" />
          </div>
          <div class="input-container password">
            <label for="password">Password</label>
            <input
              id="password"
              name="password"
              type="password"
              required
            />
            <img class="input-icon" src="Images/lock-icon.svg" alt="" />
            <a onclick="showLetters()"><img class="show-btn" src="Images/eye-icon.svg" alt="" /></a>
          </div>
          <div class="input-container cta">
            <label class="checkbox-container">
              <input type="checkbox" required/>
              <span class="checkmark"></span>
              I agree to Plantita’s
              <a href="../filler_page/404page.php">Terms of Service</a> and
              <a href="../filler_page/404page..php">Privacy Policy</a>
            </label>
          </div>
          <button class="signup-btn" name ="register" type="submit">Register</button>
        </form>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
