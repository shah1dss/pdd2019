<?php 
include("script/link_bd.php");

$kod_driver=$_GET['kod_driver'];
$sql = "SELECT * FROM drivers WHERE kod_driver = '".$kod_driver."'";
$result = $connection->query($sql);
$row=$result->fetch();?>


<link rel="stylesheet" href="style/style.css">
<table id="table-after-search">
	<haeder><meta charset="UTF-8"></header>
	<thead>
    	<tr>
    <td>Фамилия:</td>
     		 
    <td><?php 
    echo $row ['surname'];

    ?></td>
    
       </tr>
  	</thead>
  	<tbody>
	</tbody>

</table>
