<?php session_start() ?>
<!DOCTYPE html>
<!-- saved from url=(0053)file:///C:/Users/mathi/Downloads/creersujetforum.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8/">
		<title> Ability Test </title>
		<link media="screen" rel="stylesheet" href="faq.css">
		<title>Ability Test </title>
	<script>
			function shownavebar() {
				var sidebar=document.getElementById('test');
				if(sidebar.style.display=='block') {
					sidebar.style.display ='none';
				} else {
					sidebar.style.display ='block';
				}
				
				console.log('test');
			}

		</script></head>
	
<body>
		<div class="bgimg">
			<div class="header">
				<div class="elementsduheader">
					<div class="contenudulogo" onclick="shownavebar()">
						<h1>ABILITY <span>TEST</span></h1>
					</div>
					<div class="menu-deroulant-profile">
						<img src="file:///C:/Users/mathi/Downloads/images/2.jpg" alt="User Image">
						<ul>
							<li><a href="file:///C:/Users/mathi/Downloads/deconnexion.php" class="highlight">Deconnexion</a></li>
						</ul>
					</div>
					<div class="wrapper">
					    <div class="sidebar" id='test'>
					        <ul>
								<li><a href="controle.html"><i class="fas fa-user"></i>Controle</a></li>
								<li><a href="test1.html"><i class="fas fa-home"></i>Test</a></li>
								<li><a href="lesresultats.html"><i class="fas fa-home"></i>Resultat</a></li>
					            <li><a href="lesstatistiques.html"><i class="fas fa-home"></i>Statistique</a></li>
					            <li><a href="site_profile.html"><i class="fas fa-user"></i>Profil</a></li>
								<li><a href="forum.php"><i class="fas fa-user"></i>Forum</a></li>
								<li><a href="faq.html"><i class="fas fa-user"></i>Faq</a></li>
					        </ul> 
					        <div class="social_media">
					          <a href="#"><i class="fab fa-facebook-f"></i></a>
					          <a href="#"><i class="fab fa-twitter"></i></a>
					          <a href="#"><i class="fab fa-instagram"></i></a>
					      </div>
					    </div>
			        </div>	
						<div class="lesquestions">          
									<div>
										<input type="radio" name="acc" id="acc1" checked>
										<label for="acc1">Question 1</label>
										<div class="acc-body">
											Reponse 1.
										</div>
									</div>
									<div>
										<input type="radio" name="acc" id="acc2">
										<label for="acc2">Question 2</label>
										<div class="acc-body">
											Reponse 2.
										</div>
									</div>
									<div>
										<input type="radio" name="acc" id="acc3">
										<label for="acc3">Question 3</label>
										<div class="acc-body">
											Reponse 3.
										</div>
									</div>
									<div>
										<input type="radio" name="acc" id="acc4" >
										<label for="acc4">Question 4</label>
										<div class="acc-body">
											Reponse 4.
										</div>
									</div>
									<div>
										<input type="radio" name="acc" id="acc5">
										<label for="acc5">Question 5</label>
										<div class="acc-body">
											Reponse 5.
										</div>
									</div>
									<div>
										<input type="radio" name="acc" id="acc6">
										<label for="acc6">Question 6</label>
										<div class="acc-body">
											Reponse 6.
										</div>
									</div><div>
										<input type="radio" name="acc" id="acc7" >
										<label for="acc7">Question 7</label>
										<div class="acc-body">
											Reponse 7.
										</div>
									</div>
									<div>
										<input type="radio" name="acc" id="acc8">
										<label for="acc8">Question 8</label>
										<div class="acc-body">
											Reponse 8.
										</div>
									</div>
									<div>
										<input type="radio" name="acc" id="acc9">
										<label for="acc9">Question 9</label>
										<div class="acc-body">
											Reponse 9.
										</div>
									</div>
									<div>
										<input type="radio" name="acc" id="acc10">
										<label for="acc10">Question 10</label>
										<div class="acc-body">
											Reponse 10.
										</div>
									</div>
								</div>					
				</div>
			</div>
		</div> 

</body>

</html>