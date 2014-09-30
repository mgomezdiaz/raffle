<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Raffle</title>
	<?php require 'logic.php';?>
	<style>
		
		
	</style>
</head>
<body>
<form action = 'index_raffle.php' method='post'>
	<input type = 'text' name ='contestan0'><br>
	<input type = 'text' name ='contestan1'><br>
	<input type = 'text' name ='contestan2'><br>
	<input type = 'text' name ='contestan3'><br>

	<input type='submit' value 'Pick a winner!'>



	<?php foreach($contestans as $key => $value):?>
	<?php echo $key ?> is a <? echo  $value ?><br>


 <?php endforeach ; ?>



