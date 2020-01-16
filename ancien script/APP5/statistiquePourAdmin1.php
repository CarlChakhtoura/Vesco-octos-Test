<!DOCTYPE>
<?php
	session_start();
?>
  <html>
    <head>
      <meta charset="utf-8">
      <script src="chart.min.js"></script>
	  <link href="statistiquePourAdmin1.css" rel="stylesheet">
    </head>
    <body>
	<table>
	<tr>
	<td>
	<div class="conteneur">
      <div class="blanc">
        <canvas id="myChart">
			<script>
			var myContext = document.getElementById("myChart");
			var myChartConfig = {
			type: 'bar',
			data: {
			labels: ["Statistiques de controles attendues"],
			datasets: [
			{
			label: "Personnes testees au seuil de 75%",
			data: [204]
			},{
			label: "Personnes testees au seuil de 75%",
			data: [504]
			},{
			label: "Personnes testes au seuil de 50%",
			data: [307]
			},{
			label: "Personnes testes au seul de 25%",
			data: [120]
			},{
			label: "Personnes testes au seul de 0%",
			data: [45]
			}
			]
			}
			}
			var myChart = new Chart(myContext, myChartConfig);
			</script>
		</canvas>
		
	</div>
	<div class="reduit">
	<img src="mortRoute.jpg" alt="mort diagramme"/>
	</div>
	</div>
	<tr>
	<td>
		<?php
	$bdd= new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'mathieu', 'ariane5');
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
	<td>
	<a href="administrateur_gestion.php">Retour au menu principal</a>
	</td>
	</tr>
	</table>
  </body>
</html>