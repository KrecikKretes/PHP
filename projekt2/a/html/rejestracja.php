<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Turniej gier komputerowych</title>
	<link REL="shortcut icon" href="../img/fav.ico">
	<link REL="stylesheet" href="../style/rej_style.css">
	
	<script>
	function czas (){
		var data=new Date();
			var d=data.getDate();
			var mi=data.getMonth()+1;
			var rok=data.getFullYear();
			var h=data.getHours();
			if(mi<10)
				mi="0"+mi;
			if(h<10)
				h="0"+h;
			var m=data.getMinutes();
			if(m<10)
				m="0"+m;
			var s=data.getSeconds();
			if(s<10)
				s="0"+s;
				
			document.getElementById("czas").innerHTML=d+"."+mi+"."+rok+"<br>"+h+":"+m+":"+s;
	}
	setInterval("czas()",1000);
	
	</script>
</head>
<body>
	<br>
	<div id="calosc">
		<br>
		<header>
			<table>
				<tr>
					<td id="obrazektab">
						<img src="../img/logo3.jpg">
					</td>
					<td id="nave">
						<nav>
							<?php 
									echo "<table id='navee'>";
									if(@$_SESSION['user']==""){	
										echo "<tr><td><a href='html/logowanie.php'>Zaloguj się</a></td></tr>";
										echo "<tr><td class='linia'><a href='html/wyszukaj.php'>Znajdź swój turniej</a></td></tr>";
									}else{
										echo "<td>Witaj ".$_SESSION['user']."</td></tr>";
										echo "<tr><td class='linia'><a href='html/wyszukaj.php'>Znajdź swój turniej</a></td></tr>";
										if($_SESSION['upr']=="A"){
										}else{
											echo '<tr><td class="linia"><a href="html/zapisz.php">Zapisz się na turniej</a></td></tr>';
										}
										if($_SESSION['upr']=="B"){
											echo '<tr><td class="linia"><a href="html/usuwanie.php">Usuń turniej</a></td></tr>';
											echo '<tr><td class="linia"><a href="html/modyfikacja.php">Zmodyfikuj turniej</a>';
										}
										echo "<tr><td class='linia'><a href='html/wylogowanie.php'>Wyloguj</a></td></tr>";
									}
									echo "</table>";
							?>
						</nav>
					</td>
				</tr>
			</table>
		</header>
		<main>
			<br>
			<br>
			<form action="potwierdzenie.php" method="POST">
				<table id="logowanie">
					<tr>
						<td>Wpisz swój login: </td>
						<td><input type="text" name="login"></td>
					</tr>
					<tr>
						<td>Wpisz swoje hasło : </td>
						<td><input type="password" name="haslo"></td>
					</tr>
					<tr>
						<td colspan="2"><button type="submit">Zarejestruj się</button></td>
					</tr>
					<tr>
						<td colspan="2"><button><a href="logowanie.php">Wróć</a></button></td>
						
					</tr>
				</table>
			</form>
		</main>
		<footer>
			<p id="czas"></p>
			<p> &copy; Damian Zawisza</p>
		</footer>
		<br>
		<br>
		<br>
	</div>
</body>
</html>
