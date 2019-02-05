<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Учет нарушений ПДД</title>
	<link rel="stylesheet" href="style/style.css">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="main">
		<div class="slider">		
		</div>	
		<div class="buttons-block">
			<div class="button" id="bd" onClick="bd()">База данных</div>
			<div class="button" id="pdd" onClick="pdd()" >Штрафы ПДД</div>
			<div class="button" id="sbd">Схему данных</div>
		</div>


		<div class="block1">
			<div class="input">
				<label for="input">Проверка штрафов ГИБДД</label><br><br>
				<label for="nomer">Введите гос.номер:</label>
				<input type="text" id="nomer" placeholder="A000AA777">

				<br><br>

				<label for="strahovka">Номер страховки:</label>
				<input type="text" id="strahovka" value="WBD22100A28900011">

				<div class="button" style= "height: 30px"
				id="proverka" onClick="proverka()">Проверить</div>
				
			</div>
			

	</div>
	<script src="script/script.js"></script>
</body>
</html>

