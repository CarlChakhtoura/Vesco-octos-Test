<?php
	session_start();

	if($_POST['motDePasse1']==$_POST['motDePasse2']){
		$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'root','');
		$placement=$baseDeDonnee->prepare("UPDATE  particulier SET Lastname= :nLastname, Firstname= :nFirstname, Email= :nEmail, password= :npassword, Sexe= :nSexe, nationalite= :nnationalite, pays_residence= :npays_residence, adresse= :nadresse, code_postal= :ncode_postal  WHERE Userid=".$_SESSION['UserId']."");
	
		
		
		$placement->execute(array(
			'nLastname'=> $_POST['nom'],
			'nFirstname'=> $_POST['prenom'],
			'nEmail'=> sha1($_POST['motDePasse1']),
			'npassword'=> $_POST['email'],
			'nSexe'=> $_POST['sexe'],
			'nnationalite'=>$_POST['nationalite'],
			'npays_residence'=>$_POST['paysResidence'], 
			'nadresse'=>$_POST['adresse'] , 
			'ncode_postal'=>$_POST['codePostal'] 
			));
		header('Location: profilePolicier.php?cert=5');
	}
	
	
	
?>
