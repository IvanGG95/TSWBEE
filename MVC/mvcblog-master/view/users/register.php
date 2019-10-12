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
		<h1><?= i18n("Register")?></h1>
		<form action="index.php?controller=users&amp;action=register" method="POST">
			<?= i18n("Username")?>: <input type="text" name="username"
			value="<?= $user->getUsername() ?>">
			<?= isset($errors["username"])?i18n($errors["username"]):"" ?><br>

			<?= i18n("Password")?>: <input type="text" name="passwd"
			value="">
			<?= isset($errors["passwd"])?i18n($errors["passwd"]):"" ?><br>

			<?= i18n("E-mail")?>: <input type="text" name="email"
			value="">
			<?= isset($errors["email"])?i18n($errors["email"]):"" ?><br>

			<?= i18n("Nombre")?>: <input type="text" name="nombre"
			value="">
			<?= isset($errors["nombre"])?i18n($errors["nombre"]):"" ?><br>

			<?= i18n("Telefono")?>: <input type="text" name="telefono"
			value="">
			<?= isset($errors["telefono"])?i18n($errors["telefono"]):"" ?><br>

			<input class="button button1 " type="submit" value="<?= i18n("Register")?>">
		</form>
	</div>
</div>
