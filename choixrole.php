<?php
	if($_POST["role"]=="particulier"){
		header("Location:connexion_particulier.php");
	}
	else if($_POST["role"]=="policier"){
		header("Location:connexion_policier.php");
	}
	else if($_POST["role"]=="administrateur"){
		header("Location:connexion_administrateur.php");
	}
	else{
		header("Location:choixrole.html");
	}
?>