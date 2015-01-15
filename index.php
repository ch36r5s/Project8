
<!DOCTYPE html>
<?php $thisPage="acceuil";?>
	<html>
		<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/css/style.css" />
		<title>  Projet 8 </title>
		</head>
		<!--<span> </span> : balise qui entoure juste un mot ou un morceau pour "onclick" ; <div> </div> : entoure un morceux de txt  pour la mise en forme  -->
	
		<body>

			<?php include_once ('/phpincludes/header1.php');?>
			<?php include_once('/phpincludes/nav1.php');?>
			
			<section> 

				<p id = "date"> On est <?php echo date('d/m/y'); ?> </p>
				<p> Avant de commencer, si vous avez le moindre problème alors telechargez : <a href="./images/chill.png" download="chill" title ="chill"> cette image </a>  </p>
				<!-- pour le reste de fichiers, la mention "download n'est pas obligatoire -->
				<h2> Le sommaire : </h2>
				 
				<ol> 
					<li> <a href = "#AppHTML" title = "Ceci sont les bases !"> Apprentissage de HTML5 </a> </li>
					<li> L'info sur le jeu </li>
					<li> " "</li>
				</ol>
				
				<h2 id = "AppHTML"> Apprentissage de HTML5 </h2>
				<p class="paraphv"> Ceci est un exemple d'un paragraph écrit en vert</br> 
					second line </p1>
				<p> aller sur la <a href="/page2/page2.php"> Page 2 </a> du site </p>
				<a href="#" onclick="alert('Vous avez cliqué !'); return false;">Cliquez-moi !</a>
				<p>
					<?php
						for ($nombre_de_lignes = 1; $nombre_de_lignes <= 10; $nombre_de_lignes++)
						{
							echo 'Ceci est la ligne generé par php n°' . $nombre_de_lignes . '<br />';
						}
					?>
				</p>
				
				<p>Ou pour plus d'info sur  creation de sites web cliquer sur l'image ou le lien : <a href="http://www.w3schools.com"> <span id="br1">w3school</span></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--&nbsp;" sont simplement des espaces -->
				
				<!-- mark sert à changer de fond que pour cette partie --> 
				  <a href="http://www.w3schools.com">   <img src="./images/w3school.jpg" alt="W3Schools.com" style="width:200px;height:100px"></a> </p>
				<p> Image à partir d'un lien URL: </br>  <img src="http://www.w3schools.com/images/w3schools_green.jpg"> </p>
				
				<h2> L'info sur le jeu </h2> 
				<h3> Les possibilités de création de jeu </h3>
				<ol> 
					<li> HTML5: JavaScript </li>
					<li> AdobeFlash: ActionScript </li>
					<li> Unity </li>
				</ol>
			</section>				
			
		</body>
		
		<footer>
			<textarea name="message" rows="8" cols="45">Comment pensez vous je pourrais ameliorer mon site ?</textarea>
		</footer>

	</html>
