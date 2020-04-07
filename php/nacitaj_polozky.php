<?php
session_start();
include "pripoj.php";
$sql1="SELECT * FROM polozky WHERE polozky.typ=".$_SESSION["prechod"];
$result = $conn->query($sql1);
while($row = $result->fetch_assoc()) { 
	echo "<div  class='polozka'>
	      	<div class='obrazok'>
		<img src='pozadie1.jpg'>
		</div>
	      <a>NÁZOV: <span class='".$row["id"]."nazov'>".$row["nazov"]."</span></a>
	      <a class='a_pocet'>POČET: <span class='".$row["id"]."pocet'>".$row["pocet"]."</span></a>
	      <a>CENA: <span class='".$row["id"]."cena'>".$row["cena"]."</span> EUR/ks</a>
	      <button class='tlacidlo pridaj_pocet' value=".$row["id"]."><span>+</span></button>
	      <button class='tlacidlo odober_pocet' value=".$row["id"]."><span>-</span></button>
	      <button class='upravit_polozku' value=".$row["id"]."><span>UPRAVIŤ</span></button>
	      <button class='zmaz_polozku' value=".$row["id"]."><span>ZMAZAŤ</span></button>
	     </div>";
}
?>
