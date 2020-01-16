<?php session_start() ?>
<html>
	<head>
		<meta charset='utf8'/>
	</head>

	<body>
		
<?php
	$baseDeDonnee=new PDO('mysql:host=localhost; dbname=forum','mathieu','ariane5');
	$req1=$baseDeDonnee->prepare('SELECT * FROM liste_sujet WHERE topicSubject=?');
	$req1->execute(array($_GET['sujet']));
	$donnee=$req1->fetch();
	
	$idConversation=$donnee['id'];
?>
		<div>
			
			<h3><?php echo $donnee['topicSubject']?> <small>by <?php echo $donnee['author']?> posted: <?php echo $donnee['dateCreation']?></small></h3>
			<p>
			<?php echo $donnee['Content']?>
			</p>
		</div>
<?php
	$monSujet=$_GET['sujet'];
	$req1->closeCursor();
	
	//----------------------------
	
	$req1=$baseDeDonnee->prepare('SELECT * FROM conversation WHERE id=?');
	$req1->execute(array($idConversation));
	while($conv=$req1->fetch()){
?>
		<div>
			<h3><?php echo $conv['author']?> Posted <?php echo $conv['datePost']?></h3>
			<p>
			<?php echo $conv['content']?>
			</p>
			
		</div>
<?php 
		}
?>
	<a href="sujetsforum.php">Revenir la page d accueil</a>
	<hr/>
	<form action="action.php?sujet=<?php echo $monSujet; ?>" method="post">
		<label for="pseudo">Pseudo <input type="text" name="pseudo"/><br>
		<label for="maReponse">Ma reponse <input type="textarea" name="maReponse" style="width: 500px; height: 300px"/><br>
		<input type="submit" value="Envoyer">
	<form>
	
	<nav>
		<a href="sujetsforum.php">Revenir a la page d accueil</a>
	</nav>
	</div>
	</body>
</html>