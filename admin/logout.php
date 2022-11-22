<?php 


session_start();
$_SESSION =[];
session_unset();
session_destroy();

$_SESSION["logout"] = true;

header("Location: index.php")


 ?>