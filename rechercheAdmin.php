<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/rechercheadmin.css" >
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Pour que les accents s'affichent correctement-->
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<title>Ability Test </title>
	</head>

	<body>
			<div class="header">
				<div class="elementsduheader">
					<span class="open-slide">
						      <a href="#" onclick="openSlideMenu()">
						        <svg width="30" height="30">
						            <path d="M0,5 30,5" stroke="black" stroke-width="5"/>
						            <path d="M0,14 30,14" stroke="black" stroke-width="5"/>
						            <path d="M0,23 30,23" stroke="black" stroke-width="5"/>
						        </svg>
						      </a>
						    </span>
					<div class="contenudulogo">
						<h1>ABILITY TEST</h1>
						<a href="">Déconnexion</a>
					</div>
				</div>
			</div>

			<div class="contenusite">

				<h2>Recherche: </h2>

				<div class="wrapper">
					<div class="search_box">
					<form method="GET">
						<input type="text" placeholder="Veuillez marquer le nom ou prénom" name="entree">
						<i class="fas fa-search"></i>
					</form>
					</div>
				</div>
				
				<?php
				$bdd= new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
				$resultat=0;
				
				if (isset($_GET['entree']) AND !empty($_GET['entree'])){
					$entree=cryptageDuNom(htmlspecialchars($_GET['entree']));
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
							
						<div class="res-tab">
							<table>
									<tbody>
										
										<tr>
										<td><?php echo decryptageDuNom($particulier["Lastname"]);?></td>
										<td><?php echo decryptageDuNom($particulier["Firstname"]);?></td>
										<td><?php echo $particulier["Email"];?></td>
										<td><?php 
										if($particulier["Sexe"]==1){
										echo "Homme";}
										else{
											echo "Femme";
										}
										?></td>
										<td><?php echo $particulier["nationalite"];?></td>
										<td><?php echo $particulier["pays_residence"];?></td>
										<td><?php echo decryptageDeLAdresse($particulier["adresse"]);?></td>
										<td><?php echo $particulier["code_postal"];?></td>
										<td><?php echo $particulier["telephone"];?></td>
									</tr>
								</tbody>
							</table>
						</div>

				
						<?php	}
						}
						else{//on est dans le cas plusieurs resultats
						//mais parfois on tape mathieu pavaut
						//mais on ne veut que 1 resultat
							$resultat=1;
							$monArray=array();
							if(empty($entree_array[1])){ //ici on n a entrer par exemple que pavaut donc on ne veut pas restreindre
								while($particulier=$requete1->fetch()){ ?>
								<div class="res-tab">
							<table>
									<tbody>
										
										<tr>
										<td><?php echo decryptageDuNom($particulier["Lastname"]);?></td>
										<td><?php echo decryptageDuNom($particulier["Firstname"]);?></td>
										<td><?php echo $particulier["Email"];?></td>
										<td><?php 
										if($particulier["Sexe"]==1){
										echo "Homme";}
										else{
											echo "Femme";
										}
										?></td>
										<td><?php echo $particulier["nationalite"];?></td>
										<td><?php echo decryptageDeLAdresse($particulier["pays_residence"]);?></td>
										<td><?php echo $particulier["adresse"];?></td>
										<td><?php echo $particulier["code_postal"];?></td>
										<td><?php echo $particulier["telephone"];?></td>
									</tr>
								</tbody>
							</table>
						</div>

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
								<div class="res-tab">
							<table>
									<tbody>
										
										<tr>
										<td><?php echo decryptageDuNom($particulier["Lastname"]);?></td>
										<td><?php echo decryptageDuNom($particulier["Firstname"]);?></td>
										<td><?php echo $particulier["Email"];?></td>
										<td><?php 
										if($particulier["Sexe"]==1){
										echo "Homme";}
										else{
											echo "Femme";
										}
										?></td>
										<td><?php echo $particulier["nationalite"];?></td>
										<td><?php echo $particulier["pays_residence"];?></td>
										<td><?php echo $particulier["adresse"];?></td>
										<td><?php echo $particulier["code_postal"];?></td>
										<td><?php echo $particulier["telephone"];?></td>
									</tr>
								</tbody>
							</table>
						</div>

						<?php	}
						}
						else{//on est dans le cas plusieurs resultats
						//mais parfois on tape mathieu pavaut
						//mais on ne veut que 1 resultat
							$resultat=1;
							$monArray=array();
							if(empty($entree_array[1])){ //ici on n a entrer par exemple que mathieu donc on ne veut pas restreindre
								while($particulier=$requete2->fetch()){ ?>
								<div class="res-tab">
							<table>
									<tbody>
										
										<tr>
										<td><?php echo $particulier["Lastname"];?></td>
										<td><?php echo $particulier["Firstname"];?></td>
										<td><?php echo $particulier["Email"];?></td>
										<td><?php 
										if($particulier["Sexe"]==1){
										echo "Homme";}
										else{
											echo "Femme";
										}
										?></td>
										<td><?php echo $particulier["nationalite"];?></td>
										<td><?php echo $particulier["pays_residence"];?></td>
										<td><?php echo $particulier["adresse"];?></td>
										<td><?php echo $particulier["code_postal"];?></td>
										<td><?php echo $particulier["telephone"];?></td>
									</tr>
								</tbody>
							</table>
						</div>

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
							<div class="res-tab">
							<table>
									<tbody>
										
										<tr>
										<td><?php echo decryptageDuNom($particulier["Lastname"]);?></td>
										<td><?php echo decryptageDuNom($particulier["Firstname"]);?></td>
										<td><?php echo $particulier["Email"];?></td>
										<td><?php 
										if($particulier["Sexe"]==1){
										echo "Homme";}
										else{
											echo "Femme";
										}
										?></td>
										<td><?php echo $particulier["nationalite"];?></td>
										<td><?php echo decryptageDeLAdresse($particulier["pays_residence"]);?></td>
										<td><?php echo $particulier["adresse"];?></td>
										<td><?php echo $particulier["code_postal"];?></td>
										<td><?php echo $particulier["telephone"];?></td>
									</tr>
								</tbody>
							</table>
						</div>

						<?php	}
						
						$requete3->closeCursor();
						}
					}
				}
				if($resultat==0){
					echo "Aucun resultat";
				}
				?>
			<br>
			<a class="retoursite" href="gestionAdmin.php">Retour au menu</a>


			</div>

			  <script>
			    function openSlideMenu(){
			      document.getElementById('side-menu').style.width = '250px';
			      document.getElementById('main').style.marginLeft = '250px';
			    }

			    function closeSlideMenu(){
			      document.getElementById('side-menu').style.width = '0';
			      document.getElementById('main').style.marginLeft = '0';
			    }
			  </script>

			<div class="footer">
				<div class="contain">
				  <div class="col">
				    <h1>Ability Test</h1>
				    <ul>
				      <li><a href="contactnous.html">Contactez-nous</a></li>
				      <li><a href="cgu.html" target="_blank">CGU</a></li>
				    </ul>
				  </div>
				<div class="clearfix"></div>
			</div>
		</div>
	</body>

	<?php
		function decryptageDeLAdresse($motAConvertir){
			$monArray=array();
			for( $i=0; $i<strlen($motAConvertir);$i++){
				//derniers caracat
				if(ord($motAConvertir[$i])==97){
					array_push($monArray,122);//on met un a minuscule si on a v
				}
				else if(ord($motAConvertir[$i])==98){
					array_push($monArray,121);
				}
				else if(ord($motAConvertir[$i])==99){
					array_push($monArray,120);
				}
				else if(ord($motAConvertir[$i])==100){
					array_push($monArray,119);
				}
				else if(ord($motAConvertir[$i])==101){
					array_push($monArray,118);
				}
				else if(ord($motAConvertir[$i])==65){//on met un A maj en cas de V maj
					array_push($monArray,90);
				}
				else if(ord($motAConvertir[$i])==66){
					array_push($monArray,89);
				}
				else if(ord($motAConvertir[$i])==67){
					array_push($monArray,88);
				}
				else if(ord($motAConvertir[$i])==68){
					array_push($monArray,87);
				}
				else if(ord($motAConvertir[$i])==69){
					array_push($monArray,86);
				}
				else if(ord($motAConvertir[$i])==37){//cas de l espace
					array_push($monArray,37);
				}
				else{
					array_push($monArray,ord($motAConvertir[$i])-5);
				}
			}
			//maintenant on veut creer un string
			$mot="";
			$mot="";
			for($j=0;$j<strlen($motAConvertir);$j++){
				$mot=$mot.chr($monArray[$j]);
			}
			return $mot;
		}
	
	
	function decryptageDuNom($motAConvertir){
			$monArray=array();
			for( $i=0; $i<strlen($motAConvertir);$i++){
				if(ord($motAConvertir[$i])==97){
					array_push($monArray,122);//on met un a minuscule si on a v
				}
				else if(ord($motAConvertir[$i])==98){
					array_push($monArray,121);
				}
				else if(ord($motAConvertir[$i])==99){
					array_push($monArray,120);
				}
				else if(ord($motAConvertir[$i])==65){//on met un A maj en cas de V maj
					array_push($monArray,98);
				}
				else if(ord($motAConvertir[$i])==66){
					array_push($monArray,99);
				}
				else if(ord($motAConvertir[$i])==67){
					array_push($monArray,100);
				}
				else{
					array_push($monArray,ord($motAConvertir[$i])-3);
				}
			}
			$mot="";
			$mot="";
			for($j=0;$j<strlen($motAConvertir);$j++){
				$mot=$mot.chr($monArray[$j]);
			}
			return $mot;
		}
		
		function cryptageDuNom($motAConvertir){
			$monArray=array();
			for( $i=0; $i<strlen($motAConvertir);$i++){
				if(ord($motAConvertir[$i])==120){
					array_push($monArray,97);//on met un a minuscule si on a v
				}
				else if(ord($motAConvertir[$i])==121){
					array_push($monArray,98);
				}
				else if(ord($motAConvertir[$i])==122){
					array_push($monArray,99);
				}
				else if(ord($motAConvertir[$i])==88){//on met un A maj en cas de V maj
					array_push($monArray,65);
				}
				else if(ord($motAConvertir[$i])==89){
					array_push($monArray,66);
				}
				else if(ord($motAConvertir[$i])==35){
					array_push($monArray,32);
				}
				else{
					array_push($monArray,ord($motAConvertir[$i])+3);
				}
			}
			$mot="";
			$mot="";
			for($j=0;$j<strlen($motAConvertir);$j++){
				$mot=$mot.chr($monArray[$j]);
			}
			return $mot;
		}
	?>
</html>

