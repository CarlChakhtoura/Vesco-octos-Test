<!DOCTYPE html>
<?php session_start();
if(is_null($_SESSION["certificat"])==false){
		header("Location: connexion_policier.html");
	}
?>
<html>
	<head>
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/quisommenous.css" >
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

			<div class="team-section">
				<div class="inner-width">
					<h1>Rencontez notre équipe</h1>
					<div class="pers">

						<div class="pe">
							<img src="images/saif.png" alt="">
							<div class="p-name">Saifeddine El Ouazzani</div>
							<div class="p-des">Développeur Web</div>
						</div>

						<div class="pe">
							<img src="images/carl.png" alt="">
							<div class="p-name">Carl Chakhtoura</div>
							<div class="p-des">Commercial</div>
						</div>

						<div class="pe">
							<img src="images/math.png" alt="">
							<div class="p-name">Mathieu Pavaut</div>
							<div class="p-des">Electronique</div>
						</div>

						<div class="pe">
							<img src="images/gustave.png" alt="">
							<div class="p-name">Gustave Faure</div>
							<div class="p-des">Sécurité</div>
						</div>

						<div class="pe">
							<img src="images/clem.png" alt="">
							<div class="p-name">Clément Brisse</div>
							<div class="p-des">Logiciel</div>
						</div>

					</div>
				</div>
				
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

</html>

