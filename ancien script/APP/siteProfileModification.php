<?php
	session_start();

	$baseDeDonnee=new PDO('mysql:host=localhost;dbname=APP;charset=utf8', 'mathieu','ariane5');
	$placement=$baseDeDonnee->prepare("UPDATE  particulier SET Lastname= :nLastname, Firstname= :nFirstname, Email= :nEmail, password= :npassword  WHERE Userid=".$_SESSION['UserId']."");

	$placement->execute(array(
		'nLastname'=> $_POST['nom'],
		'nFirstname'=> $_POST['prenom'],
		'nEmail'=> $_POST['motDePasse'],
		'npassword'=> $_POST['email']
		));
	header('Location: site_profile.php');
?>

<?php /*nSexe
npassword
nnationalite
npays_residence
nadresse
ncode_postal
ntelephon Userid=?" */  ?>