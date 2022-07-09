<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Projekt - Usługi budowlane </title>
	<link REL="shortcut icon" href="img/favicon.ico">
	<link REL="stylesheet" href="style/wstaw_styl.css">
	
</head>
<body>
	<br>
	<header>
		<table>
			<tr>
				<td id="obrazektab">
					<img src="img/logo3.jpg">
				</td>
				<td id="nave">
					<nav>
						<?php 
								session_start();
								echo "<table id='navee'>";
								if(@$_SESSION['user']==""){	
									echo "<tr><td><a href='logowanie.php'>Zaloguj się</a></td></tr>";
									echo "<tr><td class='linia'><a href='wyszukaj.php'>Znajdź produkt/usługę</a></td></tr>";
								}else{
									echo "<td>Witaj ".$_SESSION['user']."</td></tr>";
									if($_SESSION['upr']=="A"){
									}else{
										echo '<tr><td class="linia"><a href="wstaw.php">Wstaw nowe produkty</a></td></tr>';
									}
									if($_SESSION['upr']=="B"){
										echo '<tr><td class="linia"><a href="usuwanie.php">Usuń produkt/usługe</a></td></tr>';
										echo '<tr><td class="linia"><a href="modyfikacja.php">Zmodyfikuj produkt/usługe</a>';
									}
									echo "<tr><td class='linia'><a href='wylogowanie.php'>Wyloguj</a></td></tr>";
								}
								echo "</table>";
						?>
					</nav>
				</td>
			</tr>
		</table>
	</header>
	<main>
		<h1>Produkt został dodany</h1>
		Za chwilę nastąpi powrót do poprzedniej strony
		<script>
			setTimeout(function(){
				location.href="wstaw.php";
			},5000);
		</script>
	</main>
	<?php
	
	
	
	?>
	<script>
		
	</script>
</body>
</html>
