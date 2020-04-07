<?php
session_start();
echo "<button class='zrus_formular'><span>x</span></button>
      <input id='nazov' type='text' placeholder='Názov'>
      <input id='pocet' type='number' placeholder='Počet'>
      <input id='cena' type='number' placeholder='Cena'>
      <button id='vytvor_polozku' value=".$_SESSION["prechod"]."><span>VYTVORIŤ POLOŽKU</span></button></br>";  
?>
