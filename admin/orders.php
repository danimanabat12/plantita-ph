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
    <title>Orders | Plantita ph</title>
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
            <h2>Orders</h2>
            
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
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Total Price</th>
                    <th>Order Status</th>
                    <th>Payment Mode </th>
                    <th>Order Placed On</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $sql = "SELECT orders.totalprice, orders.orderstatus, orders.paymentmode, orders.timestamp, orders.id, user_data.firstname, user_data.lastname 
                        FROM orders JOIN user_data ON orders.user_id=user_data.id ORDER BY `orders`.`id` DESC    ";
                        $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                 // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {

                    ?>

                    <tr>
					    <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row["firstname"] . " " . $row["lastname"] ?></td>
                        <td><?php echo $row["totalprice"] ?></td>
                        <td><?php echo $row["orderstatus"] ?></td>
                        <td><?php echo $row["paymentmode"] ?></td>
                        <td><?php echo $row["timestamp"]  ?> </td>

                        <td><a href='order-process.php?id=<?php echo $row["id"] ?>'>Change Status</a></td>
                    </tr>
                    <?php
                        }
                        } else {
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