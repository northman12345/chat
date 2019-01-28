<?php
session_destroy();
if (!isset($_SESSION['email']) ){
	# code...
	header('location:/squad/login.php');
}

?>