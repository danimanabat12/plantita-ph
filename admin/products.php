<?php
  session_start();
  include('../config/db.php');
  if(!isset($_SESSION['user']) && empty($_SESSION['user']) ){
    header('location:login.php');
  }
?>
<?php include('inc/header.php'); ?>
<?php include('inc/nav.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products | Plantita ph</title>
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
            <h2>Products</h2>
            
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
                <th>Product Name</th>
                <th>Category Name</th>
                <th>Thumbnail</th>
                <th>Action</th>
              </tr>
				  </thead>  
                <?php
                    $sql = "SELECT * FROM Category";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM products";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                  ?>
                <tr>
                    <td><?php echo $row["product_name"] ?></td>
                    <td><?php echo $row["cat_id"] ?></td>
                    <td><?php if(isset($row["thumb"])){echo 'yes'; }else{ echo 'No'; }  ?></td> 
                    <td><a href='editProducts.php?id=<?php echo $row["product_id"]; ?>'>Edit</a> 
                    | <a href='delProducts.php?id=<?php echo $row["product_id"]; ?>'>Delete</a></td>
                </tr>
                  <?php
                      }
                  } 
                  else {
                    echo '0 results';
                  }}}
                  ?>
                </tbody>
        </table>
        </div>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>