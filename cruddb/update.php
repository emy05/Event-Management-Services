<?php
	include "connection.php";
	$sql = "UPDATE `clients` SET `name` = 'Pauline', `stars`= '4.9' WHERE `id` = 3";
	$conn->query($sql);
	echo "Client record updated";
?>
