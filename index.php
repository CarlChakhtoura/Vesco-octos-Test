<!DOCTYPE html>

<html>
	<head>
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/choixrole.css" >
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Pour que les accents s'affichent correctement-->
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<link href="C:\Users\HP\Desktop\fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ability Test </title>
	</head>

	
	<body>
		<h2>Se connecter en tant que</h2>
		<div class="box">
			<form method="POST" action="choixrole.php">
			<select name="role">
				<option value="particulier">Particulier</option>
				<option value="policier">Policier</option>
				<option value="administrateur">Administrateur</option>
			</select>
			    
                <input type="submit"  value="envoyer">
                <p class="GO" type="submit"  value="envoyer"> <strong>GO</strong></p>
			</form>
		</div>
	</body>

	<footer>
		<p class="infofooter">© Ability Test - Toute reproduction interdite. Propriété intellectuelle de Infinity Mesures.</p>
	</footer>

</html>