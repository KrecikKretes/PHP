<!doctype html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<header>
		Nagłówek strony
	</header>
	<nav>
		<a href="index.php?id=aktu">Aktualności</a>&nbsp;&nbsp;&nbsp;
		<a href="index.php?id=kont">Kontakt</a>&nbsp;&nbsp;&nbsp;
		<a href="index.php?id=logo">Logowanie</a>
	</nav>
	<main>
		<?php
			@$id=$_GET['id'];
			if($id=='aktu')
				include('aktu.php');
			if($id=='kont')
				include('kont.php');
			if($id=='logo')
				include('logo.php');
		?>
	</main>
	<footer>
		<?php
			echo "<p>Copyright &copy; ". date("Y") ." </p>";
		?>
	</footer>
</body>
</html>