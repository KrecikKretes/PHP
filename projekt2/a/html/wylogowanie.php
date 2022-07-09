<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Turniej gier komputerowych</title>
	<link REL="shortcut icon" src="img/favicon.ico">
	<link REL="stylesheet" src="style/i_styl.css">
</head>
<body>
	<header>
	</header>
	<main>
		
	</main>
	<?php 
		session_start();
		unset($_SESSION['user']);
		session_destroy();
	?>
	<script>
		location.href="../index.php";
	</script>
</body>
</html>
