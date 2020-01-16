<?php
	$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'mathieu', 'ariane5');
	$suppressionDuPolicier=$baseDeDonnee->prepare('DELETE FROM policier WHERE idCop=?');
	$suppressionDuPolicier->execute(array($_GET['Userid']));
	header('Location:comptePolicierPourAdmin.php');
?>