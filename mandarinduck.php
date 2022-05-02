<!DOCTYPE html>
<html lang="en">
  <?php include 'head.php' ?>
  <body>
    <!-- Start Navbar -->
    <?php
      $current = 'mandarinduck';
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
          <h2 class="text-center">Mandarin Duck</h2>
          <br>
          <img src="img/mandarinduck.jpg" alt="Statue of a mandarin duck" class="center"/>
          <p class="text-center"><strong>In loving Memory of<br> Steve Terrill 1952-2021</strong></p>
          <p class="text-center">Donated by David & Kendra Baumann & Family</p>
          <p class="text-center">Artist Rip Caswell</p>
          <br>
          <br>
        </div>
      </div><!-- row div close -->
    </div><!-- container div close -->
    <!-- End Body -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->
  </body>
</html>
