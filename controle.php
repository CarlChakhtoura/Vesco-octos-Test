<!DOCTYPE html>
<?php session_start();
 ?>
<html>
	<head>
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/controle.css" >
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
						<a href="">Déconnexion</a>
					</div>
				</div>
			</div>

			<div class="contenusite">

				<div class="stats-form">
					<h1>CONTROLE</h1><br>
					<label>Nom: </label>
					<input type="nom" required name="nom" class="inputbox" placeholder="Nom">
					<br>
					<label>Prénom: </label>
					<input type="prenom" required name="prenom" class="inputbox" placeholder="Prénom">
					<br>
					<label>Permis: </label>
					<input type="num_permis" required name="num_permis" class="inputbox" placeholder="numéro de votre permis de conduire">
					<br>
					<label>Adresse: </label>
					<input type="lieu" required name="lieu" class="inputbox" placeholder="adresse du contrôle">
					<br>
					<label>Date: </label>
					<input type="date " required name="date" class="inputbox" placeholder="date: jour/mois/année">
					<br>
					<label>Numéro policier: </label>
					<input type="numpolice" required name="numpolice" class="inputbox" placeholder="numéro d'identification du policier">
					<br><br>
					<a href="#" class="btnvalider">Valider</a>

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

			<div id="side-menu" class="side-nav">
			    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
			    <a href="controle.php">Controle</a>
			    <a href="lestests.php">Test</a>
			    <a href="resultats.php">Resultats</a>
			    <a href="statistiques.php">Statistiques</a>
			    <a href="sujetsforum.php">Forum</a>
			    <a href="faq.php">F.A.Q</a>
			    <a href="profile.php">Mon Profil</a>
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
				      <li>Contactez-nous</li>
				      <li>CGU</li>
				    </ul>
				  </div>
				<div class="clearfix"></div>
			</div>
		</div>
		<?php 
			}
		?>
	</body>

</html>

