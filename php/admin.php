<?php
session_start();
if(isset($_SESSION["user"])){
	include "pripoj.php";

	$sql = "SELECT id,typ, nazov FROM typ_polozky";
	$result = $conn->query($sql);
	$conn->close();
}

else{ 
	header("Location: er.php");
	exit();
}	

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="admin.css" />
</head>

<body>
	<div class="grid admin" >
		<header class="admin_header">
		<a>PRIHLÁSENÝ AKO: ADMIN</a>
		<form class="odhlasit"  action="logout.php" method="post">
		<input type="submit" value="Odhlásiť sa">
		</form>
		</header>

		<main>

<?php while($row = $result->fetch_assoc()) {

			  echo "<div class='karta'>
				<a>".$row["nazov"]."</a>
				<div class='obrazok'>
				<img src=".$row["typ"].".jpg>
				</div>
				<form action='detail_polozky.php' method='post'>
				<button name='prechod' type='submit' value=".$row["id"].">ZOBRAZIŤ</button>
				</form>
				</div>";
	}
			?>
		</main>
	</div>
</body>
</html>
