<!DOCTYPE html>
<?php session_start(); 
?>
<html>
	<head>
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/statistiques.css" >
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--C est pour utiliser chart.js-->
		 <script src="chart.min.js"></script>
		 
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
					</div>
				</div>
			</div>

			<div class="contenusite">


							
				
				<div class="stats-form">
				<canvas id="myChart">
				<script>
				var ctx = document.getElementById('myChart').getContext('2d');
				var chart = new Chart(ctx, {
				// The type of chart we want to create
				type: 'line',

				// The data for our dataset
				data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [{
				label: 'Nombre de tuees sur les routes',
				backgroundColor: 'rgb(255, 99, 132)',
				borderColor: 'rgb(255, 99, 132)',
				data: [100, 98, 75, 26, 20, 30, 45]
				}]
				},

				// Configuration options go here
				options: {}
				});
// 				</script>
				</canvas>
				</div>
			
			
				
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
				      <li>Contenu1</li>
				      <li>Contenu2</li>
				      <li>Contenu3</li>
				      <li>Contenu4</li>
				      <li>Contenu5</li>
				    </ul>
				  </div>
				  <div class="col">
				    <h1>Produit</h1>
				    <ul>
				      <li>Contenu1</li>
				      <li>Contenu2</li>
				      <li>Contenu3</li>
				      <li>Contenu4</li>
				      <li>Contenu5</li>
				    </ul>
				  </div>
				  <div class="col">
				    <h1>Comptes</h1>
				    <ul>
				      <li>Contenu1</li>
				      <li>Contenu2</li>
				      <li>Contenu3</li>
				      <li>Contenu4</li>
				      <li>Contenu5</li>
				    </ul>
				  </div>
				  <div class="col">
				    <h1>Ressources</h1>
				    <ul>
				      <li>Contenu1</li>
				      <li>Contenu2</li>
				      <li>Contenu3</li>
				      <li>Contenu4</li>
				      <li>Contenu5</li>
				      <li>Contenu6</li>
				    </ul>
				  </div>
				  <div class="col">
				    <h1>Support</h1>
				    <ul>
				      <li>Contactez-nous</li>
				      <li>Contenu1</li>
				      <li>Contenu2</li>
				    </ul>
				  </div>
				  <div class="col social">
				    <h1>Suivez nous</h1>
				    <ul>
				      <li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></li>
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

