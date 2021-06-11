<?php
session_start();
include("function.php");


$_SESSION["name"] = $_POST["name"];
$_SESSION["hand"] = $_POST["hand"];

echo h($_SESSION["name"])."さん<br>";

include("result.php");
?>