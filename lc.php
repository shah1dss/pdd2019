<?php 
include("script/link_bd.php");

$strahovka=$_GET['strahovka'];


$sql = "SELECT `kod_avto` FROM  `avto` WHERE `strahovka` = '".$strahovka."'";
$result = $connection->query($sql);
$row=$result->fetch();

$sql = "SELECT * FROM  `drivers` WHERE `kod_avto` = '".$row ['kod_avto']."'";
$result = $connection->query($sql);
$row=$result->fetch();

?>

<link rel="stylesheet" href="style/style.css">

<div class="lcm"> 
<table id="table-after-search">
	<haeder><meta charset="UTF-8"></header>
	<thead>
		
	
    <tr><td>Фамилия:</td> <td><?php echo $row ['surname']; ?></td></tr>
    <tr><td>Имя:</td>  <td><?php echo $row ['name']; ?></td></tr>
    <tr><td>Отчество:</td> <td><?php echo $row ['fathername']; ?></td></tr>
	<?php 
	$sql = "SELECT * FROM `avto` WHERE `kod_avto`= '".$row ['kod_avto']."'";
	$result = $connection->query($sql);
	$row=$result->fetch();
	 ?>


    <tr><td>Автомобиль:</td> <td><?php echo $row ['model']; ?></td></tr>
    <tr><td>Гос.номер:</td> <td><?php echo $row ['gos_nomer']; ?></td></tr>
	<?php 
	$sql = "SELECT * FROM  `narusheniya` WHERE `kod_avto` = '".$row ['kod_avto']."'";
	$result = $connection->query($sql);
	$row=$result->fetch();
	 ?>
	 <tr><td>Дата нарушения:</td> <td><?php echo $row ['data']; ?></td></tr>
    <tr><td>Время нарушения:</td> <td><?php echo $row ['time']; ?></td></tr>


  	</thead>
  	<tbody>
	</tbody>

</table>
</div>

