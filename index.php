<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Учет нарушений ПДД</title>
	<link rel="stylesheet" href="style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="main">
		<!-- <div class="slider">	

		</div>	 -->

		<ul id="slides">
    <li class="slide showing">НЕ НАРУШАЙТЕ</li>
    <li class="slide">НЕ ПРЕВЫШАЙТЕ</li>
    <li class="slide">НЕ ОБГОНЯЙТЕ</li>
    <li class="slide">НЕ СИГНАЛЬТЕ</li>
    <li class="slide">ТОЛЬКО ВКИДЫВАЙТЕ ПАКИЧ!</li>
</ul>

		<div class="buttons-block">
			<div class="button" id="bd" onClick="bd()">База данных</div>
			<div class="button" id="pdd" onClick="pdd()" >Штрафы ПДД</div>
			<div class="button" id="sbd">Схему данных</div>
		</div>


		<div class="block1">
			<div class="headr">
				<center><label for="input">Проверка штрафов ГИБДД</label></center>
			</div>

	<div class="block2">
		<label for="nomer">Введите гос.номер:</label>
		<br><br><br><br>
		<label for="strahovka">Номер страховки:</label>
	</div>
	

	<div class="block3">
			<div id="nomer_input">
				<div><input type="text" id="nomer" placeholder="A000AA" value="р142ув"></div>
				<div><input type="text" id="region" placeholder="777" value="178"></div>
			</div>
			<br><br>
					<div id="strahovka_input">
						<input type="text" id="strahovka" placeholder="99АА999999" value="87AB999999" >
					</div>

	</div>		
				<div class="footer"><div class="button" id="proverka" onClick="proverka()">Проверить</div></div>
				
	</div>


	<script src="script/script.js"></script>
</body>
</html>

