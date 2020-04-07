<?php
include "pripoj.php";
$sql="DELETE FROM polozky WHERE id=".$_POST["id"];
$conn->query($sql);
$conn->close();
?>
