<?php
include("connecte.php");
$id=$_GET['id'];

$sql="delete from reg where sid= $id";

$result=mysqli_query($con_data, $sql);
if($result)
{
	 header("location: display.php");
}

else
{
	echo "not delete data";
}
?>