<html>
<body bgcolor="violet">
<?php
      include "connection.php";
      if( isset($_POST["name"])){
		   $name    = $_POST['name'];
		  $phone   = $_POST['phone_number'];
		  $address = $_POST['address'];
		  $stars   = $_POST['stars'];
		  $sql = "INSERT INTO `clients`(`name`, `phone`, `address`, `stars`) VALUES ('$name','$phone','$address','$stars')";
		  $conn->query($sql);
		echo "One record Insert";
	  }
  ?>
<center>
	<h1>Add clients Record</h1>
<hr>
	<form method="post" action="">
		<table border = 1 cellpadding = 15 width = 350 height = 175>
		<tr>
			<td>Name</td>
			<td><input type = "text" name = "name" placeholder = "Enter Client Name"/></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type = "number" name = "phone_number" placeholder = "Enter Client Phone Number"/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name = "address" placeholder = "Enter Client Address"></textarea></td>
		</tr>
		<tr>
			<td>Stars</td>
			<td><input type = "number" name = "stars" placeholder = "Rate us"/></td>
		</tr>
		<tr>
			<td colspan = 2 align = "right"><input type = "submit" value = "Save" /></td>
		</tr>
		</table>
	</form>
</center>
<a href="http://localhost/testProject/cruddb/show.php">Show the clients </a>
</body>
</html>