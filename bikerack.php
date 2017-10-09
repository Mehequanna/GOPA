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
      $current = 'bikerack';
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
          <h2 class="text-center">Vintage Style Bike Rack</h2>
          <br>
          <img src="img/carlabikerack.png" alt="Photo of Carla Piluso with the Bike Rack" class="center"/>
          <p class="text-center">Carla Piluso is the sponsor of the first artistic bike rack. The bike rack has been placed near Jazzy bagel on the corner of Main Ave and E Powell Blvd.</p>
          <br>
          <h2 class="text-center">Artist: Tim Foertsch</h2>
          <img src="img/bikerack.jpg" alt="Tim Foertsch Photo" class="center"/>
          <p class="text-center">Vintage looking bike rack with the artist Tim Foertsch.
          <br>
          Tim Foertsch transformed a standard bike rack using reclaimed materials into a Vintage style bike rack for us.</p>
        </div>
      </div><!-- row div close -->
    </div><!-- container div close -->
    <!-- End Body -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->
  </body>
</html>
