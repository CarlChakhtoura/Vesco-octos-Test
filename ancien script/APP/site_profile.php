<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link rel="stylesheet" href="site_profile.css" >
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<title>Ability Test </title>
	</head>

	<body>
	<div class="bgimg">
			<div class="header">
				<div class="elementsduheader">
					<div class="contenudulogo" onclick="shownavebar()">
						<h1>ABILITY <span>TEST</span></h1>
					</div>
					<div class="menu-deroulant-profile">
						<img src="file:///C:/Users/mathi/Downloads/images/2.jpg" alt="User Image">
						<ul>
							<li><a href="file:///C:/Users/mathi/Downloads/deconnexion.php" class="highlight">Deconnexion</a></li>
						</ul>
					</div>
					<div class="wrapper">
					    <div class="sidebar" id='test'>
					        <ul>
								<li><a href="controle.html"><i class="fas fa-user"></i>Controle</a></li>
								<li><a href="test1.html"><i class="fas fa-home"></i>Test</a></li>
								<li><a href="lesresultats.html"><i class="fas fa-home"></i>Resultat</a></li>
					            <li><a href="lesstatistiques.html"><i class="fas fa-home"></i>Statistique</a></li>
					            <li><a href="site_profile.html"><i class="fas fa-user"></i>Profil</a></li>
								<li><a href="forum.php"><i class="fas fa-user"></i>Forum</a></li>
								<li><a href="faq.html"><i class="fas fa-user"></i>Faq</a></li>
					        </ul> 
					        <div class="social_media">
					          <a href="#"><i class="fab fa-facebook-f"></i></a>
					          <a href="#"><i class="fab fa-twitter"></i></a>
					          <a href="#"><i class="fab fa-instagram"></i></a>
					      </div>
					    </div>
			        </div>	
									
				</div>
			</div>
			<section>
				<article>
					<form method="POST" action="siteProfileModification.php">
						<label>Nom</label><input type="text" name="nom" value="<?php echo $_SESSION['Lastname'] ?>"/><br>
						<label>Prenom</label><input type="text" name="prenom" value="<?php echo $_SESSION['Firstname'] ?>" /><br>
						<label>Mot de Passe</label><input type="password" name="motDePasse" value="<?php echo $_SESSION['motDePasse'] ?>" /><br>
						<label>Confirmation du mot de passe</label><input type="password" name="confirmationMotDePasse" value="<?php echo $_SESSION['motDePasse'] ?>" /><br>
						<label>Email</label><input type="text" name="email" value="<?php echo $_SESSION['Email'] ?>"/><br>
						<input type="Submit" value="Confirmer"/>
					</form>
				</article>
			</section>
		</div> 
	</body>
</html>
