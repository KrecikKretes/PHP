<?php
	$zapytanie="DELETE FROM produkty WHERE ilosc='$bbb'";
	$wynik=mysqli_query($polacz,$zapytanie)
	or die("Blad zapytania");
	echo "Usuwanie przebiegło pomyślnie";
?>