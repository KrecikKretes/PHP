<!doctype html>
<head>
	<meta charset="UTF-8">
	<style>
		body{
				background-color:lightblue;
		}
		div{
			width:80%;
			margin:0 auto;
			text-align:center;
		}
		img{
			width:400px;
			height:250px;
		}
	</style>
</head>
<body>
	<div>
	<h1>Najlepsze części samochodowe</h1>
	</div>
	<?php
		$z=0;
		$tab=array("0.jpg","1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg");
		$sz=array(array("Tarcza",50),
				  array("Sprzęgło",30),
				  array("Silnik",1500),
				  array("Opona",80),
				  array("Lampa","20zł"),
				  array("Drzwi","100zł"),
				  array("Kierownica","10zł"),
				  array("Zderzak","150zł"),
				  array("Szyba","200zł"),
				  array("Błotnik","120zł"));
			
		$pro=array(array("dziesięć % na wszystko",0.9),
				   array("pięć procent na wszystko",0.95),
				   array("20zł rabatu na produkt o cenie powyżej 200zł",20),
				   array("Oponobranie",0.9));
					  
		shuffle($pro);
		echo $pro[0][0];
	
		$k=0;
		echo "<table>";
		for($i=0;$i<10;$i++){
			echo "<tr>";
			
			for($j=0;$j<3;$j++){
				if($i%3!=0){
					if($k==3||$k==6||$k==9){
						echo "<td>".$sz[$k-3][1]."</td>";	
						echo "<td>".$sz[$k-2][1]."</td>";	
						echo "<td>".$sz[$k-1][1]."</td>";
						$k++;
					}else{
					echo "<td>".$sz[$k][0]."</td>";
					$k++;
					}
				}else{
					if($i==4&&$j!=2){
						echo "<td></td>";
					}else{
						echo "<td><img src=$tab[$z]></td>";
						$z++;
					}
				}
			}
			echo "</tr>";
		}
		echo "</table>";
		
		echo "<br><br><br>";
		shuffle($tab);
		for($i=0;$i<3;$i++){
			echo "<img src=$tab[$i]>";
		}
		
	?>
</body>
</html>