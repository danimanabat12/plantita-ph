<?php
    session_start();
    include('../config/db.php'); 
    if(!isset($_SESSION['user']) && empty($_SESSION['user']) ){
        header('location:login.php');
    }
?> 
<?php include('inc/header.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories | Plantita ph</title>
    <link rel="stylesheet" href="style.css" />
<?php include('inc/nav.php') ?>
  </head>
  <body>
    <div class="split-screen">
      <div class="left bg2">
        <section class="copy"></section>
      </div>
      <div class="right">
        <form action="" method = "post">
          <section class="copy">
            <h2>Categories</h2>
            
            <div class="or-container">
              <div class="line 1"></div>
              <p>oOo</p>
              <div class="line 2"></div>
            </div>
          </section>
          <div class="container pt-4">
          <table class='table table-bordered bg-white'>
            <thead>
                <tr>
                    <td> Name</td>
                    <td>Action</td>
                </tr>
                <?php
                    $sql = "SELECT * FROM Category";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row["cat_name"] ?></td>
                    <td><a href='editCategory.php?id=<?php echo $row["cat_id"] ?>'>Edit</a> 
                    | <a href='delCategory.php?id=<?php echo $row["cat_id"] ?>'>Delete</a></td>
                </tr>
                    
                    <?php
                            }
                        } 
                        else {
                            echo "0 results";
                        }
                    ?>
                </tbody>
            </thead>
        </table>
        </div>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>