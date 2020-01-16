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

		<?php
			$baseDonneeAPP=new PDO('mysql:host=localhost; dbname=app','mathieu','ariane5');
			
			$tableParticulier=$baseDonneeAPP->prepare('SELECT * FROM particulier WHERE Userid=?');
			$tableParticulier->execute(array($_GET['Userid']));
			$donneeParticulier=$tableParticulier->fetch();
			?>
		<tr>
			<td>Nom</td>
			<td>
			<?php echo $donneeParticulier['Lastname']; ?>
			</td>
		</tr>
		<tr>
			<td>Prenom</td>
			<td>
			<?php echo $donneeParticulier['Lastname']; ?>
			</td>		
		</tr>
		<tr>
			<td>Sexe</td>
			<td>
					<?php 
					if ($donneeParticulier['Email']==1){
						echo "Homme";
					}
					else{
						echo "Femme";
					} ?>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<?php echo $donneeParticulier['Email']; ?>
			</td>
			
		</tr>
		<tr>
			<td>Nationalite</td>
			<td>
				<?php echo $donneeParticulier['nationalite']; ?>
			</td>
		</tr>
		<tr>
			<td>Pays de residence</td>
			<td>
				<?php echo $donneeParticulier['pays_residence']; ?>
			</td>
		</tr>
		<tr>
			<td>Adresse</td>
			<td>
				<?php echo $donneeParticulier['adresse']; ?>
			</td>
		</tr>
		<tr>		
			<td>Code Postal</td>
			<td>
				<?php echo $donneeParticulier['code_postal']; ?>
			</td>
		</tr>
		<tr>
			<td>Telephone</td>
			<td>
				<?php echo $donneeParticulier['telephone']; ?>
			</td>
		
		</table>
		<p>
		<a href="actionSuppresionUtilitaireDeAdmin.php?Userid=<?php echo $_GET['Userid'];?>">Supprimer cet utilitaire</a>
		</p>
			<?php 
		?>
		</table>
	</body>
</html>