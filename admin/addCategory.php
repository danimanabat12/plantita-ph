<?php
  session_start();
  include('../config/db.php');
  if(!isset($_SESSION['user']) && empty($_SESSION['user']) ){
    header('location:login.php');
  }

  if(isset($_POST['submit'])){
    $catName = $_POST['catName'];

    $sql = "INSERT INTO category (cat_name) VALUES ('$catName')";

    if (mysqli_query($conn, $sql)) {
      $message = 'New category is created successfully';
    } 
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
?> 

<?php include('inc/header.php') ?>
<?php include('inc/nav.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Category | Plantita ph</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="split-screen">
      <div class="left bg1">
        <section class="copy"></section>
      </div>
      <div class="right">
        <form action="" method = "post">
          <section class="copy">
            <h2>Add Category</h2>
            
            <div class="or-container">
              <div class="line 1"></div>
              <p>oOo</p>
              <div class="line 2"></div>
            </div>
            <?php
              if(isset($message)){
            ?>
    			<div class="alert alert-success"><?php echo $message ?></div>
        	<?php
        		}
        	?>
          </section>
          <div class="input-container name">
            <label for="username">Category Name</label>
            <input id="username" name="catName" type="text" required/>
            <img class="input-icon" src="Images/nav-logo.svg" alt="" />
          </div>
          <button class="signup-btn" id="catName" name='submit' type="submit">Submit</button>
        </form>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>