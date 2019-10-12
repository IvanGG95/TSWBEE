<?php
//file: view/layouts/default.php

$view = ViewManager::getInstance();
$currentuser = $view->getVariable("currentusername");

?><!DOCTYPE html>
<html>
<head>
	<title><?= $view->getVariable("title", "no title") ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
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
			  <a class="navbar-brand">IDriBEE</a>

			  <form class="form-inline">
			  	<div class="mr-5"><a 	href="index.php?controller=users&amp;action=logout">(User)</a></div>
			    <img src="icon/out.png" height="27" width="27">
			  </form>
			</nav>

		
	</header>

	<main>
		<div id="flash">
			<?= $view->popFlash() ?>
		</div>

		<?= $view->getFragment(ViewManager::DEFAULT_FRAGMENT) ?>
	</main>

	<footer>
		<?php
		include(__DIR__."/language_select_element.php");
		?>
	</footer>

</body>
</html>
