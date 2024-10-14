<?php
include("connect.php");
$sid=$_GET['id'];
$query="delete from reg2 where id=$sid";
$result=mysqli_query($con, $query);
if($result)
{
	header ("location:show.php");
}

else
{
	echo "not delete";
}


?>