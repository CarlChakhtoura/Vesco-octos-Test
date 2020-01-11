<!DOCTYPE html>
<?php session_start(); 
	casEchec($_SESSION["echec"]);
	$_SESSION["echec"]=0;
?>
<html lang="en">
<head>
    <meta charset="utf-8/">
    <title> Ability Test </title>
    <link media="screen" rel="stylesheet" href="css/inscription.css" >
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ability Test </title>
  </head>
<body>

<div class="wrapper">
    <div class="title">
      Inscription
    </div>
    <div class="form">
	<form method="POST" action="inscription.php">
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
          <label>Confirmation mot de passe</label>
          <input type="password" class="input" name="motDePasse2">
       </div> 
        <div class="inputfield">
          <label>Sexe</label>
          <div class="custom_select">
            <select name="sexe">
              <option value="">Selectionnez</option>
              <option value="male">Homme</option>
              <option value="female">Femme</option>
            </select>
          </div>
       </div>
        <div class="inputfield">
          <label>Adresse mail</label>
          <input type="text" class="input" name="email">
       </div> 
      <div class="inputfield">
          <label>Numéro téléphone</label>
          <input type="text" class="input" name="tel">
       </div> 
      <div class="inputfield">
          <label>Adresse</label>
          <textarea class="textarea" name="adresse"></textarea>
       </div> 
      <div class="inputfield">
          <label>Code postale</label>
          <input type="text" class="input" name="codePostal">
       </div>
	<div class="inputfield">
          <label>Pays</label>
          <div class="pays">
            <select name="nationalite">
              <option value="">Selectionnez</option>
              <option value="France">France</option>
              <option value="Maroc">Maroc</option>
            </select>
          </div>
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>J'accepte les terms & conditions du site</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Inscription" class="btn">
      </div>
	 </form>
	 <div class="retourConnexion">
			<br>
	      	 <p><a href="connexion_particulier.html">Retour à la page de connexion</a></p>
	 </div>
    </div>
</div>	
	
</body>
</html>
<?php 
	function casEchec($numeroDeLechec){
		//echec mot de passe
		if($numeroDeLechec==1){
			?>
			<script>
				alert("votre mot de passe doit contenir: 8 caractères dont une minuscule, un caractere speciale (@-:!&) ou une majuscule, et un chiffre");
			</script>
			<?php
		}
		
		//echec telephone
		else if($numeroDeLechec==2){
			?>
			<script>
				alert("votre numero de telephone non valide");
			</script>
			<?php
		}
		else{
		}
	}
?>