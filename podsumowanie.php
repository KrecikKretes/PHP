<!doctype html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php 
		$produkt= array("Poduszka","Komputer","Jabłko");
		$produkty=array(@$_POST["podu"],@$_POST["komp"],@$_POST["jabl"]);
		$cena=array(20,90,5);
		$ilo=@$_POST["ilosc"];
		$prze=@$_POST["przesylka"];
		$p=0;
		
		if($prze=="kurier"){
				$prz=20;
		}else{
			if($prze=="paczkomat"){
				$prz=15;
			}else{
				$prz=10;
			}
		}
		
		
		$cena_kon=0;
		for($i=0;$i<3;$i++){
				$cena_kon=$cena_kon+($produkty[$i]*$cena[$i]);
		}
		
		if($cena_kon>50&&$cena_kon<100){
			$cena_kon=$cena_kon*0.95;
		}
		if($cena_kon>100){
			$cena_kon=$cena_kon*0.85;
		}
		echo "Zamówienie na : ".@$_POST["imie"]." ".@$_POST["nazwisko"];
		for($i=0;$i<3;$i++){
			echo "<br>Wybrany produkt : ".$produkt[$i];
			echo "<br>Wybrana ilość : ".$produkty[$i];
			echo "<br>";
		}
		echo "<br>Wybrana forma dostawy : ".$prze;
		echo "<br>Cena końcowa : ".$cena_kon;
		
	?>
	<br>
	<button onclick="history.go(-1)">Cofnij</button>
</body>
</html>