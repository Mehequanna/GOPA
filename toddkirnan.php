<!DOCTYPE html>
<html lang="en">
  <?php include 'head.php' ?>
  <body>
    <!-- Start Navbar -->
    <?php
      $current = 'toddkirnan';
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
          <h2>Interview with Todd Kirnan!</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/Dtvc1mRytSw" frameborder="0" allowfullscreen class="center"></iframe>
          <br>
          <p>KXL interviews Todd Kirnan about his upcoming event and statue unveiling.</p>
        </div>
      </div><!-- row div close -->

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
          <p>Gresham Outdoor Public Art<br>
          PO Box 2384<br>
          Gresham, OR  97030<br>
          *We will send you a receipt for tax purposes.<br>
          Our Federal Tax ID # is 59-3781305</p>
        </div>
      </div><!-- row div close -->
    </div><!-- container div close -->
    <!-- End Body -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->
  </body>
</html>
