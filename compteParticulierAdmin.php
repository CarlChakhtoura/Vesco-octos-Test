<!DOCTYPE html>
<html>
	<head>
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/compteparticulieradmin.css" >
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

				<h1>Gérer les comptes particuliers</h1>

				<div class="res-tab">
					<table>
						<tbody>
							<tr>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Sexe</th>
								<th>Mail</th>
								<th>Nationalitée</th>
								<th>Pays de résidence</th>
								<th>Adresse</th>
								<th>Code postal</th>
								<th>Téléphone</th>
								<th>Supprimer cet utilisateur</th>
							</tr>
							<?php
			$baseDonneeAPP=new PDO('mysql:host=localhost; dbname=app','root','');
			$tableParticulier=$baseDonneeAPP->query('SELECT * FROM particulier');
			while($donneeParticulier=$tableParticulier->fetch()){
				?>
				<tr>
					<td>
					<?php echo $donneeParticulier['Lastname']; ?>
					</td>
					<td>
					<?php echo $donneeParticulier['Firstname']; ?>
					</td>
					<td>
					<?php 
					if ($donneeParticulier['Sexe']==1){
						echo "Homme";
					}
					else{
						echo "Femme";
					} ?>
					</td>
					<td>
					<?php echo $donneeParticulier['Email']; ?>
					</td>
					<td>
					<?php echo $donneeParticulier['nationalite']; ?>
					</td>
					<td>
					<?php echo $donneeParticulier['pays_residence']; ?>
					</td>
					<td>
					<?php echo $donneeParticulier['adresse']; ?>
					</td>
					<td>
					<?php echo $donneeParticulier['code_postal']; ?>
					</td>
					<td>
					<?php echo $donneeParticulier['telephone']; ?>
					</td>
					<td>
					<a href="actionSuppresionUtilitaireDeAdmin.php?Userid=<?php echo $donneeParticulier['Userid'];?>">Supprimer cet utilitaire</a>
					</td>
				</tr>
			<?php }
			?>
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
			    <a href="controle.html">Controle</a>
			    <a href="lestests.html">Test</a>
			    <a href="resultats.html">Resultats</a>
			    <a href="statistiques.html">Statistiques</a>
			    <a href="sujetsforum.html">Forum</a>
			    <a href="faq.html">F.A.Q</a>
			    <a href="profile.html">Mon Profil</a>
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
	</body>

</html>

