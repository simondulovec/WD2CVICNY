<?php

include 'pripoj.php';
$sql="SELECT nazov, pocet, cena FROM polozky WHERE id=".$_POST["id"];
$result=$conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();


echo "<button class='zrus_formular'><span>x</span></button>
      <br>
      <label>Názov:</label>
      <input id='upravy_nazov' type='text' value='".$row["nazov"]."'>
      <label>Počet:</label>
      <input id='upravy_pocet' type='number' value=".$row["pocet"].">
      <label>Cena</label>
      <input id='upravy_cena' type='number' value=".$row["cena"].">
      <button id='potvrdit_upravy' value=".$_POST["id"]."><span>POTVRDIŤ</span></button><br>";
?>
