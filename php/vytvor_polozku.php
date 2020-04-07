<?php
session_start();
include "pripoj.php";
$sql="INSERT INTO polozky(typ,nazov,pocet,cena) VALUES(".$_POST["id"].",'".$_POST["nazov"]."',".$_POST["pocet"].",".$_POST["cena"].")";
$conn->query($sql);
$conn->close();
?>
