<?php 
include("link_bd.php");

$sql = "SELECT * FROM avto";
$result = $connection->query($sql);?>



<table id="table-after-search">
	<thead>
    <tr>
      <td>ID</td>
      <td>Автомобиль</td>
      <td>Модель</td>
      <td>Гос.номер</td>
      <td>Страховка</td>
    
    </tr>
  	</thead>
  	<tbody>
  		<?php 
  		while($row=$result->fetch()) {
	    $id[$i] = $row['id'];
	    $avto[$i] = $row['avto'];
	    $model[$i] = $row['model'];
	    $gos_nomer[$i] = $row['gos_nomer'];
	    $stahovka[$i] = $row['stahovka'];
	    
	    echo "<tr><td>", $id[$i], "</td>",
	    		"<td>", $avto[$i], "</td>",
	    		"<td>", $model[$i], "</td>",
	    		"<td>", $gos_nomer[$i], "</td>",
	    		"<td>", $stahovka[$i], "</td>",

	    "</tr>"; 
	    $i++;
		}
		 ?>
	</tbody>

</table>

