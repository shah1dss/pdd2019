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
    <tr><td>Фамилия:</td> <td><?php echo $driver ['surname']; ?></td></tr>
    <tr><td>Имя:</td>  <td><?php echo $driver ['name']; ?></td></tr>
    <tr><td>Отчество:</td> <td><?php echo $driver ['fathername']; ?></td></tr>

    <tr><td>Автомобиль:</td> <td><?php echo $avto ['model']; ?></td></tr>
    <tr><td>Гос.номер:</td> <td><?php echo $avto ['gos_nomer']; ?></td></tr>

	<tr><td>Дата нарушения:</td> <td><?php echo $narush ['data']; ?></td></tr>
    <tr><td>Время нарушения:</td> <td><?php echo $narush ['time']; ?></td></tr>
</table>
</div>

