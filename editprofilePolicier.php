<!DOCTYPE html>
<?php session_start();
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
						<a href="deconnexion.php">Déconnexion</a>
					</div>
				</div>
			</div>

			<div class="contenusite">
				<h2>Edition profil<h2>
				<div class="card">
			        <div class="card-header">
			            <img src="./images/avatarprof.png" alt="Profile Image" class="profile-img">
			        </div>
			        <div class="card-body">
					<form method="POST" action="siteProfileModificationPolicier.php"><!--A FAIRE-->
						<label>Nom</label><input type="text" name="nom" value="<?php echo decryptageDuNom($_SESSION['Lastname']);?>"/><br>
						<label>Prenom</label><input type="text" name="prenom" value="<?php echo decryptageDuNom($_SESSION['Firstname']); ?>" /><br>
						<label>Mot de Passe</label><input type="password" name="motDePasse1" value="<?php echo $_SESSION['motDePasse']; ?>" /><br>
						<label>Confirmation du mot de passe</label><input type="password" name="motDePasse2" value="<?php echo $_SESSION['motDePasse']; ?>" /><br>
						<label>Email</label><input type="text" name="email" value="<?php echo $_SESSION['Email']; ?>"/><br>
						<label>Telephone </label><input type="text" name="telephone" value="<?php echo $_SESSION['telephone']; ?>"/><br>
						<label>Commissariat </label><input type="text" name="Commissariat" value="<?php echo decryptageDeLAdresse($_SESSION['policeStation']); ?>"/><br>
						<input type="Submit" value="Confirmer"/>
					</form>
			            <div class="col">
			               <a href="controlePolicier.php?cert=5">Retour</a>
			            </div>
			        </div>
			    </div>
			</div>

			<div id="side-menu" class="side-nav">
			    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
			    <a href="controlePolicier.php?cert=5">Controle</a>
			    <a href="lestestsPolicier.php?cert=5">Test</a>
			    <a href="resultatsPolicier.php?cert=5">Resultats</a>
			    <a href="statistiquesPolicier.php?cert=5">Statistiques</a>
			    <a href="sujetsforumPolicier.php?cert=5">Forum</a>
			    <a href="faqPolicier.php?cert=5">F.A.Q</a>
			    <a href="profilePolicier.php?cert=5">Mon Profil</a>
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
				    <h1>Ability Test</h1>
				    <ul>
				      <li><a href="https://form.jotform.com/200181736367354" target="_blank">Contactez-nous</a></li>
				      <li><a href="cgu.html" target="_blank">CGU</a></li>
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