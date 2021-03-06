<?php<?php
	$baseDeDonnee=new PDO('mysql:host=localhost; dbname=APP; charset=utf8','root','');
	
	
	if(isset($_POST['Inscription'])){
		$a=htmlspecialchars($_POST["motDePasse1"]);
		$vrai=motdepasse($a);
		$num=numeroDeTelephoneValide($_POST['telephone']);
		if($vrai==true && $num==true){
			$requete=$baseDeDonnee->prepare('INSERT INTO policier(lastNameCop,firstNameCop,password,emailCop,telephoneCop,policeStation) VALUES (:Lastname,:Firstname,:password,:email, :telephone, :policeStation)');
		
			$requete->execute(array(
				'Lastname'=>cryptageDuNom(htmlspecialchars($_POST['nom'])),
				'Firstname'=>cryptageDuNom(htmlspecialchars($_POST['prenom'])),
				'password'=>sha1($a),
				'email'=>htmlspecialchars($_POST['email']),
				'policeStation'=>cryptageDeLAdresse(htmlspecialchars($_POST['policeStation'])),
				'telephone'=>htmlspecialchars($_POST['telephone']),
			
			));
			header("Location: gestionAdmin.php");
		}
		else{
			header("Location:inscriptionPolicierAdmin.php");
		}
	}
	
	else{
		header("Location:inscriptionPolicierAdmin.php");	
	}
	
	
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
		
		function cryptageDeLAdresse($motAConvertir){
			$monArray=array();
			for( $i=0; $i<strlen($motAConvertir);$i++){
				//derniers caracat
				if(ord($motAConvertir[$i])==118){
					array_push($monArray,97);//on met un a minuscule si on a v
				}
				else if(ord($motAConvertir[$i])==119){
					array_push($monArray,98);
				}
				else if(ord($motAConvertir[$i])==120){
					array_push($monArray,99);
				}
				else if(ord($motAConvertir[$i])==121){
					array_push($monArray,100);
				}
				else if(ord($motAConvertir[$i])==122){
					array_push($monArray,101);
				}
				else if(ord($motAConvertir[$i])==86){//on met un A maj en cas de V maj
					array_push($monArray,65);
				}
				else if(ord($motAConvertir[$i])==87){
					array_push($monArray,66);
				}
				else if(ord($motAConvertir[$i])==88){
					array_push($monArray,67);
				}
				else if(ord($motAConvertir[$i])==89){
					array_push($monArray,68);
				}
				else if(ord($motAConvertir[$i])==90){
					array_push($monArray,69);
				}
				else if(ord($motAConvertir[$i])==37){
					array_push($monArray,32);
				}
				else{
					array_push($monArray,ord($motAConvertir[$i])+5);
				}
			}
			//maintenant on veut creer un string
			$mot="";
			$mot="";
			for($j=0;$j<strlen($motAConvertir);$j++){
				$mot=$mot.chr($monArray[$j]);
			}
			return $mot;
		}
		
		function cryptageDuNom($motAConvertir){
			$monArray=array();
			for( $i=0; $i<strlen($motAConvertir);$i++){
				if(ord($motAConvertir[$i])==120){
					array_push($monArray,97);//on met un a minuscule si on a v
				}
				else if(ord($motAConvertir[$i])==121){
					array_push($monArray,98);
				}
				else if(ord($motAConvertir[$i])==122){
					array_push($monArray,99);
				}
				else if(ord($motAConvertir[$i])==88){//on met un A maj en cas de V maj
					array_push($monArray,65);
				}
				else if(ord($motAConvertir[$i])==89){
					array_push($monArray,66);
				}
				else if(ord($motAConvertir[$i])==35){
					array_push($monArray,32);
				}
				else{
					array_push($monArray,ord($motAConvertir[$i])+3);
				}
			}
			$mot="";
			$mot="";
			for($j=0;$j<strlen($motAConvertir);$j++){
				$mot=$mot.chr($monArray[$j]);
			}
			return $mot;
		}
?>