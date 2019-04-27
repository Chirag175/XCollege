<?php
session_start();

date_default_timezone_set("Australia/Melbourne");	// Sets the default timezone as of Melbourne, Australia.
$_SESSION['time'] = date("h:i:sa");
$_SESSION['date'] = date("d/m/Y");
$_SESSION['type'] = $_POST["type"];
header("location: contact.php");

?>