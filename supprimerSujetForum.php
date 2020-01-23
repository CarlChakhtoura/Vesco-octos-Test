<?php
	$baseDeDonnee=new PDO('mysql:host=localhost; dbname=forum','root','');
	$suppression=$baseDeDonnee->prepare('DELETE FROM conversation WHERE idConversation=?');
	$suppression->execute(array($_GET['idConversation']));
	header('Location:gestionForumA.php');
?>