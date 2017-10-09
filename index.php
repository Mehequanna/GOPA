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
      $current = 'home';
      include 'navbar.php';
    ?>
    <!-- End Navbar -->

    <!-- Start Header -->
    <div id="header">
    </div>
    <!-- End Header -->

    <!-- Start Body -->
    <div class="container">
      <div class="row"> <!-- Start Events Section-->
        <div class="col-md-2"></div>
        <div class="col-md-8" id="event">
          <h2 class="text-center">Upcoming Event!</h2>
          <img src="img/artsfestivalsmall.png" alt="Event Photo" id="event-photo" />
          <br>
        </div>
        <div class="col-md-2"></div>
      </div><!-- End Events Section -->
      <img src="img/divider.png" alt="Page Divider" id="divider"/>
      <!-- Projects Section-->
      <div class="row">
        <div class="col-md-4 text-center">
          <img src="img/communityhotlinejune28th2017.png" alt="Photo of Judy on Community Hotline" />
          <h2>What's new <br>with GOPA?</h2>
          <h3>Updated: 7/1/2017</h3>
          <br>
          <br>
          <br>
          <br>
          <br>
          <a href="whatsnewwithgopa.html" class="btn btn-primary">Read More</a>
        </div>
        <div class="col-md-4 text-center">
          <img src="img/nadaka/nadakapark.jpg" alt="Nadaka Nature Park Postcard" />
          <h2>Nadaka Nature Park</h2>
          <h3>Slider the Otter &amp;
          <br>Seeker the Raven
          </h3>
          <a href="nadakanaturepark.html" class="btn btn-primary">Read More</a>
        </div>
        <div class="col-md-4 text-center">
          <img src="img/driscoll.jpg" alt="Driscoll in Downtown Gresham" />
          <h2>Driscoll</h2>
          <h3>by Heather Soderberg</h3>
          <br>
          <a href="driscoll.html" class="btn btn-primary">Read More</a>
        </div>
        <div class="col-md-4 text-center">
          <img src="img/mural.jpg" alt="Photo of Mural on Main Street" />
          <h2>Main Street Mural</h2>
          <h3>by Don Gray</h3>
          <br>
          <br>
          <br>
          <br>
          <a href="mural.html" class="btn btn-primary">Read More</a>
        </div>
        <div class="col-md-4 text-center">
          <img src="img/bikerack.jpg" alt="Bike Rack in Downtown Gresham" />
          <h2>Vintage Style<br>Bike Rack</h2>
          <h3>by Tim Foertsch</h3>
          <br>
          <br>
          <a href="bikerack.html" class="btn btn-primary">Read More</a>
        </div>
        <div class="col-md-4 text-center">
          <img src="img/crash.jpg" alt="Crash Statue in Downtown Gresham" />
          <h2>Crash</h2>
          <h3>by Michael DeSimone</h3>
          <br>
          <br>
          <br>
          <br>
          <a href="crash.html" class="btn btn-primary">Read More</a>
        </div>
        <div class="col-md-4 text-center">
          <img src="img/familyties.jpg" alt="Family Ties in Downtown Gresham" />
          <h2>Family Ties</h2>
          <h3>by Rip Caswell</h3>
          <br>
          <br>
          <br>
          <br>
          <br>
          <a href="familyties.html" class="btn btn-primary">Read More</a>
        </div>
      </div><!-- row div close -->
    </div><!-- container div close -->

    <img src="img/divider.png" alt="Page Divider" id="divider"/>
    <div class="row"> <!-- Start Quotes Section-->
      <div class="col-md-2"></div>
      <div class="col-md-8" id="quote">
        <h5 class="text-center">“I applaud the work that GOPA is doing to bring    public art to our community. Each unique piece reflects Gresham’s love of the arts while enhancing the flavor and feeling of our community.”
          <br>
        ~ Shane Bemis
          <br>
          Mayor of Gresham, Oregon
        </h5>
      </div>
      <div class="col-md-2"></div>
    </div><!-- End Quotes Section -->
    <br>
    <!-- End Body -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->
  </body>
</html>
