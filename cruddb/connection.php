<?php
 $conn = new MYSQLi("localhost","root",null,"cruddb");
 if(mysqli_connect_error()){
 die(mysqli_connect_error());
 }
?>