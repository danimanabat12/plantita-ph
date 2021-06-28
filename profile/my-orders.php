<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f5f971efa.js" crossorigin="anonymous"></script>
    <title>Profile | Plantita ph</title>
    <link rel="stylesheet" href="../navbar/style.css">
    <link rel="stylesheet" href="../profile/myorder.css">
    <?php
    session_start();
    include('../config/db.php');

    //if the user is not signed in
    if (!isset($_SESSION['username']) && empty($_SESSION['username'])) {
        header('location: ../signup-login/login.php');
    }


    $uid = $_SESSION['user_id'];
    ?>
</head>

<body>
    <div class="container-wrapper">
        <?php
        include_once '../navbar/navbar.php';
        ?>
        <div class="sections">
            <section class="table-container">
                <div class="head-title">
                    <h1>My Orders</h1>
                </div>
                <div class="container-content">
                            <p>All orders</p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Payment Mode</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $ordsql = "SELECT * FROM orders WHERE user_id='$uid'";
                                    $ordres = mysqli_query($conn, $ordsql);
                                    while ($ordr = mysqli_fetch_assoc($ordres)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo $ordr['timestamp']; ?>
                                            </td>
                                            <td>
                                                <?php echo $ordr['orderstatus']; ?>
                                            </td>
                                            <td>
                                                <?php echo $ordr['paymentmode']; ?>
                                            </td>
                                            <td>
                                                Php <?php echo $ordr['totalprice']; ?>.00
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
</body>

</html>