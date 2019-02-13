<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админ панель</title>

	<link rel="stylesheet" href="style/style.css">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
		
	<?php  include("script/link_bd.php");
	$sql= 'SELECT kod_avto FROM avto';
	$result = $connection->query($sql); 
	$row = $result->fetch(); 
	
	
	?>
</head>
<body>

	<div class="conteiner1">
		<table>
			<tr>
				<td>kod_avto</td>
				<td>model</td>
				<td>gos_nomer</td>
				<td>strahovka</td>
			</tr>
			<tr>	
			<td><input type="text" value=" <?php $tmp = $result->rowCount()+1; echo $tmp; ?> "></td>
			<td><input type="text" placeholder="Nissan Teana" id="modeladd"></td>
			<td><input type="text" placeholder="о000оо01" id="nomeradd"></td>
			<td><input type="text" placeholder="A23B234123"	id="strahovkaadd"></td>
			<td><a href="#" class="button9" id="add_avto" onclick="add_avto1()">Добавить</a></td></tr>
			
		</table>
	</div>


	<script>	
	function add_avto1(){
	console.log ("HUYE");
	var add_model = document.getElementById("modeladd"); 
	var add_nomer = document.getElementById("nomeradd");
	var add_strahovka = document.getElementById("strahovkaadd"); 


	$.ajax({ 
		type: "GET", 
		url: "script/adminred.php",
		data: {model: add_model.value, nomer: add_nomer.value, strahovka: add_strahovka.value, func: 'add'}, 
		success: function(data) { 	
		if (data == "dobav") {alert('Добавлена новая запись')} 
		if (data == "не") {alert('пошел нахуй с таблицы')} 
		
	} 
	}); 
	}

	</script>
</body>
</html>