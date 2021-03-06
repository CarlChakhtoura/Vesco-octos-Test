<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/resultats.css" >
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

				<h1>Les Résultats</h1>

				<div class="res-tab">
					<table>
						<tbody>
							<tr>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Adresse mail</th>
								<th>Résultats</th>
							</tr>
							<tr>
								<td>El Ouazzani</td>
								<td>Saifeddine</td>
								<td>saifouazzani2k18@gmail.com</td>
								<td>Positif</td>
							</tr>
							<tr>
								<td>Chakhtoura</td>
								<td>Carl</td>
								<td>carlchakhtoura@gmail.com</td>
								<td>Positif</td>
							</tr>
							<tr>
								<td>Brisse</td>
								<td>Clément</td>
								<td>brisseclement@gmail.com</td>
								<td>Positif</td>
							</tr>
							<tr>
								<td>Pavaut</td>
								<td>Mathieu</td>
								<td>pavautmathieu@gmail.com</td>
								<td>Positif</td>
							</tr>
							<tr>
								<td>Faure</td>
								<td>Gustave</td>
								<td>fauregustave@gmail.com</td>
								<td>Positif</td>
							</tr>
						</tbody>
					</table>
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

