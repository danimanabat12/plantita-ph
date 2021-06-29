<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In | Plantita ph</title>
    <link rel="stylesheet" href="style.css" />
    <?php
				//start the connection of the server
        include('../config/db.php');

        session_start(); //start the session of the server
				
        //if the user submits the form
        if(isset($_POST["login"])){
          $myusername = mysqli_real_escape_string($conn, $_POST['username']);
          $mypassword = $_POST['password'];
					
          //select the data from table
				  $sql = "SELECT * FROM users WHERE username='$myusername'";

          //store the result from the query we have made
          $result = mysqli_query($conn, $sql); 

					if (mysqli_num_rows($result) > 0){
              $check = mysqli_fetch_assoc($result);
              if($mypassword == $check["password"]){
                
                // Password is correct, so start a new session
                session_start();
                $_SESSION['username'] = $myusername;
                header('location: ../homepage/index.php');
                exit();
              }
              else{
                $message =  'Invalid password!';
              }
          }
          else{
					  $message =  'Account is not registered.';
				  }
				
				}
			?>
  </head>
  <body>
    <div class="split-screen">
      <div class="right">
        <a class="title"  href="../homepage/index.php">Plantita.ph</a>
        <form action="" method="POST">
          <section class="copy">
            <h2>Log in</h2>
            <p>Don't have an account yet? <a href="signup.php">Sign up</a></p>
            <div class="social-media">
              <a class="social-icon" href="https://www.google.com">
                <img src="images/google-logo.svg" alt="" />
                Log in with Google
              </a>
              <a class="social-icon" href="facebook.com">
                <img src="images/facebook-logo.svg" alt="https://www.facebook.com" />
                Log in with Facebook
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
          <button class="signup-btn" name ="login" type="submit">Login</button>
        </form>
      </div>
      
      <div class="left bg2">
        <section class="copy"></section>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
