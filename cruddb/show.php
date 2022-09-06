<html>
<body bgcolor="yellow">
<?php
      include "connection.php";
  ?>
<center>
	<h1>All Clients Record</h1>
<hr>
		<table border = 1 cellpadding = 15 width = 600 height = 300>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Stars</th>
			</tr>
			<?php
				$sql = "SELECT * FROM `clients`";
				$res = $conn->query($sql);
				while($rows = $res->fetch_array()){
					echo "<tr>
						<td>$rows[id]</td>
						<td>$rows[name]</td>
						<td>$rows[phone]</td>
						<td>$rows[address]</td>
						<td>$rows[stars]</td>
						</tr>";
				}
			?>
		</table>
</center>
<a href="http://localhost/testProject/cruddb/update.php">Show the updated clients </a> <br></br>
<a href="http://localhost/testProject/cruddb/delete.php">Show the deleted clients </a>

</body>
</html>