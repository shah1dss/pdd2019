<?php 
	  include("link_bd.php");

	  if ($_GET["func"]=="add") {
	  		$sql= "INSERT INTO `avto` (`kod_avto`, `model`, `gos_nomer`, `strahovka`) VALUES 
	  		(NULL, ".$_GET["model"].", ".$_GET["nomer"].", ".$_GET["strahovka"].")";
			$result = $connection->query($sql); 
			echo "dobav";
	  }


 ?>