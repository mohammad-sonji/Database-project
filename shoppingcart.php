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
        <li><a href="history.php">History</a></li>
        <li><a href="shoppingcart.php">Shopping cart</a></li>
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
										<div class="home_title"><h2>Shopping cart</h2></div>
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


  <div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">


<!-- echo "<div class='section_title'><h1>$row2[name]<br>($avg Stars)</h1></div>"; -->
  <?php
require('dbconn.php');
$query= "SELECT name, id, picture, price, quantiy from product, shoppingcart where customer_id='$_SESSION[userid]' and product.id = shoppingcart.product_ID";
$result= mysqli_query($db, $query) or die ("Couldnt execute query 0.");
$summ = 0;
while($row=MySQLI_fetch_array($result)){
$r = $row['price']*$row['quantiy'];
echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/>';
echo " <div class='destination item'>
							<div class='destination_image'>

							</div>
							<div class='destination_content'>
								<div class='destination_title'><a href='events.html' id='rockclimbing'>$row[name]</a></div>

$r $,

                quantity: $row[quantiy]

							</div>
						</div><hr><hr><hr>";

            $summ= $summ + ($row['price']*$row['quantiy']);
}
echo "
<form action='order.php' method='post'>
<button name='checkout' type='submit'>proceed to checkout</button>
<h3>total: $summ $</h3>
</form> ";

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
