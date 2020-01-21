<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="en">
<head>
    <title> Ability Test </title>
    <link media="screen" rel="stylesheet" href="css/inscriptionparticulieradmin.css" >
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Pour que les accents s'affichent correctement-->
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ability Test </title>
  </head>
<body>

<div class="wrapper">
    <div class="title">
      Inscription policier pour les administrateurs
    </div>
    <div class="form">
	<form method="POST" action="traitementInscriptionPolicierAdmin.php">
       <div class="inputfield">
          <label>Nom</label>
          <input type="text" class="input" name="nom">
       </div>  
        <div class="inputfield">
          <label>Prénom</label>
          <input type="text" class="input" name="prenom">
       </div>  
       <div class="inputfield">
          <label>Mot de passe</label>
          <input type="password" class="input" name="motDePasse1">
       </div>  
        <div class="inputfield">
          <label>Adresse mail</label>
          <input type="text" class="input" name="email">
       </div> 
      <div class="inputfield">
          <label>Numéro téléphone</label>
          <input type="text" class="input" name="telephone">
       </div> 
      <div class="inputfield">
          <label>Station de police</label>
          <textarea class="textarea" name="policeStation"></textarea>
       </div> 
 
      <div class="inputfield">
        <input type="submit" name="Inscription" value="Inscription" class="btn">
      </div>
	 </form>
	 <div class="retourConnexion">
			<br>
	      	 <p><a href="gestionadmin.php">Retour à la page de la gestion des administrateurs</a></p>
	 </div>
    </div>
</div>	
	
</body>
</html>