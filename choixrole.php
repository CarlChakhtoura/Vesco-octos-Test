<?php
	if($_POST["role"]=="particulier"){
		header("Location:connexion_particulier.html");
	}
	else if($_POST["role"]=="policier"){
		header("Location:connexion_policier.html");
	}
	else if($_POST["role"]=="administrateur"){
		header("Location:connexion_administrateur.html");
	}
	else{
		header("Location:choixrole.html");
	}
?>