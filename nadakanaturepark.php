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
      $current = 'nadakanaturepark';
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
        <div class="col-lg-10 body text-center">
          <h2>Nadaka Nature Park</h2>
          <br>
          <img src="img/nadaka/sliderside.jpg" alt="Slider, the otter, at Nadaka Nature Park" class="center"/>
          <p>Slider the Otter</p>
          <br>
          <img src="img/nadaka/seeker.jpg" alt="Seeker, the raven, at Nadaka Nature Park" class="center"/>
          <p>Seeker the Raven</p>
          <br>
          <img src="img/nadaka/plaque.png" alt="Plaque for Slider and Seeker" class="center"/>
          <p>Plaque for the sculptures Seeker and Slider</p>
          <br>
          <br>
          <img src="img/nadaka/unveiling.jpg" alt="The unveiling of Slider and Seeker." class="center"/>
          <p>From left to right: Gresham City Councillor David Widmark, Donor Joan Albertson, and Artist Rip Caswell.</p>
          <br>
          <p>These sculptures were made possible by the generous gift of Joan Albertson. She is a long time sponsor of the Nadaka Nature Park. Joan unveiled the Slider and Seeker sculptures on August 12th, 2017 with Rip and David. </p>
          <br>
          <img src="img/nadaka/joanalbertson.jpg" alt="Joan Albertson playing with Slider." class="center"/>
          <p>Joan Albertson playing with Slider.</p>
          <br>
          <img src="img/nadaka/leedayfield.jpg" alt="Lee Dayfield with Slider" class="center"/>
          <p>Lee Dayfield with Slider.</p>
          <br>
          <img src="img/nadaka/chambersfamily.jpg" alt="Vanessa Chambers and her grandchildren with Slider." class="center"/>
          <p>Vanessa Chambers and her grandchildren with Slider.</p>
          <br>
          <img src="img/nadaka/thecrew.jpg" alt="The group that brought all this together." class="center"/>
          <p>This is the great group of people who brought these two statues to Nadaka Nature Park!</p>
          <p>Joan is quoted as saying in an article by Christopher Keizur, "This whole project could not have happened without everyone coming together."</p>
          <p>
            Read more of the original article at: <br>
            <a href="http://portlandtribune.com/go/42-news/369214-251813-nadaka-unveils-nature-statues">http://portlandtribune.com/go/42-news/369214-251813-nadaka-unveils-nature-statues</a>
          </p>
          <p>
            Learn more about Nadaka Nature Park at: <a href="http://friendsofnadaka.org/">http://friendsofnadaka.org/</a><br>
            Location: <a href="https://www.google.com/maps/place/Nadaka+Nature+Park/@45.5273036,-122.4842332,17z/data=!3m1!4b1!4m5!3m4!1s0x5495a242fc2b0739:0x52779ce5a5e064d2!8m2!3d45.5272999!4d-122.4820446">17615 N.E. Glisan Street, Portland, Oregon  97230</a>
          </p>
          <br>
          <h2>Artist: Rip and Chad Caswell</h2>
          <a href="http://www.pamplinmedia.com/go/42-news/370222-253164-family-sculpting"><img src="img/nadaka/ripandchad.jpg" alt="Photo of Rip and Chad Caswell" class="center"/></a>
          <p>Rip gave a great quote in the above mentioned article, "It's an honor to have our art placed in a nature park... I think it's wonderful to bring more art into Gresham."</p>
          <p>Rip and Chad worked together to bring these statues to Nadaka Nature Park. In another article by Keizur, Judy Han had this to say, "It is wonderful having artists like Rip here in the area... The sculptures he and his sons make are beautiful, and our community deserves these nice things."</p>
          <p>Rip enjoys working with his sons and watching them progress. He is proud of every piece they make. "What draws people to the family's work is the emotion they impart onto their subjects. Every piece has a dynamism beneath the surface, looking as if the moments are in action. The trick, according to the artists, is having that same emotion while sculpting. 'If you feel the emotion yourself it will translate through you work,' Chad said."</p>
          <p>
            Read more about Chad and Rip at: <br>
            <a href="http://www.pamplinmedia.com/go/42-news/370222-253164-family-sculpting">http://www.pamplinmedia.com/go/42-news/370222-253164-family-sculpting</a>
          </p>
        </div>
      </div><!-- row div close -->
    </div><!-- container div close -->
    <!-- End Body -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->
  </body>
</html>
