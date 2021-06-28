<?php
ob_start();


?>
<?php
session_start();
include('../config/db.php');

if (!isset($_SESSION['user']) && empty($_SESSION['user'])) {
	header('location:login.php');
}

include('inc/header.php');
include('inc/nav.php');


if (isset($_POST['submit'])) {


	$orderid = $_POST['orderid'];
	$reason = $_POST['reason'];
	$status = $_POST['status'];;
	$insertCancel = "INSERT INTO ordertracking (order_id, status, message )
	VALUES ('$orderid', '$status', '$reason')";

	if (mysqli_query($conn, $insertCancel)) {
		
		$up_sql = "UPDATE orders SET orderstatus='$status'  WHERE id=$orderid";
		mysqli_query($conn, $up_sql);
		header('location:orders.php');
	}
}

?>






<div class="container text-white">

	<?php
	$total = 0;
	?>

	<section id="content">
		<div class="content-blog">
			<div class="page_header text-center  py-5">
				<h2>Process Order</h2>

			</div>
			<form method='post'>

				<div class="container ">
					<div class="row">
						<div class="offset-md-2 col-md-8">
							<div class="billing-details">
								<table class="cart-table account-table table table-bordered bg-white text-dark">
									<thead>
										<tr>
											<th>Product Name</th>
											<th>Category ID</th>
											<th>Price</th>
											<th>Quantity</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<?php
										// $c_id = $_SESSION['customerid'];

										if (isset($_GET['id'])) {
											$o_id = $_GET['id'];
										}

										$sql = "SELECT * FROM orders WHERE id='{$o_id}'";
										$result = mysqli_query($conn, $sql);

										if (mysqli_num_rows($result) > 0) {

											while ($row = mysqli_fetch_assoc($result)) {

										?>
												<tr>
													<td>
														<?php
														$sql_proID = "SELECT * FROM orderitems WHERE order_id='{$o_id}'";
														$result_proID = mysqli_query($conn, $sql_proID);
														$row_prodID = mysqli_fetch_assoc($result_proID);
														$p_id =  $row_prodID['product_id'];

														$sql_ProName = "SELECT * FROM products WHERE product_id='{$p_id}'";
														$result_ProName = mysqli_query($conn, $sql_ProName);
														$row_ProName = mysqli_fetch_assoc($result_ProName);
														echo  $row_ProName['product_name'];
														?>


													</td>
													<td>
														<?php echo $row_ProName["cat_id"] ?>
													</td>
													<td>
														<?php echo $row_ProName["price"] ?>
													</td>
													<td>
														<?php echo $row_prodID['quantity']  ?>
													</td>
													<td>
														<?php echo $row["totalprice"] ?>
													</td>

												</tr>


										<?php
											}
										} else {
											echo "0 results";
										}


										?>





									</tbody>

								</table>
								<div class="space30"></div>


								<div class="form-group">
									<label for="sel1">Change Status:</label>
									<select class="form-control" name="status">
										<option value='In Progress'>In Progress</option>
										<option value='Dispatched'>Dispatched</option>
										<option value='Delivered'>Delivered</option>
										<option value='Canceled'>Canceled</option>
									</select>
								</div>

								<div class="clearfix space20"></div>
								<label>Reason</label>
								<textarea class="form-control" name='reason' id="" cols="30" rows="10"></textarea>


							</div>
						</div>


					</div>




				</div>

				<div class="row">
					<div class="col-md-12 text-center">
						<input type="hidden" name='orderid' value='<?php echo $_GET['id'] ?>'>
						<input type='submit' name='submit' value='Change Status' class="btn">
					</div>
				</div>

		</div>
	</section>
</div>

</form>







<?php include('inc/footer.php');  ?>