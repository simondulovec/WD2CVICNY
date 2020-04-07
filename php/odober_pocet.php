<?php
include "pripoj.php";
$sql="UPDATE polozky SET pocet=pocet-1 WHERE id=".$_POST["id"];
$conn->query($sql);
$conn->close();
?>
