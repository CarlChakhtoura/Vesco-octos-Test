<?php
	session_start();

	if($_POST['motDePasse1']==$_POST['motDePasse2']){
		$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'mathieu','ariane5');
		$placement=$baseDeDonnee->prepare("UPDATE  particulier SET Lastname= :nLastname, Firstname= :nFirstname, Email= :nEmail, password= :npassword, Sexe= :nSexe, nationalite= :nnationalite, pays_residence= :npays_residence, adresse= :nadresse, code_postal= :ncode_postal  WHERE Userid=".$_SESSION['UserId']."");
				
		$placement->execute(array(
			'nLastname'=> cryptageDuNom($_POST['nom']),
			'nFirstname'=> cryptageDuNom($_POST['prenom']),
			'nEmail'=> sha1($_POST['motDePasse1']),
			'npassword'=> $_POST['email'],
			'nSexe'=> $_POST['sexe'],
			'nnationalite'=>$_POST['nationalite'],
			'npays_residence'=> cryptageDeLAdresse($_POST['paysResidence']), 
			'nadresse'=>$_POST['adresse'] , 
			'ncode_postal'=>$_POST['codePostal'] 
			));
		header('Location: profile.php?cert=5');
	}
	else{
		header('Location: editprofile.php?cert=5');
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
