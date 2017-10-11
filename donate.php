<!DOCTYPE html>
<html lang="en">
  <?php include 'head.php' ?>
  <body>
    <!-- Start Navbar -->
    <?php
      $current = 'donate';
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
          <p class="text-center">The Gresham Outdoor Public Art committee is currently working on several projects. As you hear about a project you can participate with us by donating money to the fund.<br><br>
          Please mail checks to:<br>
          Gresham Outdoor Public Art<br>
          PO Box 2384<br>
          Gresham, OR  97030<br>
          *We will send you a receipt for tax purposes.<br>
          Our Federal Tax ID # is 59-3781305</p>

          <p class="text-center">Click here to donate online!</p>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd" type="hidden" value="_s-xclick" />
          <input name="hosted_button_id" type="hidden" value="3TGL2FFGWALN6" />
          <input class="center" alt="PayPal - The safer, easier way to pay online!" name="submit" src="http://4.bp.blogspot.com/-dy8ZnOjhB6A/U2KNyoawy1I/AAAAAAAADtA/FEj_8wo4u2g/s1600/PayPal-Donations_Button.png" type="image" />
          </form>
        </div>
      </div><!-- row div close -->
    </div><!-- container div close -->
    <!-- End Body -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->
  </body>
</html>
