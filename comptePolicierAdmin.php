<!DOCTYPE html>
<html>
	<head>
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="css/comptepolicieradmin.css" >
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Pour que les accents s'affichent correctement-->
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
						<a href="deconnexion.php">Déconnexion</a>
					</div>
				</div>
			</div>

			<div class="contenusite">

				<h1>Gérer les comptes policiers</h1>

				<div class="res-tab">
					<table>
						<tbody>
						<tr>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Mail</th>
								<th>Commissariat</th>
								<th>Téléphone</th>
								<th>Supprimer cet utilisateur</th>
						</tr>
						<?php
						$baseDonneeAPP=new PDO('mysql:host=localhost; dbname=app','root','');
						$tablePolicier=$baseDonneeAPP->query('SELECT * FROM policier');
						while($donneePolicier=$tablePolicier->fetch()){
							?>
							<tr>
								<td>
								<?php echo decryptageDuNom($donneePolicier['lastNameCop']); ?>
								</td>
								<td>
								<?php echo decryptageDuNom($donneePolicier['firstNameCop']); ?>
								</td>
								<td>
								<?php echo $donneePolicier['emailCop']; ?>
								</td>
								<td>
								<?php echo decryptageDeLAdresse($donneePolicier['policeStation']); ?>
								</td>
								<td>
								<?php echo $donneePolicier['telephoneCop']; ?>
								</td>
								<td>
								<a href="actionSuppresionPolicierDeAdmin.php?Userid=<?php echo $donneePolicier['idCop'];?>">Supprimer cet utilitaire</a>
								</td>
							</tr>
						<?php }
						?>
						</tbody>
					</table>
				</div>
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
				      <li><a href="https://form.jotform.com/200181736367354" target="_blank">Contactez-nous</a></li>
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
		?>

</html>

