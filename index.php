<!DOCTYPE html>
<html lang="en">
  <?php include 'head.php' ?>

  <!-- Time to automactically hide event. -->
  <style>
    #event {
      <?php
        date_default_timezone_set('America/Los_Angeles');
        if (new DateTime() > new DateTime("2019-08-01 16:00:00")) {
            echo 'display:none';
        }
      ?>
    }
  </style>

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
          <img src="img/artsfestival2019.jpg" alt="Gresham Arts Festival July 19th & 20th, 2019" id="event-photo" />
          <br>
        </div>
        <div class="col-md-2"></div>
      </div><!-- End Events Section -->
      <img src="img/divider.png" alt="Page Divider" id="divider"/>
      <!-- Projects Section-->
      <div class="row">
        <div class="col-md-4 text-center">
          <img src="img/communityhotlinejune2019.png" alt="Photo of Judy on Community Hotline" />
          <h2>What's new <br>with GOPA?</h2>
          <h3>Updated: 7/6/2019</h3>
          <br>
          <br>
          <br>
          <br>
          <br>
          <a href="whatsnewwithgopa.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/littlelibrary/children-next-to-library.jpg" alt="Children with books next to the little library" />
          <h2>Little Library</h2>
          <h3>by Mark Klobas</h3>
          <br>
          <br>
          <br>
          <br>
          <br>
          <a href="littlelibrary.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/sunday/sunday-small.jpg" alt="Statue of Sunday couple in front of the Carnegie Library." />
          <h2>Sunday at the Carnegie</h2>
          <h3>by Heather Greene</h3>
          <br>
          <br>
          <br>
          <br>
          <br>
          <a href="sundayatthecarnegie.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/blessournest/nestjudylynn.jpg" alt="Judy and Lynn with Bless Our Nest statue" />
          <h2>Bless Our Nest</h2>
          <h3>by Heather Greene</h3>
          <br>
          <a href="blessournest.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/imagine/glassart.jpg" alt="Glass fixtures" />
          <h2>Imagine</h2>
          <h3>by Jen Fuller</h3>
          <br>
          <a href="imagine.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/teddybear/everyone.jpg" alt="Everyone surrounding the Teddy Bear" />
          <h2>Teddy Bear</h2>
          <h3>by Chad Caswell</h3>
          <br>
          <br>
          <br>
          <br>
          <br>
          <a href="teddybear.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/todd_alone.jpg" alt="Photo of Todd Kirnan posing." />
          <h2>Todd Kirnan's Statue</h2>
          <h3>by Heather Greene</h3>
          <br>
          <a href="toddkirnan.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/bikeracks/bikerack.jpg" alt="Bike Racks in Downtown Gresham" />
          <h2>Vintage Style<br>Bike Racks</h2>
          <h3>by Tim Foertsch</h3>
          <br>
          <br>
          <a href="bikerack.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/blue/blue-small.jpg" alt="Blue Heron Sculpture" />
          <h2>Blue</h2>
          <h3>by Heather Greene</h3>
          <br>
          <a href="blue.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/harvestmural/berryharvestmural.jpg" alt="Finished Berry Harvest Mural" />
          <h2>Berry Harvest Mural</h2>
          <h3>by Don Gray</h3>
          <br>
          <br>
          <br>
          <br>
          <br>
          <a href="berryharvest.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/nadaka/nadakapark.jpg" alt="Nadaka Nature Park Postcard" />
          <h2>Nadaka Nature Park</h2>
          <h3>Slider the Otter &amp;
          <br>Seeker the Raven
          </h3>
          <a href="nadakanaturepark.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/driscoll.jpg" alt="Driscoll in Downtown Gresham" />
          <h2>Driscoll</h2>
          <h3>by Heather Greene</h3>
          <br>
          <a href="driscoll.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/mural.jpg" alt="Photo of Mural on Main Street" />
          <h2>Main Street Mural</h2>
          <h3>by Don Gray</h3>
          <br>
          <br>
          <br>
          <br>
          <a href="mural.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/crash.jpg" alt="Crash Statue in Downtown Gresham" />
          <h2>Crash</h2>
          <h3>by Michael DeSimone</h3>
          <br>
          <br>
          <br>
          <br>
          <a href="crash.php" class="btn btn-primary">Read More</a>
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
          <a href="familyties.php" class="btn btn-primary">Read More</a>
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
