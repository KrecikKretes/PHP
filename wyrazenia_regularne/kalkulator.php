<!doctype html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		// Sprawdza czy formularz został wysłany.
		if (isset($_POST['submitted'])) {
			if (isset($_POST['quantity']) && isset($_POST['price'])&& isset($_POST['tax'])) {
				if (is_numeric($_POST['quantity']) && is_numeric($_POST['price'])&& is_numeric($_POST['tax'])) {
					// Rzutuje wszystkie zmienne na odpowiedni typ.
					$quantity = (int) $_POST['quantity'];
					$price = (float) $_POST['price'];
					$tax = (float) $_POST['tax'];
					// Wszystkie zmienne powinny mieć dodatnią wartość!
					if ( ($quantity > 0) && ($price > 0) && ($tax > 0) ) {
						// Oblicza łączny koszt.
						$total = ($quantity * $price) * (($tax/100) + 1);
						// Wyświetla wynik.
						echo '<p>Kupujesz ' . $quantity . ' sztuk w cenie '. number_format ($price, 2) . ' zł za każdą. Pouwzględnieniu podatku daje to całkowity koszt' .number_format ($total, 2) . ' zł.</p>';
					} else { // Niepoprawne wartości.
						echo '<p style="font-weight: bold; color:#C00">Wprowadź poprawną liczbę egzemplarzy, cenę i podatek.</p>';
					}
				}
			}
		} // Koniec instrukcji warunkowej if isset().
	?>
</body>
</html>