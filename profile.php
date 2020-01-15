<!DOCTYPE html>
<?php session_start();
	if(is_null($_SESSION["certificat"])==true){
		header("Location: connexion_particulier.html");
	}
?>
<html>
	<head>
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/profile.css" >
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
				<h2>Votre profil<h2>
				<div class="card">
			        <div class="card-header">
			            <img src="./images/saif.png" alt="Profile Image" class="profile-img">
			        </div>
			        <div class="card-body">
			            <p class="full-name"><?php echo $_SESSION['Lastname'];
													echo " "; 
													echo $_SESSION['Firstname']; ?>
											</p>
			            <p class="username">@<?php echo $_SESSION['Lastname'];?></p>
			            <p class="city"><?php echo $_SESSION['pays_residence'];?></p>
			            <p class="desc">Je suis un developpeur web chez Ability Test.</p>		     
			        </div>
			        <div class="skillbar">
			        	<p>Votre barre</p>
			        	<p>50%</p>
			        	<div class="skill_pourcentage">
			        		<div class="skill_level" style="width: 50%"></div><?php //*********************?>
			        	</div>
			        </div>
			        <div class="card-footer">
			            <div class="col vr">
			                <a href="editprofile.php?cert=5">Edition profil</a>
			            </div>
			            <div class="col">
			               <a href="accueil.php?cert=5">Retour à l'accueil</a>
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

