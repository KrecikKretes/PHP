<!doctype html>
<head>
</head>
<body>
	<form method="POST">
		<input type="text" name="imie">
		<input type="text" name="nazwisko">
		<br>
		<input type="text" name="naz">
		<br>
		<input type="text" name="imie2">
		<input type="text" name="nazwisko2">
		<input type="submit">
	</form>
	<?php
		$host="localhost";
		$user="root";
		$pass="";
		$baza="asg";
		
		$polacz=mysqli_connect($host,$user,$pass);
		mysqli_select_db($polacz,$baza);
		
		@$imie=$_POST["imie"];
		@$naz=$_POST["nazwisko"];
		@$naz2=$_POST["naz"];
		
		$sql="INSERT INTO OSOBA(imie,nazwisko) VALUES ('$imie','$naz')";
		mysqli_query($polacz,$sql);
		
		$sql2="DELETE FROM OSOBA WHERE nazwisko=''";
		mysqli_query($polacz,$sql2);
		
		$sql3="DELETE FROM OSOBA WHERE nazwisko='$naz2'";
		mysqli_query($polacz,$sql3);
		
		if(!$polacz){
				echo("Blad".mysqli_connect_error());
		}else{
			$zapytanie="SELECT * FROM OSOBA";
			$wynik=mysqli_query($polacz,$zapytanie)
			or die("Blad zapytania");
		
			echo "<table border=1>";
			while($r=mysqli_fetch_array($wynik)){
				echo "<tr>";
				echo "<td>".$r['imie']."</td>";
				echo "<td>".$r['nazwisko']."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		
		mysqli_close($polacz);
	?>
</body>
</html>