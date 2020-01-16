<!DOCTYPE html>
<?php session_start() ?>
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
						<label>Nom</label><input type="text" name="nom" value="<?php echo $_SESSION['Lastname']; ?>"/><br>
						<label>Prenom</label><input type="text" name="prenom" value="<?php echo $_SESSION['Firstname']; ?>" /><br>
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
							if($_SESSION['pays_residence']=="France"){
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
			               <a href="accueil.html">Retour à l'accueil</a>
			            </div>
			        </div>
			    </div>
			</div>

			<div id="side-menu" class="side-nav">
			    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
			    <a href="controle.php">Controle</a>
			    <a href="lestests.php">Test</a>
			    <a href="resultats.php">Resultats</a>
			    <a href="statistiques.php">Statistiques</a>
			    <a href="sujetsforum.php">Forum</a>
			    <a href="faq.php">F.A.Q</a>
			    <a href="editprofile.php">Mon Profile</a>
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
	</body>

</html>

