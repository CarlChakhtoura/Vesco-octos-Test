<!DOCTYPE html>
<?php session_start();
?>
<html>
	<head>
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/sujetsforum.css" >
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
						<a href="">Déconnexion</a>
					</div>
				</div>
			</div>

			<div class="contenusite">
				
				
				<?php
				//******************
					$baseDonneeForum=new PDO('mysql:host=localhost; dbname=forum','mathieu','ariane5');
					$req=$baseDonneeForum->query('SELECT * FROM liste_sujet ORDER BY dateCreation DESC');
					
				?>	
					<button class="btn"><a href='creersujet.php'>Créer un sujet</a></button>
					
				<?php
					$i=1;
					while($donnee=$req->fetch()){	
					?>
			        <div class="item">
			        	<h1><?php echo $donnee['topicSubject'];
						echo " ";
						echo $i; ?></h1>
			          <?php
					  //content
					  echo $donnee['Content'];
					  ?>
					  <a href="lireSujetForum.php?sujet=<?php echo $donnee['topicSubject'];?>&cert=5">Lire</a>
			        </div>
			       
				</div>
				<?php
					}
				?>
	

			</div>

			<div id="side-menu" class="side-nav">
			    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
			    <a href="controle.php?cert=5">Controle</a>
			    <a href="lestests.php?cert=5">Test</a>
			    <a href="resultats.php?cert=5">Resultats</a>
			    <a href="statistiques.php?cert=5">Statistiques</a>
			    <a href="sujetsforum.php?cert=5">Forum</a>
			    <a href="faq.php?cert=5">F.A.Q</a>
			    <a href="profile.php?cert=5">Mon Profil</a>
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

