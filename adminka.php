<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Администрация</title>
	<link rel="stylesheet" href="style/style.css">
	<?php  include("script/link_bd.php");?>
		<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<?php if ($_GET["login"]=="admin" && $_GET["password"]=="123") {
		echo "ZDAROVA";
	}
		else {
		 	echo '
		 	<div class="musornyi_bak">


	<div class="adm_label">
		<label for="adm_login">Логин администратора:</label>
		<br><br>
		<label for="adm_pass">Пароль администратора:</label>
	</div>
		

	<div class="adm_buttons">
		<input type="text" id="adm_login">
		<br><br>
		<input type="password" id="adm_pass">
		<br><br>
		<div class="button" id="adm_enter" onClick="adm_login()">Вход</div>
	</div>

		
	</div>';
		 } ?>

	

		<script src="script/script.js"></script>
</body>
</html>