<!DOCTYPE html>
<?php session_start();
if(is_null($_SESSION["certificat"])==false){
		header("Location: connexion_policier.html");
} ?>
<html>
	<head>
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/statistiques.css" >
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
					</div>
				</div>
			</div>

			<div class="contenusite">

				<div class="stats-form">
					<h1>Les statistiques</h1>

					<p> Les statistiques s'affichent içi..</p>
					<p> Les statistiques s'affichent içi..</p>
					<p> Les statistiques s'affichent içi..</p>

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
			    <a href="controlePolicier.php">Controle</a>
			    <a href="lestestsPolicier.php">Test</a>
			    <a href="resultatsPolicier.php">Resultats</a>
			    <a href="statistiquesPolicier.php">Statistiques</a>
			    <a href="sujetsforumPolicier.php">Forum</a>
			    <a href="faqPolicier.php">F.A.Q</a>
			    <a href="profilePolicier.php">Mon Profile</a>
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
				      <li>Contenu1</li>
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
		<?php
			}
		?>
	</body>

</html>

