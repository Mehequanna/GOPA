<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GOPA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS Styling -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- jQuery -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <!-- Bootstrap JS (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>

  </head>
  <body>
    <!-- Start Navbar -->
    <?php
      $current = 'about';
      include 'navbar.php';
    ?>
    <!-- End Navbar -->

    <!-- Start Header -->
    <div id="header">
    </div>
    <!-- End Header -->

    <!-- Start Body -->
    <div class="container">
      <img src="img/divider.png" alt="Page Divider" id="divider"/>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 body">
          <h2 class="text-center">About Us</h2>
          <br>
          <h4 class="text-center">Our Beginning:</h4>
          <p class="text-center">The Art Walk Etc. organization is a group of individuals and supporters that partner together to build community using art as the vehicle. The Gresham Art Walk was created in 2002 by a small group of volunteers who loved art-all kinds of art! The 3rd Saturday in July brought 10,000 attendees of all ages and walks of life to this free, one-day event. Our legacy as an organization is the creation and success, for twelve years, of the Gresham Art Walk.</p>
          <p class="text-center">In 2013 after a year of mentoring The Gresham Art Walk was gifted to the City of Gresham and the community. The event continues today as the Gresham Arts Festival.</p>
          <p class="text-center">With a desire to branch out and do more art projects in the community, Art Walk Etc. a 501c3 formed the Gresham Outdoor Public Art (GOPA). Our Federal Tax ID is 59-3781305</p>
          <br>
          <h4 class="text-center">Our Mission:</h4>
          <p class="text-center">To obtain and place durable, art sculptures produced by NW artists to provide ongoing educational and cultural experiences and to cultivate appreciation of what visual, approachable outdoor art can do to enrich our community.</p>
          <br>
          <h4 class="text-center">Our Goals:</h4>
          <p class="text-center">Our program goals for Gresham Outdoor Public Art (GOPA) are: to acquire durable, art sculptures or works produced by NW artists both established, and emerging new artists, and to provide an economic benefit and ongoing educational and cultural experience for Gresham and the surrounding communities, to cultivate the appreciation of what visual outdoor art can do to enhance the livability of Gresham.</p>
        </div>
      </div><!-- row div close -->
    </div><!-- container div close -->
    <!-- End Body -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->
  </body>
</html>
