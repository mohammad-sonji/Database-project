<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Database project</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
<link rel="stylesheet" href="fonts/icomoon/style.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">

<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="index.html">Database project</a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li><a href="index.php">Home</a></li>
                  <li><a href="pagestore.php">Page store</a></li>
									<li><a href="login.php">Login</a></li>


								</ul>
							</nav>

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_social d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="favstore.php">Favourite store</a></li>
				<li><a href="#">Shopping cart</a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->



	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/shoppingimage.png)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_title"><h2>Show store</h2></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/shopping2.png)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/shopping3.jfif)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/shopping4.jfif)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/shopping5.jfif)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="home_page_nav">
				<ul class="d-flex flex-column align-items-end justify-content-end">
					<li><a href="#" data-scroll-to="#destinations">Offers<span>01</span></a></li>
					<li><a href="#" data-scroll-to="#testimonials">Testimonials<span>02</span></a></li>

				</ul>
			</div>
		</div>
	</div>

	<!-- Search -->

	<!-- Destinations -->




				<div class="col text-center">


          <?php


          require('dbconn.php');
          $id2=$_POST["submit"];
					if(isset($_POST['like'])){
							if($_POST['like']=="like"){
								$query11= "INSERT INTO likes(customer_id,store_id) VALUES ('$_SESSION[userid]','$id2')";
									$result11= mysqli_query($db, $query11) or die ("Couldnt execute query.");
							}
							else{
								$query12 ="DELETE FROM likes WHERE customer_id='$_SESSION[userid]' and store_id='$id2'";
								$result12= mysqli_query($db, $query12) or die ("Couldnt execute query.");
							}
					}
          $query2= "SELECT * FROM shop WHERE id='$id2'";
          $result2= mysqli_query($db, $query2) or die ("Couldnt execute query.");
          $row2=MySQLI_fetch_array($result2);

					echo "<div class='section_title'><h1>$row2[name]</h1></div>";

					$query10="SELECT * FROM likes WHERE customer_id='$_SESSION[userid]' and store_id='$id2'";
					$result10= mysqli_query($db, $query10) or die ("Couldnt execute query.");
					$row10 = mysqli_fetch_assoc($result10);
					if($row10){
						echo "<form action='showstore.php' method='post'><input type='text' name='submit' value='$id2' style='visibility: hidden;'><button type='submit' name='like' value='unlike'>Remove from favourite</button></form>";
					}
					else{
						echo "<form action='showstore.php' method='post'><input type='text' name='submit' value='$id2' style='visibility: hidden;'><button type='submit' name='like' value='like'>Add to favourite</button></form>";

					}
          ?>


<label for="cars">rate the store:</label>
<form action="" method="post">
<?php	echo"<input type='text' name='submit' value='$id2' style='visibility: hidden;' >"?>
<select id="cars" name="select">
  <option value="1" >1</option>
  <option value="2" >2</option>
  <option value="3">3</option>
  <option value="4" >4</option>
	<option value="5" >5</option>

</select>
<input type="submit" value="rate">
</form>
<?php

if(isset($_POST['select'])){
		$query111 = "SELECT * from rating where customer_id='$_SESSION[userid]' and storeid='$_POST[submit]'";
		  $result111= mysqli_query($db, $query111) or die ("Couldnt execute query");
			$row111=MySQLI_fetch_array($result111);
			if($row111){
				$query1111 = "UPDATE rating set rating = $_POST[select] where customer_id='$_SESSION[userid]' and storeid='$_POST[submit]' ";
				  $result1111= mysqli_query($db, $query1111) or die ("Couldnt execute query.");
			}else{
				$query11111 = "INSERT INTO rating (customer_id, storeid, rate) VALUES ('$_SESSION[userid]', '$id2','$_POST[select]')";
				  $result11111= mysqli_query($db, $query11111) or die ("Couldnt execute query....");
			}
	}
 ?>
				</div>





  <div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">

  <?php
require('dbconn.php');
$id=$_POST["submit"];
$query= "SELECT * FROM product WHERE store_id='$id'";
$result= mysqli_query($db, $query) or die ("Couldnt execute query.");



while($row=MySQLI_fetch_array($result)){
echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/>';
echo " <div class='destination item'>
							<div class='destination_image'>

							</div>
							<div class='destination_content'>
								<div class='destination_title'><a href='events.html' id='rockclimbing'>$row[name]</a></div>
								<div class='destination_subtitle'><form action='addproduct.php' method='post'><button type='submit' name='submit' value='$row[id]'>Add to shopping cart </button><input type='number'name='quantity' value='1'></form></div>
							</div>
						</div><hr><hr><hr>";
}


  ?>
</div>
</div>

</div>
</div>

	<!-- Footer -->



<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/main.js"></script>
</body>
</html>
