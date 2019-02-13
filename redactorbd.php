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
				<center>Таблица автомобили</center>
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
										var add_model = document.getElementById("modeladd"); 
										var add_nomer = document.getElementById("nomeradd");
										var add_strahovka = document.getElementById("strahovkaadd"); 


										$.ajax({ 
											type: "GET", 
											url: "script/adminred.php",
											data: {model: add_model.value, nomer: add_nomer.value, strahovka: add_strahovka.value, func: 'add'}, 
											success: function(data) { 	
											if (data == "dobav") {alert('Добавлена новая запись')} 
											if (data == "не") {alert('Что-то пошло не так(')} 
											
										} 
										}); 
										}
										</script>

	

		<div class="conteiner2">
			<table>
				<tr>
					<td>kod_avto</td>
					<td>name</td>
					<td>surname</td>
					<td>fathername</td>
					<td>pasport</td>
						<center>Таблица водители</center>
				</tr>
				<tr>	
				<td><input type="text" value=" <?php $tmp = $result->rowCount()+1; echo $tmp; ?> "></td>
				<td><input type="text" placeholder="Имя" id="nameadd"></td>
				<td><input type="text" placeholder="Фамилия" id="surnameadd"></td>
				<td><input type="text" placeholder="Отчетсво"	id="fathernameadd"></td>
				<td><input type="text" placeholder="Паспорт"	id="pasportadd"></td>
				<td><a href="#" class="button9" id="add_avto" onclick="add_drivers1()">Добавить</a></td></tr>			
			</table> 	
		</div>

											<script>	
										function add_drivers1(){
										var add_name = document.getElementById("nameadd"); 
										var add_surname = document.getElementById("surnameadd");
										var add_fathername = document.getElementById("fathernameadd"); 
										var add_pasport = document.getElementById("pasportadd"); 


										$.ajax({ 
											type: "GET", 
											url: "script/adminred.php",
											data: {name: add_name.value, surname: add_surname.value, fathername: add_fathername.value, pasport: add_pasport.value, func: 'add1'}, 
											success: function(data) { 	
											if (data == "dobav1") {alert('Добавлена новая запись')} 
											if (data == "не") {alert('Что-то пошло не так(')} 
											
										} 
										}); 
										}
										</script>

			<div class="conteiner3">
			<table>
				<tr>
					<td>kod_avto</td>
					<td>id_avto</td>
					<td>data</td>
					<td>time</td>
					<td>place</td>
						<center>Таблица нарушения</center>
				</tr>
				<tr>	
				<td><input type="text" value=" <?php $tmp = $result->rowCount()+1; echo $tmp; ?> "></td>
				<td><input type="text" value=" <?php $tmp = $result->rowCount()+1; echo $tmp; ?> "></td>
				<td><input type="text" placeholder="2019-02-03" id="data1add"></td>
				<td><input type="text" placeholder="09:23:05"	id="timeadd"></td>
				<td><input type="text" placeholder="Место"	id="placeadd"></td>
				<td><a href="#" class="button9" id="add_avto" onclick="add_narusheniya1()">Добавить</a></td></tr>			
			</table> 	
		</div>

											<script>	
										function add_narusheniya1(){
										var add_data1 = document.getElementById("data1add"); 
										var add_time = document.getElementById("timeadd");
										var add_place = document.getElementById("placeadd"); 


										$.ajax({ 
											type: "GET", 
											url: "script/adminred.php",
											data: {data1: add_data1.value, time: add_time.value, place: add_place.value, func: 'add2'}, 
											success: function(data) { 	
											if (data == "dobav2") {alert('Добавлена новая запись')} 
											if (data == "не") {alert('Что-то пошло не так(')} 
											
										} 
										}); 
										}
										</script>

				<div class="conteiner4">
			<table>
				<tr>
					<td>id_narush</td>
					<td>state_narush</td>
					<td>name_narush</td>
					<td>price_narush</td>
						<center>Таблица нарушения</center>
				</tr>
				<tr>	
				<td><input type="text" value=" <?php $tmp = $result->rowCount()+1; echo $tmp; ?> "></td>
				<td><input type="text" placeholder="Статья" id="stateadd"></td>
				<td><input type="text" placeholder="Описание" id="name1add"></td>
				<td><input type="text" placeholder="Штраф"	id="priceadd"></td>
				<td><a href="#" class="button9" id="add_avto" onclick="add_vidnar1()">Добавить</a></td></tr>			
			</table> 	
		</div>

											<script>	
										function add_vidnar1(){
										var add_state = document.getElementById("stateadd"); 
										var add_name1 = document.getElementById("name1add");
										var add_price = document.getElementById("priceadd"); 


										$.ajax({ 
											type: "GET", 
											url: "script/adminred.php",
											data: {state: add_state.value, name1: add_name1.value, price: add_price.value, func: 'add3'}, 
											success: function(data) { 	
											if (data == "dobav3") {alert('Добавлена новая запись')} 
											if (data == "не") {alert('Что-то пошло не так(')} 
											
										} 
										}); 
										}
										</script>

</body>
</html>