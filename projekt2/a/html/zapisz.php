<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Turniej gier komputerowych</title>
	<link REL="shortcut icon" href="../img/fav.ico">
	<link REL="stylesheet" href="../style/zapisz_styl.css">
	<?php
		session_start();
	
		$host="mysql.cba.pl";
		$user="KretKretes";
		$pass="Damian2000";
		$baza="kretkretes";
		
		$spr_login=0;

		
		$polacz=mysqli_connect($host,$user,$pass);
		mysqli_select_db($polacz,$baza);
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
											echo '<tr><td class="linia"><a href="wstaw.php">Stwórz turniej</a></td></tr>';
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
			<article>
				<section>
					<form method="POST">
						<table class="heads">
							<tr>
								<td>Wpisz nazwę turnieju:</td>
								<td><input type="text" name="nazwa"></td>
							</tr>
							<tr>
								<td colspan="2"><button type="submit">Wyślij</button><button><a href="../index.php">Wróć<a></button></td>
							</tr>
						</table>
						<br>
						<br>
						<br>
					<?php
					
						$nazwa=@$_POST["nazwa"];
						$user=@$_SESSION['user'];
						$zapytanie="INSERT INTO zapisy VALUES('$nazwa','$user')";
						$wynik=mysqli_query($polacz,$zapytanie);
					
						$zapytanie="SELECT * FROM produkty";
						$wynik=mysqli_query($polacz,$zapytanie)
						or die("Blad zapytania dotyczącego SELECTa");
						echo "<table border=1 id='select'>";
						echo "<tr><td>Nazwa</td><td>Ilość</td><td>Tworca</td><td>nagroda</td></tr>";
						while($r=mysqli_fetch_array($wynik)){
							echo "<tr>";
							echo "<td>".@$r['nazwa']."</td>";
							echo "<td>".@$r['ilosc']."</td>";
							echo "<td>".@$r['tworca']."</td>";
							echo "<td>".@$r['nagroda']."</td>";
							echo "</tr>";
						}
						echo "</table>";
					?>
				</section>
			</article>
		</main>
		<footer>
			<p id="czas"></p>
			<p> &copy; Damian Zawisza</p>
		</footer>
	</div>
</body>
</html>