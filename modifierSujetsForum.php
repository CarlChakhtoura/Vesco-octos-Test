<!DOCTYPE html>
<?php
	session_start();
	/*modifier sujet*/
	
?>
<html>
	<head>
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/modifiersujetsforum.css" >
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

				<h1>Gérer forum par les Administrateurs</h1>

				<div class="res-tab">
					<table>
						<tbody>
							<tr>
								<th>Modifier Titre</th>
								<th>Modifier Contenu</th>
							</tr>
							<?php
							
							$baseDeDonnee=new PDO('mysql:host=localhost; dbname=forum','root','');
							
							//******
							$req1=$baseDeDonnee->prepare('SELECT * FROM conversation WHERE idConversation=?');
							$req1->execute(array($_GET['idConversation']));
							$donnee=$req1->fetch();
							$a=$donnee["idConversation"];
							$req1->closeCursor();
							$req1=$baseDeDonnee->prepare('SELECT * FROM liste_sujet WHERE idConversation=?');
							$req1->execute(array($a));
							$titre=$req1->fetch();
							?>
							<tr>
								<td><input type="text" class="inputs" name="titresujet" value="<?php echo $titre['topicSubject'];?>" /></td>
								
							<?php
							$req1->closeCursor();
							$req1=$baseDeDonnee->prepare('SELECT * FROM conversation WHERE idConversation=?');
							$req1->execute(array($a));
							$donnee=$req1->fetch();
							?>
								<td><textarea name="newcontent" placeholder="<?php echo $donnee["content"];?>"></textarea></td>
							</tr>
						</tbody>
					</table>
					<button class="button-envoyer"><a href="traitementModifierSuejetForum.php?idConversation=<?php echo $donnee['idConversation'];?>">Envoyer</a></button>
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
				      <li><a href="https://form.jotform.com/200181736367354" target="_blank">Contactez-nous</a></li>
				      <li><a href="cgu.html" target="_blank">CGU</a></li>
				    </ul>
				  </div>
				<div class="clearfix"></div>
			</div>
		</div>
	</body>

</html>

