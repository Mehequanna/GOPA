<!DOCTYPE html>
<html lang="en">
  <?php include 'head.php' ?>
  <body>
    <!-- Start Navbar -->
    <?php
      $current = 'brochure';
      include 'navbar.php';
    ?>
    <!-- End Navbar -->

    <!-- Start Header -->
    <div id="header">
    </div>
    <!-- End Header -->

    <!-- Start Body -->
    <div class="container text-center">
      <img src="img/divider.png" alt="Page Divider" id="divider"/>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-12 body">
          <h2>Gresham Outdoor Public Art Brochure</h2>
          <br>
          <img src="img/brochure/2026-1.jpg" alt="Brochure page showing many pieces of artwork" class="center" id="brochure"/>
          <br>
          <img src="img/brochure/2026-2.jpg" alt="Second brochure page showing many pieces of artwork" class="center" id="brochure"/>
        </div>
      </div><!-- row div close -->
    </div><!-- container div close -->
    <!-- End Body -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->
  </body>
</html>
