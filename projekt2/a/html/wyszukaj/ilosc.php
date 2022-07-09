<?php
	$zapytanie="SELECT * FROM turnieje WHERE ilosc='$bbb'";
	$wynik=mysqli_query($polacz,$zapytanie)
	or die("Blad zapytania");
	echo "<table border=1  id='select'>";
	echo "<tr><td>Nazwa</td><td>Ilość</td><td>Tworca</td><td>Nagroda</td></tr>";
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