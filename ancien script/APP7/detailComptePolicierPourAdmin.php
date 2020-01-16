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
			
			$tablePolicier=$baseDonneeAPP->prepare('SELECT * FROM policier WHERE idCop=?');
			$tablePolicier->execute(array($_GET['Userid']));
			$donneePolicier=$tablePolicier->fetch();
			?>
		<tr>
			<td>Nom</td>
			<td>
			<?php echo $donneePolicier['lastNameCop']; ?>
			</td>
		</tr>
		<tr>
			<td>Prenom</td>
			<td>
			<?php echo $donneePolicier['firstNameCop']; ?>
			</td>		
		</tr>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<?php echo $donneePolicier['emailCop']; ?>
			</td>
			
		</tr>
		<tr>
			<td>Telephone</td>
			<td>
				<?php echo $donneePolicier['telephoneCop']; ?>
			</td>
		</tr>
		<tr>
			<td>Commisariat</td>
			<td>
				<?php echo $donneePolicier['policeStation']; ?>
			</td>
		</tr>
		<tr>
			<td>
			<a href="actionSuppresionPolicierDeAdmin.php?Userid=<?php echo $donneePolicier['idCop'];?>">Supprimer cet utilitaire</a>
			</td>
			<td>
			<a href="comptePolicierPourAdmin.php">Retour</a>
			</td>
		</tr>
		
		</table>
		
	</body>
</html>