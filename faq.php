<!DOCTYPE html>
<?php session_start();
	
?>
<html>
	<head>
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/faq.css" >
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Pour que les accents s'affichent correctement-->
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
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
				<div class="accordion">
					<div class="accordion-item" id="question1">
						<a class="accordion-link" href="#question1">
							Comment créer un compte Ability Test ?
							<i class="icon ion-md-add"></i>
							<i class="icon ion-md-remove"></i>
						</a>
						<div class="reponse">
							<p>Réponse1:
							1/Rendez vous à la page : //nom de la page à mettre http://localhost/APP/inscription_particulier.html
							2/Remplissez les champs
							3/Acceptez les conditions générales d’utilisation
							4/Cliquer sur « s’inscrire »
							En cas de problème vérifier votre connexion. <br>
							Si le problème persiste vérifiez que vous n’avez pas déjà un compte.<br>
							Si oui peut-être avez-vous perdu votre mot de passe. Dans ce cas suivre la procédure : <br>
							Que faire si j’ai oublié mon mot de passe ?
							</p>
						</div>
					</div>

					<div class="accordion-item" id="question2">
						<a class="accordion-link" href="#question2">
							Comment se connecter en tant que particulier?
							<i class="icon ion-md-add"></i>
							<i class="icon ion-md-remove"></i>
						</a>
						<div class="reponse">
							<p>Réponse2:
							1/Rendez vous http://localhost/APP/connexion_particulier.html
							2/Remplissez les champs.
							3/Cliquer sur « Se connecter »
							En cas de problème vérifier votre connexion.<br>
							Si le problème persiste vérifiez que vous n’avez pas déjà un compte.<br>
							Si oui peut-être avez-vous perdu votre mot de passe. Dans ce cas suivre la procédure :<br>
							Que faire si j’ai oublié mon mot de passe ? Dans le cas où vous n’avez pas de compte veuillez suivre la procédure :<br>
							Comment créer un compte Ability Test ?

							</p>
						</div>
					</div>

					<div class="accordion-item" id="question3">
						<a class="accordion-link" href="#question3">
							Que faire en cas d’oubli de mot de passe ?
							<i class="icon ion-md-add"></i>
							<i class="icon ion-md-remove"></i>
						</a>
						<div class="reponse">
							<p>Réponse3
							En cas de problème vérifier votre connexion.<br>
							Si le problème persiste vérifiez que vous n’avez pas déjà un compte.<br>
							Si oui peut-être avez-vous perdu votre mot de passe. Dans ce cas suivre la procédure :<br>
							Que faire si j’ai oublié mon mot de passe ? Dans le cas où vous n’avez pas de compte veuillez suivre la procédure :<br>
							Comment créer un compte Ability Test ?</p>
						</div>
					</div>

					<div class="accordion-item" id="question4">
						<a class="accordion-link" href="#question4">
							Quelles sont les recommandations pour avoir un mot de passe sur ?
							<i class="icon ion-md-add"></i>
							<i class="icon ion-md-remove"></i>
						</a>
						<div class="reponse">
							<p>Réponse4
							L’équipe Ability Test recommande de fournir un mot de passe compliqué à deviner pour les autres, mais facile à retenir pour vous.<br>
							Par des mesures de sécurités nous imposons à nos utilisateurs que le mot de passe fourni fasse plus 8 de caractères dont au moins une majuscule,<br>
							une minuscule, un chiffre et un caractère spécial.</p>
						</div>
					</div>

					<div class="accordion-item" id="question5">
						<a class="accordion-link" href="#question5">
							Comment lancer une session de test ?
							<i class="icon ion-md-add"></i>
							<i class="icon ion-md-remove"></i>
						</a>
						<div class="reponse">
							<p>Réponse5
							Pour lancer une session de test veuillez d’abord vous connecter puis cliquer dans le menu déroulant sur Test.<br>
							Cliquer alors sur « Lancer une session » de test.Il est nécessaire d’avoir son boitier allumé. Celui-ci enverra les résultats fournis.<br>
							Une fois que la session est fini cliquez sur « Test suivant ». Une fois que les tests sont terminés vous pourrez alors voir vos résultats.</p>
						</div>
					</div>

					<div class="accordion-item" id="question6">
						<a class="accordion-link" href="#question6">
							Comment lancer une session de test ?
							<i class="icon ion-md-add"></i>
							<i class="icon ion-md-remove"></i>
						</a>
						<div class="reponse">
							<p>Réponse6
							Pour lancer une session de test veuillez d’abord vous connecter puis cliquer dans le menu déroulant sur Test.<br>
							Cliquer alors sur « Lancer une session » de test.Il est nécessaire d’avoir son boitier allumé. Celui-ci enverra les résultats fournis.<br>
							Une fois que la session est fini cliquez sur « Test suivant ». Une fois que les tests sont terminés vous pourrez alors voir vos résultats.</p>
						</div>
					</div>

					<div class="accordion-item" id="question7">
						<a class="accordion-link" href="#question7">
							Puis je voir mes résultats ?
							<i class="icon ion-md-add"></i>
							<i class="icon ion-md-remove"></i>
						</a>
						<div class="reponse">
							<p>Réponse7
							Vous pouvez voir vos résultats ainsi que les résultats généraux sur la page statistique.</p>
						</div>
					</div>

					<div class="accordion-item" id="question8">
						<a class="accordion-link" href="#question8">
							A qui puis je m’adressez en cas de problème ?
							<i class="icon ion-md-add"></i>
							<i class="icon ion-md-remove"></i>
						</a>
						<div class="reponse">
							<p>Réponse8
							En cas de problème vous pouvez vous rendre sur le forum d’Ability Test et posez vos questions.<br>
							Sinon vous pouvez vous rendre sur la page blba et nous serons alors ravi de vous répondre. 
							</p>
						</div>
					</div>

					<div class="accordion-item" id="question9">
						<a class="accordion-link" href="#question9">
							Que faites-vous de mes données ?
							<i class="icon ion-md-add"></i>
							<i class="icon ion-md-remove"></i>
						</a>
						<div class="reponse">
							<p>Réponse9
							Vos données ne sont pas revendues. Nous collectons vos données pour des analyses de mesures,<br>7
							et afin d’améliorer nos produits.
							</p>
						</div>
					</div>


				</div>
			</div>

			<div id="side-menu" class="side-nav">
			    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a> 
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

