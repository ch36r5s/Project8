<!DOCTYPE html>
<?php $thisPage="game";?>
	<html>
		<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="/css/style.css" /> 
			<link rel="stylesheet" href="/css/game_style.css" />
			<title>  Site banal pour inserer le jeu </title>
			
		</head>

		<body onkeydown="keydown(event)" onkeyup="keyup(event)" onkeypress = "keypress(event)">
		
		
			<?php include ($_SERVER['DOCUMENT_ROOT']."/phpincludes/header1.php");
				 include($_SERVER['DOCUMENT_ROOT']."/phpincludes/nav1.php");
			?>
			
			<div id="frame" >
			
			<?php	
				// Le mot de passe n'a pas été envoyé ou n'est pas bon	
				if (!isset($_POST['mot_pass']) OR $_POST['mot_pass'] != "ninja")
				{				 
			?>
				  
					<form action="game.php" method="POST">
						<p><label> Utilisateur : &nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" name="utilisateur" /> </label> </p>    <!-- &nbsp; est un espace -->
						<p><label> Mot de passe : <input type ="text" name="mot_pass" /> </label> </p>
						<p><input type ="submit" /></p>
					</form>
			<?php				
				}
				// Le mot de passe a été envoyé et il est bon
				else
				{
			?>  
					<script src="game_epicer.js"> 	</script>   <!-- le lien vesr le fichier contenant javascript -->
					
					<audio id="timeOut">
						<source src="../son/prodigy.wav"></source>
					</audio>
					
					<div id="time">Time: </div>
					<div id="player"> <?php	if (isset($_POST['utilisateur'])) { echo 'Joueur : '. ' ' . $_POST['utilisateur']; } ?>  </div>
					<div id="score"> Score: 0 </div>  
					<div id="menu" onClick= "pause()"> Menu </div> 
					
					<div id="start" onClick= "start()"> Start </div>
					
					<div id="lose" onmouseover="restart()"> Perdu </div>
					
					<div id="restart" onClick="start()"> Restart </div>
					
					
					<div id="nextlvl" onClick="start()"> Passer au niveau suivant </div>
					
					<div id="m1" class="move1"></div>
					
					<div id="doc"></div>
					
					<div id="table"> </div>
				
			<?php
				}
			?>
			</div>
		</body>
		
	</html>