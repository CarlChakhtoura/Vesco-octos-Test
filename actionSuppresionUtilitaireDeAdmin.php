<?php
	$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'root', '');
	$demandeDeSuppresion=$baseDeDonnee->prepare('DELETE FROM particulier WHERE UserId=?');
	$demandeDeSuppresion->execute(array($_GET['Userid']));
	header('Location: compteParticulierAdmin.php');
?>