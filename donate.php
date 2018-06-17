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
    <div class="container text-center">
      <img src="img/divider.png" alt="Page Divider" id="divider"/>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 body">
          <h2>Todd Kirnan's Statue Fundraiser</h2>
          <p>We are currently holding a fundraiser to commission a statue of our friend Todd. To learn more about his story, see this article from the Gresham Outlook!</p>
          <h4><a href="https://pamplinmedia.com/go/44-features/393479-286300-mr-gresham-todd-kirnan-is-one-of-regions-extraordinary-citizens" target="blank">Click here to read Gresham Outlook's article about Todd Kirnan.</a></h4>
          <br>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="KRVHNN6LSGA7L">
            <input type="image" src="img/todd_donate.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" class="center" id="donate-todd">
            <img alt="Todd's Donation Button" border="0" src="img/todd_donate.jpg" width="1" height="1">
          </form>
          <br>
          <p>If you would like to make a check out instead, please use the address below and write, "For Todd's statue" in the note section.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 body">
          <h2>For all other donations to Gresham Outdoor Public Art:</h2>
          <p>The Gresham Outdoor Public Art committee is currently working on several projects. As you hear about a project you can participate with us by donating money to the fund.<br><br>
          Please mail checks to:<br>
          Gresham Outdoor Public Art<br>
          PO Box 2384<br>
          Gresham, OR  97030<br>
          *We will send you a receipt for tax purposes.<br>
          Our Federal Tax ID # is 59-3781305</p>

          <p>Click here to donate online!</p>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input name="cmd" type="hidden" value="_s-xclick" />
            <input name="hosted_button_id" type="hidden" value="3TGL2FFGWALN6" />
            <input class="center" alt="PayPal - The safer, easier way to pay online!" name="submit" src="http://4.bp.blogspot.com/-dy8ZnOjhB6A/U2KNyoawy1I/AAAAAAAADtA/FEj_8wo4u2g/s1600/PayPal-Donations_Button.png" type="image" class="center" id="donate-normal"/>
          </form>
          <br>
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
