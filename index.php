<?php

// HEADER
$pageName = 'My Page Title |';
$myPath = '';

include_once('dist/includes/head.inc.php'); ?>
<?php include_once('dist/includes/nav.inc.php'); ?>

  <div id="barba-wrapper">
    <div class="barba-container">
      <ul id="sub-nav" class="nav flex-column" role="tablist">
        <li class="nav-item"><a href="#panel-info1" class="nav-link scroll-to">Panel 1</a></li>
        <li class="nav-item"><a href="#panel-info2" class="nav-link scroll-to">Panel 2</a></li>
        <li class="nav-item"><a href="#panel-info3" class="nav-link scroll-to">Panel 3</a></li>
      </ul>

		<div id="panel-info1" class="full-panel panel--info1">
			<h1>My Home Page</h1>
		</div>
		<div id="panel-info2" class="full-panel panel--info2">
			<h2>Details</h2>
		</div>
		<div id="panel-info3" class="full-panel panel--info3">
          	<h2>Section #3</h2>
        </div>
		<?php include_once('dist/includes/loader.inc.php'); ?>
    </div>
  </div>
      
<?php include_once('dist/includes/footer.inc.php'); ?>