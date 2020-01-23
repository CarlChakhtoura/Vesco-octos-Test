<?php
	$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'root', '');
	$suppressionDuPolicier=$baseDeDonnee->prepare('DELETE FROM policier WHERE idCop=?');
	$suppressionDuPolicier->execute(array($_GET['Userid']));
	header('Location:comptePolicierAdmin.php');
?>