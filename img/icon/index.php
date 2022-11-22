<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: ../../index.html");
	exit;
}
if (!isset($_SESSION["logout"])) {
	header("Location: ../../index.html");
	exit;
}
?>