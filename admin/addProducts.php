<?php
	session_start();
	include('../config/db.php');
	if(!isset($_SESSION['user']) && empty($_SESSION['user']) ){
		header('location:login.php');
	}
?>

<?php include('inc/header.php') ?>
<?php include('inc/nav.php') ;

if(isset($_POST['submit'])){
    $productname = $_POST['productname'];
    $productdescription = $_POST['productdescription'];
    $productcategory = $_POST['productcategory'];
    $productprice = $_POST['productprice']; 

	if(isset($_FILES) & !empty($_FILES)){
		$name = $_FILES['productimage']['name'];
		$size = $_FILES['productimage']['size'];
		$type = $_FILES['productimage']['type'];
		$tmp_name = $_FILES['productimage']['tmp_name'];

		$max_size = 10000000;
		$extension = substr($name, strpos($name, '.') + 1);

		if(isset($name) && !empty($name)){
			if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
				$location = "uploads/";
				if(move_uploaded_file($tmp_name, $location.$name)){
					//$smsg = "Uploaded Successfully";
					$sql2 = "INSERT INTO products (product_name, cat_id, price, product_description, thumb)
							VALUES ('$productname', '$productcategory', '$productprice', '$productdescription', '$location$name')";
					$res = mysqli_query($conn, $sql2);
					if($res){
						//echo "Product Created";
						$message = 'Saved Successfully with image';
					}
					else{
						$message = "Failed to Create Product";
						echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
					}
				}
				else{
					$message = "Failed to Upload File";
				}
			}
			else{
				$message = "Only JPG files are allowed and should be less that 1MB";
			}
		}
		else{
			$message = "Please Select a File";
		}
	}
	else{
		$sql = "INSERT INTO products (product_name, cat_id, price, product_description)     
				VALUES ('$productname', '$productcategory', '$productprice', '$productdescription')";

		if (mysqli_query($conn, $sql)) {
			$message = 'New product is added successfully';
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Products | Plantita ph</title>
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
            <h2>Add Products</h2>
            
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
            <label for="productname">Product Name</label>
            <input type="text" class="form-control" name="productname" id="Productname" required/>
            <img class="input-icon" src="Images/nav-logo.svg" alt="" />
          </div>
		      <div class="input-container name">
            <label for="productdescription">Product Description</label>
            <input type="text" class="form-control" name="productdescription" required/>
            <img class="input-icon" src="Images/nav-logo.svg" alt="" />
          </div>
          <div class="input-container name">
            <label for="productprice">Product Price</label>
            <input name="productprice" id="productprice" type="text" required/>
            <img class="input-icon" src="Images/nav-logo.svg" alt="" />
          </div>
          <!-- akoa ning gi comment kay naglagot ko if naa ni sya maddaot ang design ewan -->
          <div class="form-group">
			    <label for="productcategory">Product Category</label>
			    <select id="productcategory" name="productcategory">
				  <option value="" selected disabled>---SELECT CATEGORY---</option>
				  <?php
        
                  $sql = "SELECT * FROM Category";
                  $result = mysqli_query($conn, $sql);
              
                
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
              
                          ?> 
                 <option value="<?php echo $row["cat_id"] ?>"><?php echo  $row["cat_name"] ?></option> 
                      <?php
                      }
                  
                  ?>
				</select>
        </div>
          <div class="input-container name" style= "margin-bottom: 2rem;" >
			    <label for="productimage">Product Image (.jpg/.png)</label>
			    <input type="file" name="productimage" id="productimage">
			    
			  </div> 
			  
			  <button type="submit"  name ='submit' class="signup-btn">Submit</button>
        </form>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>