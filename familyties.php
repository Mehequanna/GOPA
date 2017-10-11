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
      $current = 'familyties';
      include 'navbar.php';
    ?>
    <!-- End Navbar -->

    <!-- Start Header -->
    <div id="header">
    </div>
    <!-- End Header -->

    <!-- Start Body-->
    <div class="container">
      <img src="img/divider.png" alt="Page Divider" id="divider"/>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 body">
          <h2 class="text-center">Family Ties</h2>
          <br>
          <img src="img/familyties.jpg" alt="Family Ties in downtown Gresham" class="center"/>
          <p class="text-center">Gresham Outdoor Public Art stepped forth to financially help the Gresham Museum install a beautiful brick paver base for the statue “Family Ties” by Rip Caswell. The museum had purchased the statue several years before. Gresham Outdoor Public Art also purchased a plaque to commemorate the artist.</p>
          <p class="text-center">This piece symbolizes the importance of family and the helpful spirit of children. As a young girl helps her little brother tie his shoes, this bronze sculpture illustrates the bond that is so precious between siblings.<br> Learn more at: <a href="http://www.caswellsculptures.com/bronze-sculptures/boy-and-girl.cfm" target="blank">http://www.caswellsculptures.com/bronze-sculptures/boy-and-girl.cfm</a></p>
          <br>
          <br>
          <img src="img/familytiesplaque.jpg" alt="Family Ties Plaque" class="center"/>
          <p class="text-center">Family Ties with Plaque</p>
          <br>
          <img src="img/familytiescloseup.jpg" alt="Close up of Family Ties" class="center"/>
          <p class="text-center">Close up of Family Ties</p>
          <br>
          <h2 class="text-center">Artist: Rip Caswell</h2>
          <img src="img/ripcaswell.jpg" alt="Rip Caswell Photo" class="center"/>
          <p class="text-center">“Accomplished sculptor, Rip Caswell, is popular with private and corporate collectors worldwide. He has created more than 200 sculptures of various subjects in contemporary and realistic styles.</p>
          <p class="text-center">“An authority in wildlife art, Caswell’s collectibles are credited to his deep understanding of living creatures – human and animal – in their natural environment. His sculptures have a life and breath of their own.</p>
          <p class="text-center">“Caswell often serves as a judge in competitions and presents at seminars. Many art galleries, publications and television broadcasts also have featured his works.”
          <br>
          Learn more at: <a href="http://www.caswellsculptures.com/" target="_blank">http://www.caswellsculptures.com/</a></p>
          <p class="text-center">Here is a video of Rip Caswell in action!</p>
          <iframe class="center" src="https://www.youtube.com/embed/gLuYlk6T3d4" frameborder="0" allowfullscreen></iframe>
        </div>
      </div><!-- row div close -->
    </div><!-- container div close -->
    <!-- End Body -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->
  </body>
</html>
