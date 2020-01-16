<?php
	session_start();
	$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'root','');

	if((isset($_POST['motDePasse']) && isset($_POST['eMail'])) && (!empty($_POST['motDePasse']) && !empty($_POST['eMail']))){
		$req=$baseDeDonnee->prepare("SELECT * FROM particulier WHERE Email=?");
		$req->execute(array(htmlspecialchars($_POST["eMail"])));
		$donnee=$req->fetch();
		
		$motDePassePourEdition=htmlspecialchars($_POST["motDePasse"]);
		/*$motDePasse=$_POST["motDePasse"];
		$motDePasseHache=hash('sha256', $motDePasse);*/
		if($donnee['password']==sha1(htmlspecialchars($_POST["motDePasse"]))){
			//echo "Connexion reussie";
			$_SESSION['UserId']=$donnee['Userid'];
			$_SESSION['Lastname']=$donnee['Lastname'];
			$_SESSION['Firstname']=$donnee['Firstname'];
			$_SESSION['Email']=$donnee['Email'];
			$_SESSION['motDePasse']=$motDePassePourEdition;
			$_SESSION['sexe']=$donnee['Sexe'];//*************
			$_SESSION['nationalite']=$donnee['nationalite'];
			$_SESSION['pays_residence']=$donnee['pays_residence'];
			$_SESSION['code_postal']=$donnee['code_postal'];
			$_SESSION['adresse']=$donnee['adresse'];
			$_SESSION['telephone']=$donnee['telephone'];
			
			header("Location: bravo.php");
		}
		else{
			//echo "echec";
			header("Location:connexion_particulier.html");
		}
	}
	
	else{
		
	}
?>