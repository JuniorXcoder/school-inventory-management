<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php?page=index.php");
exit(); }
?>