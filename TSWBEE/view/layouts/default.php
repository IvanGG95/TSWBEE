<?php
//file: view/layouts/default.php

$view = ViewManager::getInstance();
$currentuser = $view->getVariable("currentusername");
?><!DOCTYPE html>
<html>
<head>
	<title>IDriBEE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.css">
	<!-- enable ji18n() javascript function to translate inside your scripts -->
	<script src="index.php?controller=language&amp;action=i18njs">
	</script>
	<?= $view->getFragment("css") ?>
	<?= $view->getFragment("javascript") ?>
</head>
<body>
	<!-- header -->
	<header>


			<nav class="navbar navbar-dark bg-dark text-light">
				<a class="navbar-brand" href="index.php?controller=files&amp;action=index">
  					<img src="icon/bee_icon.png" height="50" width="50" >IDriBEE
  				</a>
			  
			  <form class="form-inline">
			  	<select class="selectpicker show-tick">
  <option >Español</option>
  <option >English</option>

</select>
			  	<div class="mr-5"><?=$_SESSION["currentuser"]?></div>
					<a 	href="index.php?controller=users&amp;action=logout">
			    <img src="icon/out.png" height="27" width="27">
					</a>
			  </form>
			</nav>


	</header>

	<main>
		<div id="flash">
			<?= $view->popFlash() ?>
		</div>

		<?= $view->getFragment(ViewManager::DEFAULT_FRAGMENT) ?>
	</main>



</body>
</html>
