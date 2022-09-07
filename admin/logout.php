<?php 
include 'base_url.php';
session_start();
session_destroy();
session_unset();
header("location:$base_url/login");
?>