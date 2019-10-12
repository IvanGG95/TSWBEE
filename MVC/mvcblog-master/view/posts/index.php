<?php
//file: view/posts/index.php

require_once(__DIR__."/../../core/ViewManager.php");
$view = ViewManager::getInstance();

$posts = $view->getVariable("posts");
$currentuser = $view->getVariable("currentusername");

$view->setVariable("title", "Posts");
?>

<head>
<title>IDriBEE</title>
<link rel="stylesheet" href="style.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
	<div class="section">
		<div class="container">
			<div class="row border-bottom mt-5">
				<h3 class="col-9">Raiz/Carpeta</h3>
				<div class="btn-group mb-1 mt-1" role="group" aria-label="Basic example">
	  				<button type="button" class="btn"><img src="icon/add.png" height="24" width="24"></button>
	  				<button type="button" class="btn"><img src="icon/upload.png" height="24" width="24"></button>
	  				<button type="button" class="btn"><img src="icon/delete.png" height="24" width="24"></button>
	  				<button type="button" class="btn"><img src="icon/share.png" height="24" width="24"></button>
	  				<button type="button" class="btn"><img src="icon/download.png" height="24" width="24"></button>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2 mt-5 text-center">
					<img src="icon/file.png" height="75" width="75">
					<p>file 1</p>
				</div>
				<div class="col-sm-2 mt-5 text-center">
					<img src="icon/file.png" height="75" width="75">
					<p>file 2</p>
				</div>
				<div class="col-sm-2 mt-5 text-center">
					<img src="icon/file.png" height="75" width="75">
					<p>file 3</p>
				</div>
				<div class="col-sm-2 mt-5 text-center">
					<img src="icon/file.png" height="75" width="75">
					<p>file 4</p>
				</div>
				<div class="col-sm-2 mt-5 text-center">
					<img src="icon/file.png" height="75" width="75">
					<p>file 5</p>
				</div>
				<div class="col-sm-2 mt-5 text-center">
					<img src="icon/file.png" height="75" width="75">
					<p>file 6</p>
				</div>
				<div class="col-sm-2 mt-5 text-center">
					<img src="icon/file.png" height="75" width="75">
					<p>file 7</p>
				</div>
				<div class="col-sm-2 mt-5 text-center">
					<img src="icon/file.png" height="75" width="75">
					<p>file 8</p>
				</div>
			</div>
		</div>
	</div>
	<p></p>
<?php
/*

?><h1><?=i18n("Posts")?></h1>


<table border="1">
	<tr>
		<th><?= i18n("Title")?></th><th><?= i18n("Author")?></th><th><?= i18n("Actions")?></th>
	</tr>

	<?php foreach ($posts as $post): ?>
		<tr>
			<td>
				<a href="index.php?controller=posts&amp;action=view&amp;id=<?= $post->getId() ?>"><?= htmlentities($post->getTitle()) ?></a>
			</td>
			<td>
				<?= $post->getAuthor()->getUsername() ?>
			</td>
			<td>
				<?php
				//show actions ONLY for the author of the post (if logged)


				if (isset($currentuser) && $currentuser == $post->getAuthor()->getUsername()): ?>

				<?php
				// 'Delete Button': show it as a link, but do POST in order to preserve
				// the good semantic of HTTP
				?>
				<form
				method="POST"
				action="index.php?controller=posts&amp;action=delete"
				id="delete_post_<?= $post->getId(); ?>"
				style="display: inline"
				>

				<input type="hidden" name="id" value="<?= $post->getId() ?>">

				<a href="#"
				onclick="
				if (confirm('<?= i18n("are you sure?")?>')) {
					document.getElementById('delete_post_<?= $post->getId() ?>').submit()
				}"
				><?= i18n("Delete") ?></a>

			</form>

			&nbsp;

			<?php
			// 'Edit Button'
			?>
			<a href="index.php?controller=posts&amp;action=edit&amp;id=<?= $post->getId() ?>"><?= i18n("Edit") ?></a>

		<?php endif; ?>

	</td>
</tr>
<?php endforeach; ?>

</table>
<?php if (isset($currentuser)): ?>
	<a href="index.php?controller=posts&amp;action=add"><?= i18n("Create post") ?></a>
<?php endif; ?>
?>*/
