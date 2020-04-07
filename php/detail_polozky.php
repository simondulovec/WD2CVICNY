<?php
session_start();
//ulozim de session aktualu hodnotu postu iba ak je isset ("refresh stranky so skokom na php subor")
if(isset($_POST["prechod"])){
	$_SESSION["prechod"]=$_POST["prechod"];
}
include "pripoj.php";
$sql="SELECT nazov FROM typ_polozky WHERE id=".$_SESSION["prechod"];
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail_polozky.css">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     
     <script src="crud.js"></script>	


  </head>
  <body>
	<div class="grid">
		<header>
		<a><?php echo $row["nazov"];?></a>	
		<button id="new"><span>Nová položka<span></button>
		<form id="hl_menu" action="admin.php">
		<button id="spat" type="submit"><span>Hlavné menu</span></button>
		</form>
		
		</header>

<main>
<?php
include "nacitaj_polozky.php";
?>
</main>

	<section>
	<div id="side_menu"></div>
	</section>
	</div>


  </body>
</html>
