<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
		<link rel="stylesheet" href="test1.css" >
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<title>Ability Test </title>

		<script>
			function shownavebar() {
				var sidebar=document.getElementById('test');
				if(sidebar.style.display=='block') {
					sidebar.style.display ='none';
				} else {
					sidebar.style.display ='block';
				}
				
				console.log('test');
			}

		</script>

	</head>

	<body>

 		<!----------------------------------------- La zone du body en bleu------------------------------------------------------------- -->
		<div class="bgimg">
			<div class="header">
				<div class="elementsduheader">
					<div class="contenudulogo"  onclick="shownavebar()">
						<h1>ABILITY <span>TEST</span></h1>
					</div>
					<div class="menu-deroulant-profile">
						<img src="images/2.jpg" alt="User Image"/>
						<ul>
							<li><a href="deconnexion.php" class="highlight">Déconnexion</a></li>
						</ul>
					</div>
					<div class="wrapper">
					    <div class="sidebar" id='test'>
					        <ul>
								<li><a href="controle.php">Controle</a></li>
								<li><a href="test1.php">Test</a></li>
								<li><a href="lesresultats.php">Resultat</a></li>
					            <li><a href="lesstatistiques.php">Statistique</a></li>
					            <li><a href="site_profile.php">Profil</a></li>
								<li><a href="forum.php">Forum</a></li>
								<li><a href="faq.php">Faq</a></li>
					        </ul> 
					        <div class="social_media">
					          <a href="#"><i class="fab fa-facebook-f"></i></a>
					          <a href="#"><i class="fab fa-twitter"></i></a>
					          <a href="#"><i class="fab fa-instagram"></i></a>
					      </div>
					    </div>
			        </div>
				</div>
			</div>
			<div class="centerdiv">
		    <img src="coeur.png">
 			<h2>Frequence Cardiaque</h2>
 			<a href="test2.php" class="button">Test suivant</a>
		  </div>
		</div>
	</div>


	</body>
</html>