<?php
	session_start();
	$_SESSION["echec"]=0;
	
	$baseDeDonnee=new PDO('mysql:host=localhost; dbname=APP; charset=utf8','mathieu','ariane5');
	

	$Sexe=1;
	if($_POST['sexe']=="Femme"){
		$Sexe=2;
		//1 pour les hommes
		//2 pour les femmes
		}
		
	$nationalite="France";
	if($_POST['nationalite']=="Maroc"){
			$nationalite="Maroc";
		}
	
	if($_POST["motDePasse1"]==$_POST["motDePasse2"]){
		$tempon=motdepasse($_POST["motDePasse1"]);
		if($tempon==true){
			$tempon2=numeroDeTelephoneValide(htmlspecialchars($_POST['tel']));
			if($tempon2==true){
					$requete=$baseDeDonnee->prepare('INSERT INTO particulier (Lastname, 
					Firstname, Email, Sexe, password, nationalite, pays_residence, adresse, code_postal, telephone)
					VALUES (:Lastname, 
					:Firstname, :Email, :Sexe, :password, :nationalite, :pays_residence, :adresse, :code_postal, :telephone)');
	
					$requete->execute(array(
					'Lastname'=> $_POST['nom'],
					'Firstname'=>$_POST['prenom'],
					'Email'=>$_POST['email'],
					'Sexe'=>$Sexe,
					'password'=>sha1($_POST['motDePasse1']),
					'nationalite'=>$nationalite,
					'pays_residence'=>$_POST['nationalite'],
					'adresse'=>$_POST['adresse' ],
					'code_postal'=>$_POST['codePostal'],
					'telephone'=>$_POST['tel'],
					)
				);
	
			header('Location: connexion_particulier.html');
			}
			else{
				$_SESSION["echec"]=2;
				header('Location: inscriptionEchec.php');
			}

		}
		else{
			//echo "Pour rappel il doit contenir 8 caractere dont une minuscule, un caractere speciale (@-:!&) ou une majuscule, et un chiffre <br>";
			$_SESSION["echec"]=1;
			header('Location: inscriptionEchec.php');
		}
	}
	else{
		header('Location: inscription.html');
	}
	
	
	
	//*****************************
	function motdepasse1($value){
		if (preg_match("#[0-9]#", $value)){
			return true;
		}
		else
		{
			return false;
		}
		}
		
		

	function motdepasse2($value){
		
		if (true==strstr($value,"@") || true==strstr($value,"-") || true==strstr($value,":") || true==strstr($value,"!") || true==strstr($value,"&"))
		{
			return true;
		}
		else{
			return false;
		}
		}
		
	function motdepasse2bis($value){
		if (preg_match("#[A-Z]#", $value)){
			return true;
		}
		else
		{
			return false;
		}
		}
		
	function motdepasse3($value){
		if (preg_match("#[a-z]#", $value)){
			return true;
		}
		else
		{
			return false;
		}
		}
		
		function motdepasse4($value){
			$tmp=strlen($value);
			if($tmp<8){
				return false;
			}
			else{
				return true;
			}
		}
		
		function motdepasse($value){
			$value1=motdepasse1($value);
			$value2=motdepasse2($value);
			$value2bis=motdepasse2bis($value);
			$value3=motdepasse3($value);
			$value4=motdepasse4($value);
			
			if($value1==true && ($value2==true|| $value2bis==true) && $value3==true && $value4==true){
				//echo "mot de passe accepter <br>";
				return true;
			}
			
			else{
				//echo "mot de passe refuser:<br>";
				return false;
			}
		}
		
		function numeroDeTelephoneValide($value){

			if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $value))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
?>