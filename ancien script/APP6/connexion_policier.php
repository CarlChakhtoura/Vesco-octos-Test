<?php
	session_start();
	$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'mathieu','ariane5');

	if((isset($_POST['motDePasse']) && isset($_POST['eMail'])) && (!empty($_POST['motDePasse']) && !empty($_POST['eMail']))){
		$req=$baseDeDonnee->prepare("SELECT * FROM policier WHERE emailCop=?");
		$req->execute(array(htmlspecialchars($_POST["eMail"])));
		$donnee=$req->fetch();
		
		if($donnee['password']==sha1(htmlspecialchars($_POST["motDePasse"]))){
			//echo "Connexion reussie";
			$_SESSION['UserId']=$donnee['idCop'];
			$_SESSION['lastNameCop']=$donnee['lastNameCop'];
			$_SESSION['firstNameCop']=$donnee['firstNameCop'];
			$_SESSION['emailCop']=$donnee['emailCop'];
			$_SESSION['password']=$_POST["motDePasse"];			
			$_SESSION['policeStation']=$donnee['policeStation'];
			$_SESSION['telephoneCop']=$donnee['telephoneCop'];
			
			header("Location:controlePolicier.php?cert=5");
		}
		else{
			//echo "echec";
			header("Location:connexion_policier.html");
		}
	}
	
	else{
		
	}
?>