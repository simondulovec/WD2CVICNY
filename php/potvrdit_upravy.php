<?php
include "pripoj.php";
$sql="UPDATE polozky SET nazov='".$_POST["nazov"]."', pocet=".$_POST["pocet"].", cena=".$_POST["cena"]." WHERE id=".$_POST["id"];
$conn->query($sql);
$conn->close();
?>
