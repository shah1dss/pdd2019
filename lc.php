<?php 
include("script/link_bd.php");

$strahovka=$_GET['strahovka'];


$sql = "SELECT `kod_driver` FROM  `avto` WHERE `strahovka` = '".$strahovka."'";

// $sql = "SELECT * FROM avto WHERE strahovka= IN (SELECT id FROM table2);
// ".$kod_driver."'";

$result = $connection->query($sql);
$row=$result->fetch();

$sql = "SELECT * FROM `drivers` WHERE `kod_driver`= '".$row ['kod_driver']."'";
$result = $connection->query($sql);
$row=$result->fetch();
?>


<link rel="stylesheet" href="style/style.css">
<table id="table-after-search">
	<haeder><meta charset="UTF-8"></header>
	<thead>
    <td>Фамилия:</td><br>
    <td>Имя:</td>
    <td>Отчество:</td>		 
    <td>
      <?php 
    echo $row ['surname'], $row ['name'], $row ['fathername'];;
    ?>
      
    </td>
    
       </tr>
  	</thead>
  	<tbody>
	</tbody>

</table>
