<?php 
include("link_bd.php");
if (isset($_GET["nomer"]) && isset($_GET["strahovka"])) { 

$nomer = $_GET["nomer"]; 
$strahovka = $_GET["strahovka"];

$sql = "SELECT * FROM `avto` WHERE `gos_nomer` = '".$nomer."' AND `strahovka` = '".$strahovka."' "; 
$result = $connection->query($sql); 
$assocArray = $result->fetch(); 
if (($assocArray['strahovka'] == $strahovka) && ($assocArray['gos_nomer'] == $nomer)) { 
print_r("да"); 
} else { 
echo "не"; 
}

}
 ?>
