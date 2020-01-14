<!DOCTYPE html>
<?php session_start();
	if(is_null($_SESSION['certificat'])==true){
		header("Location: connexion_particulier.html");
	}
?>
<html>
	<head>
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/editprofile.css" >
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ability Test </title>
	</head>

	<body>
		<?php
			if(isset($_GET["cert"])==false || $_GET["cert"]!=5){
			}
			else{
		?>
			<div class="header">
				<div class="elementsduheader">
					<span class="open-slide">
						      <a href="#" onclick="openSlideMenu()">
						        <svg width="30" height="30">
						            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
						            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
						            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
						        </svg>
						      </a>
						    </span>
					<div class="contenudulogo">
						<h1>ABILITY TEST</h1>
					</div>
				</div>
			</div>

			<div class="contenusite">
				<h2>Edition profil<h2>
				<div class="card">
			        <div class="card-header">
			            <img src="" alt="Profile Image" class="profile-img">
			        </div>
			        <div class="card-body">
					<form method="POST" action="siteProfileModification.php">
						<label>Nom</label><input type="text" name="nom" value="<?php echo decryptageDuNom($_SESSION['Lastname']); ?>"/><br>
						<label>Prenom</label><input type="text" name="prenom" value="<?php echo decryptageDuNom($_SESSION['Firstname']); ?>" /><br>
						<label>Mot de Passe</label><input type="password" name="motDePasse1" value="<?php echo $_SESSION['motDePasse']; ?>" /><br>
						<label>Confirmation du mot de passe</label><input type="password" name="motDePasse2" value="<?php echo $_SESSION['motDePasse']; ?>" /><br>
						<label>Email</label><input type="text" name="email" value="<?php echo $_SESSION['Email']; ?>"/><br>
						<label>Telephone </label><input type="text" name="telephone" value="<?php echo $_SESSION['telephone']; ?>"/><br>
						<label>Sexe </label>
						<?php
							if($_SESSION['sexe']==1){
								?>
							<select name="sexe">
									<option value="male" selected>Homme</option>
								<option value="female">Femme</option>
							</select>
							<br>
						<?php	}
							else{
								?>
							<select name="sexe">
									<option value="male" selected>Homme</option>
								<option value="female">Femme</option>
							</select>
							<br>
						<?php
							}
						?>
						
						<label>Nationalite</label>
						<?php
							if($_SESSION['nationalite']=="France"){
								?>
							<select name="nationalite">
									<option value="male" selected>France</option>
								<option value="female">Maroc</option>
							</select>
							<br>
						<?php	}
							else{
								?>
							<select name="nationalite">
									<option value="male" selected>Maroc</option>
								<option value="female">France</option>
							</select>
							<br>
						<?php
							}
						?>
						
						<label>Pays de residence</label>
						<?php
							$paysResidence=decryptageDeLAdresse($_SESSION['pays_residence']);
							if($paysResidence=="France"){
								?>
							<select name="paysResidence">
									<option value="male" selected>France</option>
								<option value="female">Maroc</option>
							</select>
							<br>
						<?php	}
							else{
								?>
							<select name="paysResidence">
									<option value="male" selected>Maroc</option>
								<option value="female">France</option>
							</select>
							<br>
						<?php
							}
						?>
						<br>
						<label>Adresse</label><textarea class="textarea" name="adresse"><?php echo $_SESSION['adresse']; ?>></textarea><br>
						<label>Code Postal</label><input type="text" name="codePostal" value="<?php echo $_SESSION['code_postal']; ?>"/><br>
						<input type="Submit" value="Confirmer"/>
					</form>
			            <div class="col">
			               <a href="accueil.php?cert=5">Retour à l'accueil</a>
			            </div>
			        </div>
			    </div>
			</div>

			<div id="side-menu" class="side-nav">
			    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
			    <a href="controle.php?cert=5">Controle</a>
			    <a href="lestests.php?cert=5">Test</a>
			    <a href="resultats.php?cert=5">Resultats</a>
			    <a href="statistiques.php?cert=5">Statistiques</a>
			    <a href="sujetsforum.php?cert=5">Forum</a>
			    <a href="faq.php?cert=5">F.A.Q</a>
			    <a href="editprofile.php?cert=5">Mon Profil</a>
			  </div>

			  <script>
			    function openSlideMenu(){
			      document.getElementById('side-menu').style.width = '250px';
			      document.getElementById('main').style.marginLeft = '250px';
			    }

			    function closeSlideMenu(){
			      document.getElementById('side-menu').style.width = '0';
			      document.getElementById('main').style.marginLeft = '0';
			    }
			  </script>

			<div class="footer">
				<div class="contain">
				  <div class="col">
				    <h1>Support</h1>
				    <ul>
				      <li>Contactez-nous</li>
				      <li>Contenu1</li>
				      <li>Contenu2</li>
				    </ul>
				  </div>
				  <div class="col social">
				    <h1>Suivez nous</h1>
				    <ul>
				      <li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></li>
				    </ul>
				  </div>
				<div class="clearfix"></div>
			</div>
		</div>
		<?php 
			}
		?>
	</body>
	<?php //************************************?>
	
	
	
	<?php
	function decryptageDeLAdresse($motAConvertir){
			$monArray=array();
			for( $i=0; $i<strlen($motAConvertir);$i++){
				//derniers caracat
				if(ord($motAConvertir[$i])==97){
					array_push($monArray,122);//on met un a minuscule si on a v
				}
				else if(ord($motAConvertir[$i])==98){
					array_push($monArray,121);
				}
				else if(ord($motAConvertir[$i])==99){
					array_push($monArray,120);
				}
				else if(ord($motAConvertir[$i])==100){
					array_push($monArray,119);
				}
				else if(ord($motAConvertir[$i])==101){
					array_push($monArray,118);
				}
				else if(ord($motAConvertir[$i])==65){//on met un A maj en cas de V maj
					array_push($monArray,90);
				}
				else if(ord($motAConvertir[$i])==66){
					array_push($monArray,89);
				}
				else if(ord($motAConvertir[$i])==67){
					array_push($monArray,88);
				}
				else if(ord($motAConvertir[$i])==68){
					array_push($monArray,87);
				}
				else if(ord($motAConvertir[$i])==69){
					array_push($monArray,86);
				}
				else if(ord($motAConvertir[$i])==37){//cas de l espace
					array_push($monArray,37);
				}
				else{
					array_push($monArray,ord($motAConvertir[$i])-5);
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
	
	
	function decryptageDuNom($motAConvertir){
			$monArray=array();
			for( $i=0; $i<strlen($motAConvertir);$i++){
				if(ord($motAConvertir[$i])==97){
					array_push($monArray,122);//on met un a minuscule si on a v
				}
				else if(ord($motAConvertir[$i])==98){
					array_push($monArray,121);
				}
				else if(ord($motAConvertir[$i])==99){
					array_push($monArray,120);
				}
				else if(ord($motAConvertir[$i])==65){//on met un A maj en cas de V maj
					array_push($monArray,98);
				}
				else if(ord($motAConvertir[$i])==66){
					array_push($monArray,99);
				}
				else if(ord($motAConvertir[$i])==67){
					array_push($monArray,100);
				}
				else{
					array_push($monArray,ord($motAConvertir[$i])-3);
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
</html>

