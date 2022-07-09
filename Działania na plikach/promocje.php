<!doctype html>
<head>
	<meta charset="ISO-1250">
	<style>
		#p1{
			font-weight:bold;
		}
		div{
			width:500px;
			height:120px;
			background-color:blue;
			border-radius:20px;
		}
		body{
			margin:0 auto;
		}
	</style>
	<?php
		$gry=file('gry.txt');
		$programy=file('ksiazki.txt');
		
		$kat=@$_POST['wybor'];
		$tresc=@$_POST['aaa'];
		if($tresc!=""){
			if($kat=="Gry"){
				$fplik=fopen("gry.txt","a+");
				fwrite($fplik,"\n $tresc");
				fclose($fplik);
			}
			if($kat=="Programy"){
				$fplik=fopen("ksiazki.txt","a+");
				fwrite($fplik,"\n $tresc");
				fclose($fplik);
			}
		}
	?>
</head>
<body>
	<p><span id="p1">PROMOCJE tylko do końca marca</span></p>
	<p><span id="p1">DOSKONAŁE CENY DLA WSZYSTKICH<span></p>
	<div>
		<span id="p1">    PROMOCJA - 2 GRY KOMPUTEROWE</span>
		<ul>
		<?php
			for($i=0;$i<count($gry);$i++){
				echo "<li> $gry[$i]</li>";
			}
		?>
		</ul>
	</div>
	<br>
	<div>
		<span id="p1">    PROMOCJA - 3 KSIĄŻKI</span>
		<ul>
		<?php
			for($i=0;$i<count($programy);$i++){
				echo "<li> $programy[$i]</li>";
			}
		?>
		</ul>
	</div>
	
	<form action="#" method="POST">
		<select name="wybor">
			<option>Gry</option>
			<option>Programy</option>
		</select>
		<input type="text" name="aaa">
		<input type="submit">
	</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php
		$a=file("aaa.txt");
		foreach($a as $v){
			echo "$v <br>";
		}
	?>
	<br>
	<br>
	<?php
		echo $a[rand(0,count($a)-1)];
		echo "<br>";
		echo readfile("aaa.txt");
		
		echo "<hr>";
		
		$fplik=fopen("aaa.txt","a+");
		echo fwrite($fplik,"\n Dodana linijka");
		
		$fplik=fopen("aaa.txt","r");
		while(!feof($fplik)){
			$wiersz=fgets($fplik);
			echo "$wiersz <br>";
		}
		fclose($fplik);
		
		echo "<br><br><br><hr><br><br><br>";
		
		$p=1;
		for(;$p<=1000;$p++){
			if($p%2==0&&$p%3==0){
				$dane[]=$p;
			}
		}
		$zplik=fopen("ccc.txt","w+");
		for($i=0;$i<count($dane);$i++){
			fwrite($zplik,"$dane[$i]\n");
		}
		fclose($zplik);
		
		$zplik=fopen("ccc.txt","r");
		while(!feof($zplik)){
			$wiersz=fgets($zplik);
			echo "$wiersz <br>";
		}
		fclose($zplik);
	?>
</body>
</html>
