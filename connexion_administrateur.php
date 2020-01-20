<?php
	$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'root','');
	//header("Location:connexion_administrateur.html");
	if((isset($_POST['motDePasse']) && isset($_POST['eMail'])) && (!empty($_POST['motDePasse']) && !empty($_POST['eMail']))){
		$req=$baseDeDonnee->prepare("SELECT emailAdmin, password FROM administrateur WHERE emailAdmin=?");
		$req->execute(array(htmlspecialchars($_POST["eMail"])));
		$donnee=$req->fetch();
		
		if($donnee['password']==$_POST["motDePasse"]){
			//echo "Connexion reussie";
			header("Location:gestionadmin.html");
		}
		else{
			//echo "echec";
			header("Location:connexion_administrateur.html");
		}
		
	}
	//actuellement c'est lui qui bloque****
	else{
		header("Location:connexion_administrateur.html");
	}
	
?>