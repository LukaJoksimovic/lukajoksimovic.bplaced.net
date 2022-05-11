
<?php  if (isset($_SESSION['errors'])) : ?>
  <div class="error">
	<?php $errors = $_SESSION['errors']; ?>
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
