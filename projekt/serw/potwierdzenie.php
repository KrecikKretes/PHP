<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Projekt - Usługi budowlane </title>
	<link REL="shortcut icon" src="img/favicon.ico">
	<link REL="stylesheet" src="style/i_styl.css">
	
</head>
<body>
	<header>
		<?php
			session_start();
			$host="localhost";
			$user="root";
			$pass="";
			$baza="projekt";
			$login=@$_POST["login"];
			$haslo=@$_POST["haslo"];
			$polacz=mysqli_connect($host,$user,$pass);
			mysqli_select_db($polacz,$baza);
		
			$zapytanie="INSERT INTO uzytkownicy VALUES('$login','$haslo','A')";
			$wynik=mysqli_query($polacz,$zapytanie)
			or die("Blad zapytania");
		?>
	</header>
	<main>
		<h1>Rejestracja przebiegła pomyślnie</h1>
		Za chwilę nastąpi powrót do strony głównej
		<script>
			setTimeout(function(){
				location.href="index.php";
			},5000);
		</script>
	</main>
	<?php
	
	
	
	?>
	<script>
		
	</script>
</body>
</html>
