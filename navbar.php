<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" id="icon"><img src="img/icon.png" alt="GOPA Icon" /></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if($current == 'home') {echo 'class="active"';} ?>><a href="index.php">Home</a></li>
        <li <?php if($current == 'about') {echo 'class="active"';} ?>><a href="about.php">About Us</a></li>
        <li <?php if($current == 'committee') {echo 'class="active"';} ?>><a href="committee.php">Committee</a></li>
        <li <?php if($current == 'contact') {echo 'class="active"';} ?>><a href="contact.php">Contact Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li <?php if($current == 'bikerack') {echo 'class="active"';} ?>><a href="bikerack.php">Vintage Style Bike Racks</a></li>
            <li <?php if($current == 'blue') {echo 'class="active"';} ?>><a href="blue.php">Blue</a></li>
            <li <?php if($current == 'berryharvest') {echo 'class="active"';} ?>><a href="berryharvest.php">Berry Harvest Mural</a></li>
            <li <?php if($current == 'nadakanaturepark') {echo 'class="active"';} ?>><a href="nadakanaturepark.php">Nadaka Nature Park</a></li>
            <li <?php if($current == 'driscoll') {echo 'class="active"';} ?>><a href="driscoll.php">Driscoll</a></li>
            <li <?php if($current == 'mural') {echo 'class="active"';} ?>><a href="mural.php">Main Street Mural</a></li>
            <li <?php if($current == 'crash') {echo 'class="active"';} ?>><a href="crash.php">Crash</a></li>
            <li <?php if($current == 'familyties') {echo 'class="active"';} ?>><a href="familyties.php">Family Ties</a></li>
            <li role="separator" class="divider"></li>
            <li <?php if($current == 'whatsnew') {echo 'class="active"';} ?>><a href="whatsnewwithgopa.php">What's new with GOPA?</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li <?php if($current == 'donate') {echo 'class="active"';} ?>><a href="donate.php" id="donate">Donate!</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
