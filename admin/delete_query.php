<?php
$conn=mysqli_connect("localhost","root","","bld_dntn") or die("Connection error");
$que_id = $_GET['id'];
$sql= "DELETE FROM contact_query where query_id={$que_id}";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
 ?>
