<?php session_start();
	?>
<!DOCTYPE html>
<!-- saved from url=(0053)file:///C:/Users/mathi/Downloads/creersujetforum.html -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link href="creersujetforum.css" rel="stylesheet">
		<title>Ability Test </title>
	
	

	<body>
		<?php
			if(isset($_GET["cert"])==false || $_GET["cert"]!=5){
			}
			else{
		?>
			<div class="creersujet">
				<form method="post" action="action2.php">
			     <label>Nom du probleme: </label>
					<input type="text" name="nomProbleme"/><br>
					<label>Pseudo: </label>
					<input type="text" name="pseudo"/><br>
				  <label>Sujet: </label>
					<textarea class="sujet" name="content" rows="50" cols="50"></textarea>
					<input type="submit" class="validersujet" value="Valider">
				</form>
			</div>
	
	    <!----------------------------------------------------------------------------------------------------------------------------------------------------------- -->
	<?php
			}
	?>
	</body>
	</html>