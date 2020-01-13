<!DOCTYPE html>

<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MAD &mdash; Free Medical Advisor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free Medical Advisor" />
	<meta name="keywords" content="free medical, free advisor, health, vaccination, alergies, desies" />
	<meta name="author" content="MedicalAdvisor.co" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

</head>
<body>
<div id="fh5co-page">
  <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
  <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

    <h1 id="fh5co-logo"><a href="index.php">MAD</a></h1>
    <nav id="fh5co-main-menu" role="navigation">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="generaltopics.php">General Topics</a></li>
				<li><a href="forum.php">Forum</a></li>
        <li><a href="about.php">About</a></li>
        <li class="fh5co-active"><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

    <div class="fh5co-footer">
      <p><small>&copy; 2020 MAD-MedicalAdvisor. All Rights Reserved.</span> <span>Designed by <a href="https://github.com/sdbisTeam/WebSysDev" target="_blank">WebSysDev</a> </span> <span>Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></span></small></p>
      <ul>
        <li><a href="#"><i class="icon-facebook2"></i></a></li>
        <li><a href="#"><i class="icon-twitter2"></i></a></li>
        <li><a href="#"><i class="icon-instagram"></i></a></li>
        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
      </ul>
    </div>

  </aside>



  <!-- **************************************************************** -->

  <div id="fh5co-main">
    <div class="fh5co-more-contact">
      <div class="fh5co-narrow-content">
        <div class="row">
          <div class="col-md-4">
            <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
              <div class="fh5co-icon">
                <i class="icon-globe"></i>
              </div>
              <div class="fh5co-text">
                <p><a href="#">medical-awesome@domain.com</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
              <div class="fh5co-icon">
                <i class="icon-map"></i>
              </div>
              <div class="fh5co-text">
                <p>Iasi, Romania</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
              <div class="fh5co-icon">
                <i class="icon-phone"></i>
              </div>
              <div class="fh5co-text">
                <p><a href="tel://">+40 753 505 914</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- -->

    <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">

      <div class="row">
        <div class="col-md-4">
          <h2>Get In Touch</h2>
        </div>
      </div>
      <form action="sendemail.php" method="post">

        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Phone" name="phone">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary btn-md" value="Send Message">
                </div>
              </div>

            </div>
          </div>

        </div>

      </form>
      <div>
        <p><?php include("sendemail.php"); echo $mess=""; ?></p>
      </div>
    </div>
    <div id="map"></div>
  </div>
</div>






  <!-- **************************************************************** -->



  <!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
  <!-- Google Map AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA  ///  AIzaSyASkuEgtzjefu-m9Nurj8hEO4NDnHGCFTA  /// AIzaSyDtd_i7RCKGHQtx5ufXJR9PofqCWN_oin0-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtd_i7RCKGHQtx5ufXJR9PofqCWN_oin0&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
