<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Turniej gier komputerowych</title>
	<link REL="shortcut icon" href="../img/fav.ico">
	<link REL="stylesheet" href="../style/wyszukaj_style.css">
	
	<?php
			session_start();
			$host="mysql.cba.pl";
			$user="KretKretes";
			$pass="Damian2000";
			$baza="kretkretes";
	?>
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
<body onload="czas()">
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
										echo "<tr><td><a href='logowanie.php'>Zaloguj się</a></td></tr>";
										echo "<tr><td class='linia'><a href='wyszukaj.php'>Znajdź swój turniej</a></td></tr>";
									}else{
										echo "<td>Witaj ".$_SESSION['user']."</td></tr>";
										echo "<tr><td class='linia'><a href='wyszukaj.php'>Znajdź swój turniej</a></td></tr>";
										if($_SESSION['upr']=="A"){
										}else{
											echo '<tr><td class="linia"><a href="zapisz.php">Zapisz się na turniej</a></td></tr>';
										}
										if($_SESSION['upr']=="B"){
											echo '<tr><td class="linia"><a href="usuwanie.php">Usuń turniej</a></td></tr>';
											echo '<tr><td class="linia"><a href="modyfikacja.php">Zmodyfikuj turniej</a>';
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
		<br>
		<form method="POST">
			<table class="heads">
				<tr>
					<td>Nazwa turnieju: </td>
					<td><input type="text" name="nazwa"></td>
				</tr>
				<tr>
					<td>Ilość miejsc: </td>
					<td><input type="number" name="ilosc" maxlength="3"></td>
				</tr>
				<tr>
					<td>Twórca:  </td>
					<td><input type="text" name="tworca"></td>
				</tr>
				<tr>
					<td>Nagroda:  </td>
					<td><input type="number" name="nagroda" maxlength="10"></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit">Wyślij</button><button><a href="../index.php">Wróć<a></button></td>
				</tr>
			</table>
			<br>
			<?php
				$nazwa=@$_POST["nazwa"];
				$ilosc=@$_POST["ilosc"];
				$tworca=@$_POST["tworca"];
				$nagroda=@$_POST["nagroda"];
				$polacz=mysqli_connect($host,$user,$pass);
				mysqli_select_db($polacz,$baza);
				
				if(preg_match('/[a-z]/',$nazwa)&&preg_match('/\d+/',$ilosc)&&preg_match('/[a-z]/',$tworca)){
					$zapytanie="INSERT INTO turnieje VALUES('$nazwa','$ilosc','$tworca','$nagroda')";
					$wynik=mysqli_query($polacz,$zapytanie)
					or die("Blad zapytania");
					header("Location: w_podsumowanie.php");
				}
			?>
		</form>
	</main>
	<footer>
		<p id="czas"></p>
		<p> &copy; Damian Zawisza</p>
	</footer>
</body>
</html>
