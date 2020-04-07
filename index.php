<?php
session_start();
if(isset($_SESSION["user"])){
	unset($_SESSION["user"]);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet"> 

  </head>
  <body>
	  <div class="grid login">
		<header>
		<a>SPRÁVCA POLOŽIEK</a>
		</header>
		<main>
		<div class="form_container">
		<form action="login.php"  method="post">
			<div class="form_nazov"><a>admin</a></div>
			<div class="sprava"><span><?php echo $_SESSION["message"] ?></span></div>
			<div class="vstup"><input type="text" name="username" placeholder="Meno"></div>
			<div class="vstup"><input type="password" name="password" placeholder="Heslo"></div>
			<div class="tlacidlo"><button type"submit" name="submit">Prihlásiť sa</button></div>
		</form>
		</div>
		</main>
	  </div>
  </body>
</html>
