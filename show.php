<?php
include("connect.php");
$query="select * from reg2";
$result=mysqli_query($con, $query);
?>
<a href='Registration.php'>ADD DATA</a>
<table border='1'>		
		<th>DI</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>PASSWORD</th>
		<th>CONFIRM PASSWORD</th>
		<th>update</th>
		<th>delete</th>		
<?php
	while($data=mysqli_fetch_assoc($result))
		{
			echo "<tr>
					<td>".$data['id']."</td>
					<td>".$data['name']."</td>
					<td>".$data['email']."</td>
					<td>".$data['password']."</td>
					<td>".$data['confirm_p']."</td>
					<td><a href='update.php?sid=$data[id];'>UPDATE</a></td>
					<td class='delete'><a href='delete.php?id=$data[id];'>DELETE</a></td>
				</tr>";
		}
?>
<style>
th{background-color:E4B1F0;}
.delete a{background:red; color:white;}
</style>
