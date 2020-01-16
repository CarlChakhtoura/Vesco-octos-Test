<?php
	session_start();
	
	$bdd=new PDO('mysql:host=localhost; dbname=forum; metacharset=utf8','mathieu','ariane5');
	
	$author=htmlspecialchars($_POST['pseudo']);
	$topicSubject=htmlspecialchars($_POST['nomProbleme']);
	$content=htmlspecialchars($_POST['content']);
	$dateCreation=strftime('%Y-%m-%d %H:%M:%S');
	
	$req=$bdd->prepare('INSERT INTO liste_sujet (topicSubject,Content,dateCreation,author) VALUES(:topicSubject,:Content,:dateCreation,:author)');
	$req->execute(array(
		topicSubject=>$topicSubject,
		Content=>$content,
		dateCreation=>$dateCreation,
		author=>$author,
		));
	
	header('Location:sujetsforum.php');
?>