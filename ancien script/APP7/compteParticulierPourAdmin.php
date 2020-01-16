<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="compteParticulierPourAdmin.css" rel="stylesheet"/>
	</head>
	<body>
		<img class="fond" src="fond_admininistrateur.png" alt="monfond"/>
		<table>
		<tr>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Sexe</th>
			<th>Email</th>
			<th>Nationalite</th>
			<th>Pays de residence</th>
			<th>Adresse</th>
			<th>Code Postal</th>
			<th>Telephone</th>
			<th>Detail</th>
			<th>Supprimer cet utilitaire</th>
		<tr>
		<?php
			$baseDonneeAPP=new PDO('mysql:host=localhost; dbname=app','mathieu','ariane5');
			$tableParticulier=$baseDonneeAPP->query('SELECT * FROM particulier');
			while($donneeParticulier=$tableParticulier->fetch()){
				?>
				<tr>
					<td>
					<?php echo $donneeParticulier['Lastname']; ?>
					</td>
					<td>
					<?php echo $donneeParticulier['Firstname']; ?>
					</td>
					<td>
					<?php 
					if ($donneeParticulier['Sexe']==1){
						echo "Homme";
					}
					else{
						echo "Femme";
					} ?>
					</td>
					<td>
					<?php echo $donneeParticulier['Email']; ?>
					</td>
					<td>
					<?php echo $donneeParticulier['nationalite']; ?>
					</td>
					<td>
					<?php echo $donneeParticulier['pays_residence']; ?>
					</td>
					<td>
					<?php echo $donneeParticulier['adresse']; ?>
					</td>
					<td>
					<?php echo $donneeParticulier['code_postal']; ?>
					</td>
					<td>
					<?php echo $donneeParticulier['telephone']; ?>
					</td>
					<td>
					<a href="detailCompteParticulierPourAdmin.php?Userid=<?php echo $donneeParticulier['Userid']; ?>">Detail</a>
					</td>
					<td>
					<a href="actionSuppresionUtilitaireDeAdmin.php?Userid=<?php echo $donneeParticulier['Userid'];?>">Supprimer cet utilitaire</a>
					</td>
				</tr>
				
				<a href='administrateir_gestion.php'/><button> RETOUR <button></a>
			<?php }
		?>
		<tr>
			<td>
			<a href="administrateur_gestion.php">Retour au menu</a>
			</td>
		</tr>
		</table>
	</body>
</html>