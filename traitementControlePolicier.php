<?php
	session_start();
	$_SESSION["echecDuTraitement"]=0;
	
	$bdd=new PDO('mysql:host=localhost; dbname=APP; charset=utf8','root','');
	
	$requete=$bdd->prepare('INSERT INTO testpolicier (lastnameCop, 
					firstNameCop, lastNameChecked, firstNameChecked, dateDuTest, lieuDuTest)
					VALUES (:nlastnameCop,:nfirstNameCop,:nlastNameChecked,:nfirstNameChecked,:ndateDuTest,:nlieuDuTest)');
	
	$requete->execute(array(
	'nlastnameCop'=>$_POST["nomDuPolicier"],
	'nfirstNameCop'=>$_POST["prenomDuPolicier"],
	'nlastNameChecked'=>$_POST["nomSuspect"],
	'nfirstNameChecked'=>$_POST["prenomSuspect"],
	'ndateDuTest'=>$_POST["datel"],
	'nlieuDuTest'=>$_POST["lieu"]
	));
	
	header('Location: lestestsPolicier.php?cert=5');
?>