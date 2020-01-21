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
						<a href="deconnexion.php">Déconnexion</a>
					</div>
				</div>
			</div>

			<div class="contenusite">

				<div class="stats-form">
				<form method="Post" action="traitementControlePolicier.php">
					<h1>CONTROLE FORCE DE L'ORDRE</h1><br>
					<label>Nom du policier: </label>
					<input type="nom" required name="nomDuPolicier" class="inputbox" placeholder="nom Policier">
					<br>
					<label>Prénom du policier: </label>
					<input type="prenom" required name="prenomDuPolicier" class="inputbox" placeholder="prenom Policier">
					<br>
					<label>Nom du suspect: </label>
					<input type="nomSuspect" required name="nomSuspect" class="inputbox" placeholder="nomSuspect">
					<br>
					<label>Prenom suspect: </label>
					<input type="prenomSuspect" required name="prenomSuspect" class="inputbox" placeholder="prenom suspect">
					<br>
					<label>Lieu du test: </label>
					<input type="lieu" required name="lieu" class="inputbox" placeholder="lieu du controle">
					<br>
					<label>Date: </label>
					<input type="date" required name="datel" class="inputbox">
					<br>
					<br>
					<input class="btnvalider" type="submit" value="Envoyer"/>
				</form>
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
				      <li><a href="contactnous.html">Contactez-nous</a></li>
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

