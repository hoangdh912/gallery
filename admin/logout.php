<?php include_once("includes/header.php"); ?>

<?php 

$session->logout();
redirect("login.php");