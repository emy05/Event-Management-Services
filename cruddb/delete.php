<?php
	include "connection.php";
	$sql = "DELETE FROM `clients` WHERE `id` = 1";
	$conn->query($sql);
	echo "Client record deleted";
?>