<!DOCTYPE html>
<? session_start();
?>	
	
<html>
	<head>
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/lestests.css" >
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ability Test </title>
	</head>

	<body>
	<?php
	
	
	if(isset($_GET["cert"])==false || $_GET["cert"]!=5){
		header("Location=connexion_particulier.html");
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

				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

				<form id="msform">
					<ul id="progressbar">
						<li class="active">Etape 1</li>
						<li>Etape 2</li>
						<li>Etape 3</li>
						<li>Etape 4</li>
					</ul>
				<fieldset>
					<h2 class="fs-title">Etape 1</h2>
					<h3 class="fs-subtitle">C'est l'étape 1</h3>
					<img class="fs-images" src="images/coeur.png">
			 		<h2 class="fs-title">Frequence Cardiaque</h2>
					<input type="button" name="text" class="next action-button" value="Suivant" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Etape 2</h2>
					<h3 class="fs-subtitle">C'est l'étape 2</h3>
					<img class="fs-images" src="images/temperature.png">
			 		<h2 class="fs-title">Température</h2>
					<input type="button" name="text" class="previous action-button" value="Précedent" />
					<input type="button" name="text" class="next action-button" value="Suivant" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Etape 3</h2>
					<h3 class="fs-subtitle">C'est l'étape 3</h3>
					<img class="fs-images" src="images/headphones.png">
			 		<h2 class="fs-title">Test Sonore 1</h2>
					<input type="button" name="text" class="previous action-button" value="Précedent" />
					<input type="button" name="text" class="next action-button" value="Suivant" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Etape 4</h2>
					<h3 class="fs-subtitle">C'est l'étape 4</h3>
					<img class="fs-images" src="images/headphones.png">
			 		<h2 class="fs-title">Test Sonore 2</h2>
					<input type="submit" name="submit" class="submit action-button" value="Valider" />
				</fieldset>
				</form>

			</div>

			<div id="side-menu" class="side-nav">
			    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
			    <a href="controle.php?cert=5">Controle</a>
			    <a href="lestests.php?cert=5">Test</a>
			    <a href="resultats.php?cert=5">Resultats</a>
			    <a href="statistiques.php?cert=5">Statistiques</a>
			    <a href="sujetsforum.php?cert=5">Forum</a>
			    <a href="faq.php?cert=5">F.A.Q</a>
			    <a href="profile.php?cert=5">Mon Profile</a>
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
				      <li><a href="contactnous.html">Contactez-nous</a></li>
				      <li><a href="cgu.html">CGU</a></li>
				    </ul>
				  </div>
				<div class="clearfix"></div>
			</div>
		</div>

		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
		<script src="js/tests.js"></script>
	<?php }
	?>
	</body>

</html>
