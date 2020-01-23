<!DOCTYPE html>
<html>
	<head>
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/gestionforum.css" >
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

				<h1>La gestion du forum</h1>

				<div class="res-tab">
					<table>
						<tbody>
							<tr>
								
								<th>ID sujet</th>
								<th>Contenu</th>
								<th>Auteur</th>
								<th>Date publication</th>
								<th>Supprimer</th>
								<th>Modifier</th>
							</tr>
							<?php
							
							$baseDonneeForum=new PDO('mysql:host=localhost; dbname=forum','root','');
							
							$req1=$baseDonneeForum->query('SELECT * FROM conversation ORDER BY idConversation DESC');
							while($donnee=$req1->fetch()){
								?>
							<tr>
								
								<td><?php echo $donnee['idConversation'];?></td>
								<td><?php echo $donnee['content'];?></td>
								<td><?php echo $donnee['author'];?></td>
								<td><?php echo $donnee['datePost'];?></td>
								<td><a href="supprimerSujetForum.php?idConversation=<?php echo $donnee['idConversation'];?>">Supprimer</a></td>
								<td><a href="modifierSujetsForum.php?idConversation=<?php echo $donnee['idConversation'];?>">Modifier</a></td>
							<?php }
							?>
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
	</body>

</html>

