<?php 
	  include("link_bd.php");

	  if ($_GET["func"]=="add") {
	  		$sql= "INSERT INTO `avto` (`kod_avto`, `model`, `gos_nomer`, `strahovka`) VALUES 
	  		(".$_GET["id"].", ".$_GET["model"].", ".$_GET["nomer"].", ".$_GET["strahovka"].")";
			$result = $connection->query($sql); 
			echo "dobav";
	  }

	    if ($_GET["func"]=="add1") {
	  		$sql= "INSERT INTO `drivers`(`kod_avto`, `surname`, `name`, `fathername`, `pasport`)  VALUES 
	  		(".$_GET["id"].", ".$_GET["name"].", ".$_GET["surname"].", ".$_GET["fathername"].",".$_GET["pasport"].")";
			$result = $connection->query($sql); 
			echo "dobav1";
	  }


	    if ($_GET["func"]=="add2") {
	  		$sql= "INSERT INTO `narusheniya` (`kod_avto`, `id_narush`, `data`, `time`, `place`)  VALUES 
	  		(".$_GET["id"].", ".$_GET["id1"].", '".$_GET["data1"]."', '".$_GET["time"]."','".$_GET["place"]."')";
			$result = $connection->query($sql);
			echo "dobav2";
	  }

	   if ($_GET["func"]=="add3") {
	  		$sql= "INSERT INTO `vid_narush` (`id_narush`, `state_narush`, `name_narush`, `price_narush`)   VALUES 
	  		(".$_GET["id1"].",".$_GET["state"].", ".$_GET["name1"].",".$_GET["price"].")";
			$result = $connection->query($sql); 
			echo "dobav3";
	  }




 ?>