<?php
//file: view/users/register.php

require_once(__DIR__."/../../core/ViewManager.php");
$view = ViewManager::getInstance();
$errors = $view->getVariable("errors");
$user = $view->getVariable("user");
$view->setVariable("title", "Register");
?>
<div class="principal2">
	<div class="menu">
		<h2><?= i18n("Register")?></h2>
		<form action="index.php?controller=users&amp;action=register" method="POST">
			<input type="text" name="username" value="<?= $user->getUsername() ?>" 
			placeholder="<?= i18n("Username")?>">
	

			<input type="text" name="passwd" value="" 
			placeholder="<?= i18n("Password")?>">
			

			<input type="text" name="email" value="" 
			placeholder="<?= i18n("E-mail")?>">
	

			<input type="text" name="nombre" value="" 
			placeholder="<?= i18n("Nombre")?>">

			<input type="text" name="telefono" value="" 
			placeholder="<?= i18n("Telefono")?>">
			<h4><?= isset($errors["telefono"])?i18n($errors["telefono"]):"" ?>
			<?= isset($errors["nombre"])?i18n($errors["nombre"]):"" ?>
			<?= isset($errors["email"])?i18n($errors["email"]):"" ?>
			<?= isset($errors["passwd"])?i18n($errors["passwd"]):"" ?>
			<?= isset($errors["username"])?i18n($errors["username"]):"" ?>
			</h4>

			<input class="button button1 " type="submit" value="<?= i18n("Register")?>">
		</form>
	</div>
</div>
