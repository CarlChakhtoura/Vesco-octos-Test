<?php
	session_start();
?>
<DOCTYPE! html>
<html>
	<head>
	<meta charset="utf-8">
	<link href="statistiquePourAdmin.css" rel="stylesheet"/>
	</head>
	<body>
	
	<img class="fond" src="fond_admininistrateur.png" alt="monfond"/>
		<div class="premiere">
		<table>
			<tr>
				<td>
					Nombre de personnes connectees
				</td>
			</tr>
			<tr>
			
				<td>
					Nombre de personnes ayant un compte
				</td>
			</tr>
				<td>
					Utilisation en fonction de la plage horaire
						<table>
							<tr>
								<td>
								Nuit:22h-7h
								</td>
								<td>
								bbbbbb
								</td>
							</tr>
							<tr>
								<td>
								Matin:7h-12h
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
								Apres-midi: 12h-17h
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
								Soiree: 17h-18h
								</td>
								<td>
								</td>
							</tr>
							</tr>
				
						</table>
				</td>
				</tr>
				<tr>
					<td>Faire une recherche par nom/prenom/Email d un eventuel utilisateur</td>
					<td>
					<?php
						$bdd= new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'mathieu', 'ariane5');
						/*$tableParticulier=$bdd->query('SELECT * FROM particulier');
						$tablePolicier=$bdd->query('SELECT * FROM policier');
						$tableTestParticulier=$bdd->query('SELECT * FROM testparticulier');
						$tableTestPolicier=$bdd->query('SELECT * FROM testpolicier');*/
	
						/*
						Fonctionnnement du script le 1 sert a eviter la redondance & afficher que l on a aucun resultat dans la mesure
						ou il y a un autre else
						il permet surtout d eviter que je mette des redondances*
						*/
						/*
						Fonctionne bien avec 2 clefs (2 mots dans la recherche)
						ON peut faire des recherches en fonctions du nom/ prenom/mail...
						Les mails sont decorreles des nom/prenom
						*/
	
	$resultat=0;
	?>
	
	<form method="GET">
		<input type="search" placeholder="Recherche..." name="entree"/>
		<input type="submit" value="valider"/>
	</form>
	<?php
	if (isset($_GET['entree']) AND !empty($_GET['entree'])){
		$entree=htmlspecialchars($_GET['entree']);
		$entree_array=explode(' ',$entree);
		
		//---------------------------------------------------------------------------------------------------------------------------------
		foreach($entree_array as $entree){
			$entree=trim($entree);
			//echo $entree."<br>";
			$requete1=$bdd->query('SELECT * FROM particulier WHERE Lastname LIKE "%'.$entree.'%" ');
			if($requete1->rowCount()>0){
			$a=$requete1->rowCount();
			if($a==1){
				$resultat=1;
				while($particulier=$requete1->fetch()){ ?>
					<table>
					<tr>
					<td>
					Nom de famille
					</td>
					<td>
					<li><?php echo $particulier['Lastname']."<br>"; ?></li>
					</td>
					</tr>
					<tr>
					<td>
					Prenom
					</td>
					<td>
					<li><?php echo $particulier['Firstname']."<br>"; ?></li>
					</td>
					</tr>
					</table>
	
			<?php	}
			}
			else{//on est dans le cas plusieurs resultats
			//mais parfois on tape mathieu pavaut
			//mais on ne veut que 1 resultat
				$resultat=1;
				$monArray=array();
				if(empty($entree_array[1])){ //ici on n a entrer par exemple que pavaut donc on ne veut pas restreindre
					while($particulier=$requete1->fetch()){ ?>
					<table>
					<tr>
					<td>
					Nom de famille
					</td>
					<td>
					<li><?php echo $particulier['Lastname']."<br>"; ?></li>
					</td>
					</tr>
					<tr>
					<td>
					Prenom
					</td>
					<td>
					<li><?php echo $particulier['Firstname']."<br>"; ?></li>
					</td>
					</tr>
					</table>
				<?php 
					}
					}
				else{
					//la on a entre pavaut mathieu on veut restreindre
					//de ce fait ou on le trouve et on break ou on ne le trouve pas
					//et en ce cas on renvoie notre 0
					$nombreDeResultat=$requete1->rowCount();
					while($particulier=$requete1->fetch()){
					array_push($monArray, $particulier['Firstname']);
					}
					while($nombreDeResultat>0){
						$i=0;
						if($monArray[$i]==$entree_array[1]){
							echo $entree_array[0];
							echo "<br>";
							echo $monArray[$i];
							break;
						}
						$nombreDeResultat=$nombreDeResultat-1;
						$i++;
					}
					$resultat=0;
				}
			}
			$requete1->closeCursor();
			}
		}
		
		//---------------------------------------------------------------------------------------------------------------------------------
		foreach($entree_array as $entree){
			$entree=trim($entree);
			//echo $entree."<br>";
			$requete2=$bdd->query('SELECT * FROM particulier WHERE Firstname LIKE "%'.$entree.'%" ');
			if($requete2->rowCount()>0 && $resultat!=1){//on a des resultats
			
			$a=$requete2->rowCount();
			if($a==1){ //on a un seul resultat jamais affiche auparavant
				$resultat=1;
				while($particulier=$requete2->fetch()){ ?>
					<table>
					<tr>
					<td>
					Nom de famille
					</td>
					<td>
					<li><?php echo $particulier['Lastname']."<br>"; ?></li>
					</td>
					</tr>
					<tr>
					<td>
					Prenom
					</td>
					<td>
					<li><?php echo $particulier['Firstname']."<br>"; ?></li>
					</td>
					</tr>
					</table>
	
			<?php	}
			}
			else{//on est dans le cas plusieurs resultats
			//mais parfois on tape mathieu pavaut
			//mais on ne veut que 1 resultat
				$resultat=1;
				$monArray=array();
				if(empty($entree_array[1])){ //ici on n a entrer par exemple que mathieu donc on ne veut pas restreindre
					while($particulier=$requete2->fetch()){ ?>
					<table>
					<tr>
					<td>
					Nom de famille
					</td>
					<td>
					<li><?php echo $particulier['Lastname']."<br>"; ?></li>
					</td>
					</tr>
					<tr>
					<td>
					Prenom
					</td>
					<td>
					<li><?php echo $particulier['Firstname']."<br>"; ?></li>
					</td>
					</tr>
					</table>
				<?php 
					}
					}
				else{
					//la on a entre mathieu pavaut on veut restreindre
					//de ce fait ou on le trouve et on break ou on ne le trouve pas
					//et en ce cas on renvoie notre 0
					$nombreDeResultat=$requete2->rowCount();
					while($particulier=$requete2->fetch()){
					array_push($monArray, $particulier['Lastname']);
					}
					while($nombreDeResultat>0){
						$i=0;
						if($monArray[$i]==$entree_array[1]){
							echo $entree_array[0];
							echo "<br>";
							echo $monArray[$i];
							break;
						}
						$nombreDeResultat=$nombreDeResultat-1;
						$i++;
					}
					$resultat=0;
				}
			}
			$requete2->closeCursor();
			}
		}
		
		//---------------------------------------------------------------------------------------------------------------------------------
		foreach($entree_array as $entree){
			$entree=trim($entree);
			//echo $entree."<br>";
			$requete3=$bdd->query('SELECT * FROM particulier WHERE Email LIKE "%'.$entree.'%" ');
			if($requete3->rowCount()>0 && $resultat!=1){
			$resultat=1;
			while($particulier=$requete3->fetch()){ ?>
				<table>
				<tr>
				<td>
				Nom de famille
				</td>
				<td>
				<li><?php echo $particulier['Lastname']."<br>"; ?></li>
				</td>
				</tr>
				<tr>
				<td>
				Prenom
				</td>
				<td>
				<li><?php echo $particulier['Firstname']."<br>"; ?></li>
				</td>
				</tr>
				</table>
	
			<?php	}
			
			$requete3->closeCursor();
			}
		}
		}
		if($resultat==0){
			echo "Aucun resultat";
		}
		?>
					</td>
				</tr>
		</table>
		<table>
				<tr>
				<td>
					<a href="administrateur_gestion.php">Retour au menu principal</a>
				</td>
				</tr>
			</tr>
		</table>
		</div>
	</body>
</html>
