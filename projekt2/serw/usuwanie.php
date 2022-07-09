<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Projekt - Usługi budowlane </title>
	<link REL="shortcut icon" href="img/favicon.ico">
	<link REL="stylesheet" href="style/w_styl.css">
	<?php
		session_start();
	
		$host="localhost";
		$user="root";
		$pass="";
		$baza="projekt";
		
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
	<header>
		<table  class="heads">
			<tr>
				<td id="obrazektab">
					<img src="img/logo3.jpg">
				</td>
				<td id="nave">
					<nav>
						<?php 
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
		<br>
		<form method="GET">
			<table  class="heads">
				<tr>
					<td>Za pomocą czego chcesz usunąć?</td>
					<td>
						<select name="opcja">
							<option value="nazwa">Nazwa</option>
							<option value="ilosc">Ilość</option>
							<option value="cena">Cena</option>
							<option value="magazyn">Magazyn</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Wpisz wartosć</td>
					<td><input type="text" name="wartosc"></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit">Wyślij</button><button><a href="index.php">Wróć<a></button></td>
				</tr>
			</table>
			<br>
			<?php
				$aaa=@$_GET['opcja'];
				$bbb=@$_GET['wartosc'];
				if($aaa=='nazwa')
					include('usun/nazwa.php');
				if($aaa=='ilosc')
					include('usun/ilosc.php');
				if($aaa=='cena')
					include('usun/cena.php');
				if($aaa=='magazyn')
					include('usun/magazyn.php');
			?>
		</form>
	</main>
	<footer>
		<p id="czas"></p>
		<p> &copy; Damian Zawisza</p>
	</footer>
</body>
</html>