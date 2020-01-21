<?php
	$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'mathieu', 'ariane5');
	$demandeDeSuppresion=$baseDeDonnee->prepare('DELETE FROM particulier WHERE UserId=?');
	$demandeDeSuppresion->execute(array($_GET['Userid']));
	header('Location: compteParticulierPourAdmin.php');
?>