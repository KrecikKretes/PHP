<!doctype html>
<head>
	<meta charset-"UTF-8">
</head>
<body>
	<form method="POST">
		<h1>Autor <input type="text" name="autor"></h1>
		<h1>Tytuł <input type="text" name="tytul"></h1>
		<h1>ISBN <input type="text" name="isbn"></h1>
		<h1>Cena <input type="text" name="cena"></h1>
		<br>
		<input type="submit">
	</form>
	<?php
		$host="localhost";
		$user="root";
		$pass="";
		$baza="ksiazki";
		
		$polacz=mysqli_connect($host,$user,$pass);
		mysqli_select_db($polacz,$baza);
		
		@$autor=$_POST["autor"];
		@$tytul=$_POST["tytul"];
		@$isbn=$_POST["isbn"];
		@$cena=$_POST["cena"];
		
		if(!$polacz){
			echo("Blad".mysqli_connect_error());
		}else{
			if($autor==""&&$tytul==""&&$isbn==""&&$cena==""){
				exit;
			}else{
				$zapytanie ="insert into ksiazki values ('$isbn','$autor','$tytul','$cena')";
				$wynik=mysqli_query($polacz,$zapytanie)
				or die("Blad zapytania");
				if($wynik)
					echo @mysqli_affected_rows($wynik)."ksiazka dopisana do bazy";
				else
					echo "Wystapil blad";

			}
		}
		mysqli_close($polacz);
	?>
</body>
</html>