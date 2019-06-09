<?php
$page = $_GET['page'];
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php?page=$page");
exit(); }
?>