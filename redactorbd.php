<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админ панель</title>
	<link rel="stylesheet" href="style/style.css">
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
			<td><a href="" class="button9" onСlick="addavto1()" id="add_avto">Добавить</a></td></tr>
			
		</table>
	</div>

</body>
</html>