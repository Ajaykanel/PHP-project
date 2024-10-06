<?php
$servername="localhost";
$username="root";
$password="";
$database="school";

$con_data=mysqli_connect($servername, $username, $password, $database) or die("does not connetc db");
if($con_data)
{
	echo "connected data";
}

else
{
	echo "not connected data";
}





?>