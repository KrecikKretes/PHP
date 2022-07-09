<!doctype html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		$woj=array("Małopolskie","Wielkopolskie","Śląskie","Podkarpackie","Lubuskie","Lubelskie","Zachodnio-pomorskie","Pomorskie","Warmińsko-mazurskie","Podlaskie","Kujawsko-pomorskie","Mazowieckie","Łódzkie","Dolnośląskie","Opolskie","Świętokrzystkie");
		$dlugosc=0;
		foreach($woj as $i){
				echo "$i <br>";
				$dlugosc++;
		}
		echo $dlugosc."<br><br>";
		array_push($woj,"Krecikowe");
		sort($woj);
		foreach($woj as $i){
				echo "$i <br>";
		}
		if(in_array("Małopolskie",$woj)){
			echo "Małopolska znajduje się w tym zbiorze <br>";
		}else{
			echo "Małopolska nie znajduje się w tym zbiorze <br>";
		}
		echo "<select>";
			foreach($woj as $i){
				echo "<option>$i</option>";
			}
		echo "</select>";
		?>
</body>
</html>