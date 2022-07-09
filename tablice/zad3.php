<!doctype html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		function aaa ($d){
				switch ($d){
					Case "1":
						$a="Styczeń";
					Break;
					Case "2":
						$a="Luty";
					Break;
					Case "3":
						$a="Marzec";
					Break;
					Case "4":
						$a="Kwiecień";
					Break;
					Case "5":
						$a="Maj";
					Break;
					Case "6":
						$a="Czerwiec";
					Break;
					Case "7":
						$a="Lipiec";
					Break;
					Case "8":
						$a="Sierpień";
					Break;
					Case "9":
						$a="Wrzesień";
					Break;
					Case "10":
						$a="Październik";
					Break;
					Case "11":
						$a="Listopad";
					Break;
					Case "12":
						$a="Grudzień";
					Break;
			}
			return $a;
		}
		function bbb ($d){
				switch ($d){
					Case "1":
						$a="Poniedziałek";
					Break;
					Case "2":
						$a="Wtorek";
					Break;
					Case "3":
						$a="Środa";
					Break;
					Case "4":
						$a="Czwartek";
					Break;
					Case "5":
						$a="Piątek";
					Break;
					Case "6":
						$a="Sobota";
					Break;
					Case "7":
						$a="Niedziela";
					Break;
			}
			return $a;
		}
		
		$d=getdate();
		$d['month']=aaa($d['mon']);
		$d['weekday']=bbb($d['wday']);
		while(list($r,$m)=each($d)){
			echo " $r      $m <br>";	
		}
		
		echo "dzisiejsza data to $d[mday] - $d[month] -  $d[year] to jest $d[weekday]";

		
	?>
</body>
</html>