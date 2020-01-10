<?php
	session_start();
	$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'mathieu','ariane5');

	if((isset($_POST['motDePasse']) && isset($_POST['eMail'])) && (!empty($_POST['motDePasse']) && !empty($_POST['eMail']))){
		$req=$baseDeDonnee->prepare("SELECT * FROM particulier WHERE Email=?");
		$req->execute(array($_POST["eMail"]));
		$donnee=$req->fetch();
		/*$motDePasse=$_POST["motDePasse"];
		$motDePasseHache=hash('sha256', $motDePasse);*/
		if($donnee['password']==$_POST["motDePasse"]){
			//echo "Connexion reussie";
			$_SESSION['UserId']=$donnee['Userid'];
			$_SESSION['Lastname']=$donnee['Lastname'];
			$_SESSION['Firstname']=$donnee['Firstname'];
			$_SESSION['Email']=$donnee['Email'];
			$_SESSION['motDePasse']=$donnee['password'];
			$_SESSION['nationalite']=$donnee['nationalite'];
			$_SESSION['pays_residence']=$donnee['pays_residence'];
			$_SESSION['adresse']=$donnee['code_postal'];
			$_SESSION['code_postal']=$donnee['telphone'];
			
			header("Location: lestests.html");
		}
		else{
			//echo "echec";
			header("Location:connexion_particulier.html");
		}
	}
	
	else{
		
	}
?>