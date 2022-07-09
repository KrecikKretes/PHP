<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Turniej gier komputerowych</title>
	<link REL="shortcut icon" href="../img/fav.ico">
	<link REL="stylesheet" href="../style/mod_style.css">
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
			<form method="GET">
				<table class="heads">
					<tr>
						<td>Za pomocą czego chcesz modyfikować (stara wartość)?</td>
						<td>
							<select name="opcja">
								<option value="nazwa">Nazwa</option>
								<option value="ilosc">Ilość</option>
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
						<td>Co chcesz zmodyfikować (nowa wartość)?</td>
						<td>
							<select name="opcja2">
								<option value="nazwa">Nazwa</option>
								<option value="ilosc">Ilość</option>
								<option value="tworca">Twórca</option>
								<option value="nagroda">Nagroda</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Wpisz wartosć</td>
						<td><input type="text" name="wartosc2"></td>
					</tr>
					<tr>
						<td colspan="2"><button type="submit">Wyślij</button><button><a href="../index.php">Wróć</a></button></td>
					</tr>
				</table>
				<br>
			<?php
				$aaa=@$_GET['opcja'];
				$bbb=@$_GET['wartosc'];
				$ccc=@$_GET['opcja2'];
				$ddd=@$_GET['wartosc2'];
				$kontrola=0;
				if($ccc=="nazwa"){
					if($aaa=="nazwa"){
						$zapytanie="UPDATE turnieje SET nazwa='".$ddd."' WHERE nazwa='".$bbb."'";
					}
					if($aaa=="ilosc"){
						$bbb=(int)$bbb;
						$zapytanie="UPDATE turnieje SET nazwa='".$ddd."' WHERE ilosc='".$bbb."'";
					}
					if($aaa=="tworca"){
						$bbb=(int)$bbb;
						$zapytanie="UPDATE turnieje SET nazwa='".$ddd."' WHERE tworca='".$bbb."'";
					}
					if($aaa=="nagroda"){
						$zapytanie="UPDATE turnieje SET nazwa='".$ddd."' WHERE nagroda='".$bbb."'";
					}
					$kontrola=1;
				}
				if($ccc=="tworca"){
					$ddd=(int)$ddd;
					if($aaa=="nazwa"){
						$zapytanie="UPDATE turnieje SET tworca='".$ddd."' WHERE nazwa='".$bbb."'";
					}
					if($aaa=="ilosc"){
						$bbb=(int)$bbb;
						$zapytanie="UPDATE turnieje SET tworca='".$ddd."' WHERE ilosc='".$bbb."'";
					}
					if($aaa=="tworca"){
						$bbb=(int)$bbb;
						$zapytanie="UPDATE turnieje SET tworca='".$ddd."' WHERE tworca='".$bbb."'";
					}
					if($aaa=="nagroda"){
						$zapytanie="UPDATE turnieje SET tworca='".$ddd."' WHERE nagroda='".$bbb."'";
					}
					$kontrola=1;
				}
				if($ccc=="ilosc"){
					$ddd=(int)$ddd;
					if($aaa=="nazwa"){
						$zapytanie="UPDATE turnieje SET ilosc='".$ddd."' WHERE nazwa='".$bbb."'";
					}
					if($aaa=="ilosc"){
						$bbb=(int)$bbb;
						$zapytanie="UPDATE turnieje SET ilosc='".$ddd."' WHERE ilosc='".$bbb."'";
					}
					if($aaa=="tworca"){
						$bbb=(int)$bbb;
						$zapytanie="UPDATE turnieje SET ilosc='".$ddd."' WHERE tworca='".$bbb."'";
					}
					if($aaa=="nagroda"){
						$zapytanie="UPDATE turnieje SET ilosc='".$ddd."' WHERE nagroda='".$bbb."'";
					}
					$kontrola=1;
				}
				if($ccc=="nagroda"){
					if($aaa=="nazwa"){
						$zapytanie="UPDATE turnieje SET nagroda='".$ddd."' WHERE nazwa='".$bbb."'";
					}
					if($aaa=="ilosc"){
						$bbb=(int)$bbb;
						$zapytanie="UPDATE turnieje SET nagroda='".$ddd."' WHERE ilosc='".$bbb."'";
					}
					if($aaa=="tworca"){
						$bbb=(int)$bbb;
						$zapytanie="UPDATE turnieje SET nagroda='".$ddd."' WHERE tworca='".$bbb."'";
					}
					if($aaa=="nagroda"){
						$zapytanie="UPDATE turnieje SET nagroda='".$ddd."' WHERE nagroda='".$bbb."'";
					}
					$kontrola=1;
				}
				if($kontrola==1){
					$wynik=@mysqli_query($polacz,$zapytanie)
					or die("Blad zapytania dotyczącego modyfikacji");
				}
				
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
			?>
			</form>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
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