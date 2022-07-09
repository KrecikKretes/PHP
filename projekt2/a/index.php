<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Turniej gier komputerowych</title>
	<link REL="shortcut icon" href="img/fav.ico">
	<link REL="stylesheet" href="style/index_style.css">
	<script>
	function czas (){
		var data=new Date();
			var d=data.getDate();
			var mi=data.getMonth()+1;
			var rok=data.getFullYear();
			var h=data.getHours();
			if(mi<10)
				mi="0"+mi;
			if(h<10)
				h="0"+h;
			var m=data.getMinutes();
			if(m<10)
				m="0"+m;
			var s=data.getSeconds();
			if(s<10)
				s="0"+s;
				
			document.getElementById("czas").innerHTML=d+"."+mi+"."+rok+"<br>"+h+":"+m+":"+s;
	}
	setInterval("czas()",1000);
	
	</script>
</head>
<body onload="czas()">
	<br>
	<div id="calosc">
		<br>
		<header>
			<table>
				<tr>
					<td id="obrazektab">
						<img src="img/logo3.jpg">
					</td>
					<td id="nave">
						<nav>
							<?php 
								session_start();
									echo "<table id='navee'>";
									if(@$_SESSION['user']==""){	
										echo "<tr><td><a href='html/logowanie.php'>Zaloguj się</a></td></tr>";
										echo "<tr><td class='linia'><a href='html/wyszukaj.php'>Znajdź swój turniej</a></td></tr>";
									}else{
										echo "<td>Witaj ".$_SESSION['user']."</td></tr>";
										echo "<tr><td class='linia'><a href='html/wyszukaj.php'>Znajdź swój turniej</a></td></tr>";
										if($_SESSION['upr']=="A"){
										}else{
											echo '<tr><td class="linia"><a href="html/zapisz.php">Zapisz się na turniej</a></td></tr>';
										}
										if($_SESSION['upr']=="B"){
											echo '<tr><td class="linia"><a href="html/usuwanie.php">Usuń turniej</a></td></tr>';
											echo '<tr><td class="linia"><a href="html/modyfikacja.php">Zmodyfikuj turniej</a>';
										}
										echo "<tr><td class='linia'><a href='html/wylogowanie.php'>Wyloguj</a></td></tr>";
									}
									echo "</table>";
							?>
						</nav>
					</td>
				</tr>
			</table>
		</header>
		<main>
			<article>
				<section>
					<h1>Witaj</h1>
					<p>Interesują Cię turnieje, wielkie wygrane i wieczna sława jako jeden z najlepszych prograczy?</p>
					<p>To doskonale trafiłeś. Właśnie tutaj możesz uczestniczyć w turniejach lub sam je tworzyć. Możesz też szukać innych graczy aby stworzyć swój wymarzony team.</p>
					<h1>Spróbuj już dziś</h1>
					<img id="ino" src="img/in.png" >
				</section>
			</article>
		</main>
		<footer>
			<p id="czas"></p>
			<p> &copy; Damian Zawisza</p>
		</footer>
	</div>
</body>
</html>