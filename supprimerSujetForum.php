<?php
	$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'root', '');
	$suppression=$baseDeDonnee->prepare('DELETE FROM conversation WHERE id=?');
	$suppression->execute(array($_GET['id']));
	header('Location:gestionAdmin.php');
?>