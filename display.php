<?php
include("connecte.php");
//include("de.php");
$query="select * from reg";

$result=mysqli_query($con_data, $query);

echo "<table border='1'>
		<th>SID</th>
		<th>SNAME</th>
		<th>SEMAIL</th>
		<th>SPASSWORD</th>
		<th>CONTECT_NO</th>";
		
while($data=mysqli_fetch_assoc($result))
{
	echo "<tr>
				<td>".$data['sid']."</td>
				<td>".$data['sname']."</td>
				<td>".$data['semail']."</td>
				<td>".$data['spassword']."</td>
				<td>".$data['con']."</td>
				<td><a href='edite.php?idshow=$data[sid]'>Update </a></td>
				<td><a href='de.php?id=$data[sid]'>delete</a></tb>
				
				
		 </tr>";
		
}

echo "</table>";
?>