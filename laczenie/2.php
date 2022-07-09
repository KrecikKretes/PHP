<!doctype html>
<head>
	<meta charset-"UTF-8">
</head>
<body>
	<form method="POST">
		Wybierz metodę wyszukiwania <br>
		<select name="metoda">
			<option value="autor">Autor</option>
			<option value="tytul">Tytuł</option>
			<option value="ISBN">ISBN</option>
		</select>
		<br>
		<input type="text" name="wyz">
		<br>
		<input type="submit">
	</form>
	<?php
		$host="localhost";
		$user="root";
		$pass="";
		$baza="projekt1";
		
		$polacz=mysqli_connect($host,$user,$pass);
		mysqli_select_db($polacz,$baza);
		
		@$metoda=$_POST["metoda"];
		@$wyz=$_POST["wyz"];
		
		if(!$polacz){
				echo("Blad".mysqli_connect_error());
		}else{
			if($metoda=="autor"){
				$zapytanie="SELECT * FROM ksiazki WHERE autor='$wyz'";
				$wynik=mysqli_query($polacz,$zapytanie)
				or die("Blad zapytania");
				echo "<table border=1>";
				while($r=mysqli_fetch_array($wynik)){
					echo "<tr>";
					echo "<td>".$r['']."</td>";
					echo "<td>".$r['']."</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		}
		mysqli_close($polacz);
	?>
</body>
</html>