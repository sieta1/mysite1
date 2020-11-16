<?php
try {
	$db = new PDO("mysql:host=localhost; dbname=phpSitesi; charset=utf8", "root", "1234");
	
} catch (Exception $e) {
	die($e->getMessage());
}
?>