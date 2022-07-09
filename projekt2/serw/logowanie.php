<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Projekt - Usługi budowlane </title>
	<link REL="shortcut icon" href="img/favicon.ico">
	<link REL="stylesheet" href="style/l_styl.css">

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
		<table>
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
		<br>
		<form method="POST">
			<table>
				<tr>
					<td>Login: </td>
					<td><input type="text" name="login"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="haslo"></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit">Wyślij</button></td>
				</tr>
				<tr>
					<td colspan="2"><button><a href="rejestracja.php"><a href="index.php">Wróć</a></button></td>
					
				</tr>
				<tr>
					<td><p id="zacheta">Nie jesteś jeszcze zarejestrowany? Zrób to teraz --></p></td>
					<td><button><a href="rejestracja.php">Zarejestruj się</a></button></td>
				</tr>
			</table>
		</form>
	</main>
	<?php 
		if(!$polacz){
				echo("Blad".mysqli_connect_error());
		}else{
			$login=@$_POST['login'];
			$haslo=@$_POST['haslo'];
			if(preg_match('/./',$login)&&preg_match('/./',$haslo)){
				$_SESSION['user']=$login;
				$_SESSION['pass']=$haslo;
				$zapytanie="SELECT login,haslo,uprawnienia FROM uzytkownicy";
				$wynik=mysqli_query($polacz,$zapytanie)
				or die("Blad zapytania");
				
				while($r=mysqli_fetch_array($wynik)){
					if($r['login']==$_SESSION['user']){
						$spr_login=$spr_login+1;
					}
					if($r['haslo']==$_SESSION['pass']){
						$spr_login=$spr_login+1;
						$_SESSION['upr']=$r['uprawnienia'];
						break;
					}
				}
				if($spr_login==2){
					header("Location: index.php");
				}
			}
		}
	?>

</body>
</html>