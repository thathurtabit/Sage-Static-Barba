<?php
// NOTE: You'll need to change this on the live server, don't add trailing slash "/"

$root = "http://localhost:3000/blank-space";

?>


<nav class="navbar navbar-toggleable-sm fixed-top navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar"></span>
  </button>
  <a class="navbar-brand nav-link" href="<?php echo $root ?>" title="<?php echo $websiteName; ?>"><h1><?php echo $websiteName; ?></h1></a>

  <div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav">
      <li class="nav-item nav-about">
        <a class="nav-link" href="<?php echo $root ?>/about.php" title="About">About</a>
      </li>
      <li class="nav-item nav-contact">
        <a class="nav-link" href="<?php echo $root ?>/contact.php" title="Contact">Contact</a>
      </li>
      
    </ul>
  </div>
</nav>