<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Turniej gier komputerowych</title>
	<link REL="shortcut icon" href="../img/fav.ico">
	<link REL="stylesheet" href="../style/wyszukaj_style.css">
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
										echo "<tr><td><a href='logowanie.php'>Zaloguj się</a></td></tr>";
										echo "<tr><td class='linia'><a href='wyszukaj.php'>Znajdź swój turniej</a></td></tr>";
									}else{
										echo "<td>Witaj ".$_SESSION['user']."</td></tr>";
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
			<form method="GET">
				<table class="heads">
					<tr>
						<td>Za pomocą czego chcesz wyszukać?</td>
						<td>
							<select name="opcja">
								<option value="nazwa">Nazwa</option>
								<option value="ilosc">Ilość graczy</option>
								<option value="tworca">Twórca</option>
								<option value="nagroda">Nagroda</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Wpisz wartosć</td>
						<td><input type="text" name="wartosc"></td>
					</tr>
					<tr>
						<td colspan="2"><button type="submit">Wyślij</button><button><a href="../index.php">Wróć</a></button></td>
					</tr>
				</table>
				<br>
				<?php
					$aaa=@$_GET['opcja'];
					$bbb=@$_GET['wartosc'];
					if($aaa=='nazwa')
						include('wyszukaj/nazwa.php');
					if($aaa=='ilosc')
						include('wyszukaj/ilosc.php');
					if($aaa=='tworca')
						include('wyszukaj/tworca.php');
					if($aaa=='nagroda')
						include('wyszukaj/nagroda.php');
					
					
					if($aaa==""){
						$zapytanie="SELECT * FROM turnieje";
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
					}
				?>
				
			</form>
			
		</main>
		
		<footer>
			<p id="czas"></p>
			<p> &copy; Damian Zawisza</p>
		</footer>
	</div>
</body>
</html>