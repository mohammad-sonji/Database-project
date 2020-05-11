<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Database project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">

  <!-- <div class="site-wrap"> -->

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

  `  <header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-11 col-xl-2 site-logo">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">Database project</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="index.html">Home</a></li>
                <li class="has-children">
                  <ul class="dropdown">
                    <li><a href="#section-how-it-works" class="nav-link">How It Works</a></li>
                    <li><a href="#section-our-team" class="nav-link">Our Team</a></li>
                  </ul>
                </li>

                <li  class="active"><a href="login.php">Login</a></li>

              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header>
`


    <div class="site-blocks-cover overlay" style="background-image: url(images/aboutusimage.jpg);" data-aos="fade" data-stellar-background-ratio="0.5" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


            <h1 class="text-white font-weight-light text-uppercase font-weight-bold" data-aos="fade-up">Sign up</h1>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="section-about">
      <div class="container">
        <div class="row mb-5">



					<div class="owl-item">
						<div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
						<div class="home_slider_content_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_content">
										<div class="limiter">
													<div class="wrap-login100 p-l-55 p-r-65 p-t-40 p-b-50">

														<form action="signupproc.php" method="post">
															<span class="login100-form-title p-b-33">
																Register
															</span>





															<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
																 <input type="text" placeholder="Username" name="username" required>
																<span class="focus-input100-1"></span>
																<span class="focus-input100-2"></span>
															</div>

                              <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
																 <input type="date" placeholder="Bday" name="Bday" required>
																<span class="focus-input100-1"></span>
																<span class="focus-input100-2"></span>
															</div>

                              <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
																 <input type="text" placeholder="Address" name="address" required>
																<span class="focus-input100-1"></span>
																<span class="focus-input100-2"></span>
															</div>

                              <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
																 <input type="number" placeholder="Phone" name="phone" required>
																<span class="focus-input100-1"></span>
																<span class="focus-input100-2"></span>
															</div>
<!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,} -->
															<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
																<input id="password"  type="password" placeholder="Password"class="pass1" name="password" "
																title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
																<span class="focus-input100-1"></span>
																<span class="focus-input100-2"></span>
															</div>

                              <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
																<select id="password"   placeholder="Owner or customer" name="Ownerorcustomer">
                                  <option value="0">Customer</option>
                                    <option value="1">Owner</option>
                                </select>
																<span class="focus-input100-1"></span>
																<span class="focus-input100-2"></span>
															</div>


															<div class="container-login100-form-btn m-t-20">
																<input type="submit" id="submit" name="submit" value="Sign up" class="login100-form-btn">
															</div>
															</div>
														</form>



															</div>
														</form>
													</div>
												</div>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

    <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: white;
  color: black;
  text-align: center;
}
</style>

<footer>
<div class="footer">
<div class="row align-items-center justify-content-center text-center">

  <li><a href="contactus.html">Contact us | </a></li>
<li><a href="termsandconditions.html">Terms and conditions | </a></li>
<li><a href="privacypolicy.html">Privacy Policy | </a></li></a>
<li><a href="FAQ.html">FAQ</a></li></a><b>
</div>
</div>
</footer>
</div>



  <!-- </div> -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>
