
<nav>
	<ul>
		<li <?php if ($thisPage=="acceuil") 
		echo " id=\"currentpage\""; ?>>
		<a href="/index.php"> Accueil </a></li>
		
		<li <?php if ($thisPage=="page2") 
		 echo " id=\"currentpage\""; ?>>
		 <a href="/page2/page2.php"> Info </a> </li>
		<li <?php if ($thisPage=="game") 
		 echo " id=\"currentpage\""; ?>>
		 <a href="/game/game.php" >Serious Game</a></li>
	</ul>
</nav>