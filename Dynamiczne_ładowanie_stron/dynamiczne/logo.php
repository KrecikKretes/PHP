<?php
$login = 'admin';
$password = 'admin';
if (@$login == @$_POST['login'] &&@$password == @$_POST['password']){
	include('info.php');
}else{
	?>
	<form method="post">
	<p>Podaj login: <input type="text" name="login" /></p>
	<p>Podaj hasło: <input type="password" name="password"/></p>
	<p><input type="submit" name="wyslij" /></p>
	</form>
<?php }?>
