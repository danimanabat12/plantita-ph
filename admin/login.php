<?php 
    include('inc/header.php');
    session_start();
    include('../config/db.php');
    
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM admins WHERE username='$username' and password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['user'] = $username;
            header('location:index.php');
        } 
        else {
            $message =  'Incorrect Credentials!';
        }
    }
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Plantita ph</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="split-screen">
      <div class="right">
        <a class="title"  href="../homepage/index.php">Plantita.ph</a>
        <form action="" method="POST">
          <section class="copy">
            <h2>Admin Log in</h2>
            <div class="or-container">
              <div class="line 1"></div>
              <p>oOo</p>
              <div class="line 2"></div>
            </div>
            <?php 
                if(isset($message)){
                    echo  "<div class='alert alert-danger'>".$message. "</div>";
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
            <img class="show-btn" src="Images/eye-icon.svg" alt="" onclick="showLetters()" />
          </div>
          <button class="signup-btn" name ="submit" type="submit">Login</button>
        </form>
      </div>
      
      <div class="left bg1">
        <section class="copy"></section>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>