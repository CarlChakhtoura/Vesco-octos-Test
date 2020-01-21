<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/gestionadmin.css" >
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Pour que les accents s'affichent correctement-->
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
						            <path d="M0,5 30,5" stroke="black" stroke-width="5"/>
						            <path d="M0,14 30,14" stroke="black" stroke-width="5"/>
						            <path d="M0,23 30,23" stroke="black" stroke-width="5"/>
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

				<div class="admin-form">
					<h1>PAGE RESERVE AUX ADMINISTRATEURS</h1><br>
					<br>
					<a href="compteParticulierAdmin.php" class="btngerer">Gérer les comptes particuliers</a>
					<br>
					<a href="inscriptionParticulierAdmin.php" class="btngerer">Ajouter des comptes particuliers</a>
					<br>
					<a href="comptePolicierAdmin.php" class="btngerer">Gérer les comptes policiers</a>
					<br>
					<a href="inscriptionPolicierAdmin.php" class="btngerer">Ajouter des comptes policiers</a>
					<br>
					<a href="forumPourAdmin.php" class="btngerer">Gérer le forum</a>
					<br>
					<a href="rechercheAdmin.php" class="btngerer">Statistiques</a>

				</div>

				<!--<div class="slidershow middle"> #Slideshow, on le rajoute après

			      <div class="slides">
			        <input type="radio" name="r" id="r1" checked>
			        <input type="radio" name="r" id="r2">
			        <input type="radio" name="r" id="r3">
			        <div class="slide s1">
			          <img src="images/1.jpg" alt="">
			        </div>
			        <div class="slide">
			          <img src="images/2.jpg" alt="">
			        </div>
			        <div class="slide">
			          <img src="images/3.jpg" alt="">
			        </div>
			      </div>

			      <div class="navigation">
			        <label for="r1" class="bar"></label>
			        <label for="r2" class="bar"></label>
			        <label for="r3" class="bar"></label>
			      </div>
			    </div>--> 

			</div>

		<div class="footer">
				<div class="contain">
				  <div class="col">
				    <h1>Ability Test</h1>
				    <ul>
				      <li><a href="contactnous.html">Contactez-nous</a></li>
				      <li><a href="cgu.html" target="_blank">CGU</a></li>
				    </ul>
				  </div>
				<div class="clearfix"></div>
			</div>
		</div>
	</body>

</html>

