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
			<th>Affecte au secteur</th>
			<th>telephone</th>
			
		<tr>
		<?php
			$baseDonneeAPP=new PDO('mysql:host=localhost; dbname=app','mathieu','ariane5');
			$tablePolicier=$baseDonneeAPP->query('SELECT * FROM policier');
			while($donneePolicier=$tablePolicier->fetch()){
				?>
				<tr>
					<td>
					<?php echo $donneePolicier['lastNameCop']; ?>
					</td>
					<td>
					<?php echo $donneePolicier['firstNameCop']; ?>
					</td>
					<td>
					<?php 
					echo $donneePolicier['emailCop'];
					?>
					</td>
					<td>
					<?php echo $donneePolicier['telephoneCop']; ?>
					</td>
					<td>
					<a href="detailComptePolicierPourAdmin.php?Userid=<?php echo $donneePolicier['idCop']; ?>">Detail</a>
					</td>
					<td>
					<a href="actionSuppresionPolicierDeAdmin.php?Userid=<?php echo $donneePolicier['idCop'];?>">Supprimer cet utilitaire</a>
					</td>
				</tr>
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
</html>
