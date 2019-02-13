<?php 
	  include("script/link_bd.php");

	  if ($_GET["func"]=="add") {
	  		$SQL= "INSERT INTO `avto` (`kod_avto`, `model`, `gos_nomer`, `strahovka`) VALUES
			(NULL, '.$_GET["model"].', '.$_GET["nomer"].', '.$_GET["strahovka"].')";
				$result = $connection->query($sql); 
			echo "dobav";
			echo $SQL;

	  }


 ?>