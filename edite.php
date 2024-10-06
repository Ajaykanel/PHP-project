<?php
include("connecte.php");
$id=$_GET['idshow'];

$sql="select * from reg where sid='$id'";

$result=mysqli_query($con_data, $sql);
$data=mysqli_fetch_assoc($result);




?>





<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$con=$_POST['contect'];
	
	include("connecte.php");
	
//	$sql="insert into reg(sname,semail,spassword,con)values('$name', '$email', '$pass', '$con')";
	
	//$re"update reg set sname='$name', semail='$email', spassword='$pass', con='$con' where sid='$id'";

   	$sql="UPDATE reg set sname='$name',semail='$email',spassword='$pass',con='$con' where sid='$id'";	 
	$result=mysqli_query($con_data, $sql);
	
	if($result)
	{
		header("location: display.php");
		
	}
	else
	{
		echo "not conet";
	}
	
	
	
}

?>
<html>
<head>
</head>
<body>
<form method="post" action="" name="">
<pre>
name:	<input type="text" name="name" value="<?php echo $data['sname'];?>" required>
emai:	<input type="text" name="email" value="<?php echo $data['semail'];?>" required>
pass:	<input type="text" name="password" value="<?php echo $data['spassword'];?>" required>
con:	<input type="text" name="contect" value="<?php echo $data['con'];?>" required>
	<input type="submit" name="submit" value="submit">
</pre>
</form>
</body>
</html>