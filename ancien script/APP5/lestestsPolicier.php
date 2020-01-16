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

				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

				<form id="msform">
					<ul id="progressbar">
						<li class="active">Etape 1</li>
						<li>Etape 2</li>
						<li>Etape 3</li>
					</ul>
				<fieldset>
					<h2 class="fs-title">Etape 1</h2>
					<h3 class="fs-subtitle">C'est l'étape 1</h3>
					<input type="text" name="name" placeholder="Nom" />
					<input type="text" name="lastname" placeholder="Prénom" />
					<input type="button" name="text" class="next action-button" value="Suivant" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Etape 2</h2>
					<h3 class="fs-subtitle">C'est l'étape 2</h3>
					<input type="text" name="name" placeholder="Nom" />
					<input type="text" name="lastname" placeholder="Prénom" />
					<input type="button" name="text" class="previous action-button" value="Précedent" />
					<input type="button" name="text" class="next action-button" value="Suivant" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Etape 3</h2>
					<h3 class="fs-subtitle">C'est l'étape 3</h3>
					<input type="text" name="name" placeholder="Nom" />
					<input type="text" name="lastname" placeholder="Prénom" />
					<input type="button" name="text" class="previous action-button" value="Précedent" />
					<input type="submit" name="submit" class="submit action-button" value="Valider" />
				</fieldset>
				</form>

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
			    <a href="controlePolicier.php?cert=5">Controle</a>
			    <a href="lestestsPolicier.php?cert=5">Test</a>
			    <a href="resultatsPolicier.php?cert=5">Resultats</a>
			    <a href="statistiquesPolicier.php?cert=5">Statistiques</a>
			    <a href="sujetsforumPolicier.php?cert=5">Forum</a>
			    <a href="faqPolicier.php?cert=5">F.A.Q</a>
			    <a href="profilePolicier.php?cert=5">Mon Profile</a>
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
				      <a href="deconnexion.php"><li>deconnexion</li></a>
				      <li>Contenu2</li>
				      <li>Contenu3</li>
				      <li>Contenu4</li>
				      <li>Contenu5</li>
				    </ul>
				  </div>
				  <div class="col">
				    <h1>Produit</h1>
				    <ul>
				      <li>Contenu1</li>
				      <li>Contenu2</li>
				      <li>Contenu3</li>
				      <li>Contenu4</li>
				      <li>Contenu5</li>
				    </ul>
				  </div>
				  <div class="col">
				    <h1>Comptes</h1>
				    <ul>
				      <li>Contenu1</li>
				      <li>Contenu2</li>
				      <li>Contenu3</li>
				      <li>Contenu4</li>
				      <li>Contenu5</li>
				    </ul>
				  </div>
				  <div class="col">
				    <h1>Ressources</h1>
				    <ul>
				      <li>Contenu1</li>
				      <li>Contenu2</li>
				      <li>Contenu3</li>
				      <li>Contenu4</li>
				      <li>Contenu5</li>
				      <li>Contenu6</li>
				    </ul>
				  </div>
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

		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
		<script src="js/tests.js"></script>
		<?php
			}
		?>
	</body>

</html>

