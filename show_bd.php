<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>База данных</title>
	<link rel="stylesheet" href="style/style.css">
	<?php  include("script/link_bd.php");?>
</head>
<body>
	<div class="show_avto">
		<h3>Вывод таблицы "Автомобили"</h3>
	</div>
<table>
	<tr>
	<td>kod_avto</td>
	<td>model</td>
	<td>gos_nomer</td>
	<td>strahovka</td>
</tr>
</table>
<?php 
	$sql = "SELECT * FROM  `avto`";
	$result = $connection->query($sql);
	while ($row=$result->fetch()) {
	$kod_avto[$i]=	$row ['kod_avto'];
	$model[$i]=	$row ['model'];
	$gos_nomer[$i]=	$row ['gos_nomer'];
	$strahovka[$i]=	$row ['strahovka'];
	// echo "<tr><td>".$kod_avto[$i]."</td>
	// echo <td>",$model[$i],"</td>
	// <td>",$gos_nomer[$i],"</td>
	// <td>",$strahovka[$i],"</td>
	// </tr>";
	echo "<tr><td>", $kod_avto[$i], "</td>","<td>", $model[$i], "</td>","<td>";

	}

 ?>
	</table>
</body>
</html>