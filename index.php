<?php
session_start();

	include 'config/config.php';
	include 'controller/controller.php';

	include 'view/header.php';
?>

<div class="mainContent">

<?php
	include 'view/menu.php';

	$controller = new Controller();
	$controller->invoke($page);
?>
    
</div>

<?php
	include 'view/footer.php';
?>