<?php 
include("script/link_bd.php");

$sql = "SELECT * FROM  `drivers` WHERE `kod_avto` =(SELECT `kod_avto` FROM  `avto` WHERE `strahovka` = '".$_GET['strahovka']."')";
$result = $connection->query($sql);
$driver=$result->fetch();

$sql = "SELECT * FROM `avto` WHERE `kod_avto`= '".$driver ['kod_avto']."'";
$result = $connection->query($sql);
$avto=$result->fetch();

$sql = "SELECT * FROM  `narusheniya` WHERE `kod_avto` = '".$driver ['kod_avto']."'";
$result = $connection->query($sql);
$narush=$result->fetch();
?>

<link rel="stylesheet" href="style/style.css">
<haeder><meta charset="UTF-8"></header>

<div class="lcm"> 
<table id="table-after-search">
<<<<<<< HEAD
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
	$sql = "SELECT * FROM  `narusheniya` WHERE `kod_avto` = '".$row['kod_avto']."'";
	$result = $connection->query($sql);
	$row=$result->fetch();
	?>
	 <tr><td>Дата нарушения:</td> <td><?php echo $row ['data']; ?></td></tr>
    <tr><td>Время нарушения:</td> <td><?php echo $row ['time']; ?></td></tr>

<?php
$sql = "SELECT `id_narush` FROM  `narusheniya` WHERE `kod_avto` = '".$row ['kod_avto']."'";
$result = $connection->query($sql);
$row=$result->fetch();

$sql = "SELECT * FROM  `vid_narush` WHERE `id_narush` = '".$row ['id_narush']."'";
$result = $connection->query($sql);
$row=$result->fetch();
?>

 <tr><td>Нарушение:</td> <td><?php echo $row ['name_narush']; ?></td></tr>
    <tr><td>Цена штрафа:</td> <td><?php echo $row ['price_narush']; ?></td></tr>

  	</thead>
  	<tbody>
	</tbody>
=======
    <tr><td>Фамилия:</td> <td><?php echo $driver ['surname']; ?></td></tr>
    <tr><td>Имя:</td>  <td><?php echo $driver ['name']; ?></td></tr>
    <tr><td>Отчество:</td> <td><?php echo $driver ['fathername']; ?></td></tr>

    <tr><td>Автомобиль:</td> <td><?php echo $avto ['model']; ?></td></tr>
    <tr><td>Гос.номер:</td> <td><?php echo $avto ['gos_nomer']; ?></td></tr>
>>>>>>> 523f0c614e76157699bb97498a116990d5ba8b6b

	<tr><td>Дата нарушения:</td> <td><?php echo $narush ['data']; ?></td></tr>
    <tr><td>Время нарушения:</td> <td><?php echo $narush ['time']; ?></td></tr>
</table>
</div>

