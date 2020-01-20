<?php
	session_start();
	$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'root','');

	if((isset($_POST['motDePasse']) && isset($_POST['eMail'])) && (!empty($_POST['motDePasse']) && !empty($_POST['eMail']))){
		$req=$baseDeDonnee->prepare("SELECT * FROM policier WHERE emailCop=?");
		$req->execute(array(htmlspecialchars($_POST["eMail"])));
		$donnee=$req->fetch();
		
		if($donnee['password']==sha1(htmlspecialchars($_POST["motDePasse"]))){
			//echo "Connexion reussie";
			$_SESSION['UserId']=$donnee['idCop'];
			$_SESSION['Lastname']=$donnee['lastNameCop'];
			$_SESSION['Firstname']=$donnee['firstNameCop'];
			$_SESSION['Email']=$donnee['emailCop'];
			$_SESSION['motDePasse']=$donnee['password'];			
			$_SESSION['policeStation']=$donnee['policeStation'];
			$_SESSION['telephone']=$donnee['telephoneCop'];
			$_SESSION['certificat']=1;
			
			header("Location:controle.html");
		}
		else{
			//echo "echec";
			header("Location:connexion_policier.html");
		}
	}
	
	else{
		
	}
?>