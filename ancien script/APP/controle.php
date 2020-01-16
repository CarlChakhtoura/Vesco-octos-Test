<?php session_start() ?>
<!DOCTYPE html>
<!-- saved from url=(0053)file:///C:/Users/mathi/Downloads/creersujetforum.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="controle.css">
		<link href="creersujetforum.css" rel="stylesheet">
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

		</script></head>
	
	

	<body>

 		<!----------------------------------------- La zone du body en bleu------------------------------------------------------------- -->
		<div class="bgimg">
			<div class="header">
				<div class="elementsduheader">
					<div class="contenudulogo" onclick="shownavebar()">
						<h1>ABILITY <span>TEST</span></h1>
					</div>
					<div class="menu-deroulant-profile">
						<img src="file:///C:/Users/mathi/Downloads/images/2.jpg" alt="User Image">
						<ul>
							<li><a href="file:///C:/Users/mathi/Downloads/deconnexion.php" class="highlight">Deconnexion</a></li>
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
								<li><a href=""><?php echo $_SESSION['Lastname'] ?></a></li>
					        </ul> 
					        <div class="social_media">
					          <a href="#"><i class="fab fa-facebook-f"></i></a>
					          <a href="#"><i class="fab fa-twitter"></i></a>
					          <a href="#"><i class="fab fa-instagram"></i></a>
					      </div>
					    </div>
			        </div>
					<div class="centerdiv">
						<br><h2>CONTROLE FORCE DE L'ORDRE</h2>
						<form action="connexion_particulier.php" method="post">
						 <div>
						  <input type="nom" name="nom" class="inputbox" value="Nom">
						 </div>
						 <br>
						<div>
						  <input type="prenom" name="prenom" class="inputbox" placeholder="Prénom">
						 </div>
						 <br>
						 <div>
						  <input type="num_permis" name="num_permis" class="inputbox" placeholder="numéro de votre permis de conduire">
						 </div>
						 <br>
							<div>
						  <input type="lieu" name="lieu" class="inputbox" placeholder="adresse du contrôle">
						 </div>
						 <br>
							<div>
						  <input type="date " name="date" class="inputbox" placeholder="date: jour/mois/année">
						 </div>
						 <br>
							<div>
						  <input type="numpolice" name="numpolice" class="inputbox" placeholder="numéro d'identification du policier">
						 </div>
						 <br>
						 <div>
						  <button class="boutton1" type="submit"> valider les informations </button>
						 </div>
						</form>
						
					  </div>
				</div>
			</div>
		</div>
	    <!----------------------------------------------------------------------------------------------------------------------------------------------------------- -->

	</body>
</html>