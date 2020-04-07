<?php
session_start();

$user="admin";
$password="12345";

if(!isset($_SESSION["user"])){
	if($_POST["username"]==$user && $_POST["password"]==$password){
		$_SESSION["user"]=$_POST["username"];
		$_SESSION["message"]="";	
		header("Location: admin.php");	
	}	
	else{
		$_SESSION["message"]="Nesprávne meno alebo heslo !";
		header("Location: index.php");
	}

}
else{
	echo "already logged in";
}

?>

