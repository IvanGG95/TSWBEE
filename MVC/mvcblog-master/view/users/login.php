<?php
//file: view/users/login.php

require_once(__DIR__."/../../core/ViewManager.php");
$view = ViewManager::getInstance();
$view->setVariable("title", "Login");
$errors = $view->getVariable("errors");
?>

<div class="principal">
	<div class="menu">
		<h2><?= i18n("Login") ?></h2>
		<form action="index.php?controller=users&amp;action=login" method="POST">
			 <input type="text" name="username" placeholder="<?= i18n("Username")?>">
			 <input type="text" name="passwd" placeholder="<?= i18n("Password")?>">
			 <h4><?= isset($errors["general"])?$errors["general"]:"" ?></h4>
			<div class="color">
				<button class="button button1"><a href="index.php?controller=users&amp;action=register"><?= i18n("Crear cuenta")?></a></button>
				<input class="button button1 " type="submit" value="<?= i18n("Login") ?>">
			</div>
		</form>

		
		<?php $view->moveToFragment("css");?>
		<link rel="stylesheet" type="text/css" src="css/style2.css">
		<?php $view->moveToDefaultFragment(); ?>
	</div>
</div>
