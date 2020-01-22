<?php
	$baseDeDonnee=new PDO('mysql:host=localhost; dbname=forum','root','');
	$req=$baseDeDonnee->prepare('UPDATE FROM conversation SET content=? WHERE idConversation=?');
	$req->execute(array($_GET['idConversation']));
	header('Location:gestionForumA.php');
?>