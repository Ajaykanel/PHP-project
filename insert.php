<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$con=$_POST['contect'];
	
	include("connecte.php");
	
	$sql="insert into reg(sname,semail,spassword,con)values('$name', '$email', '$pass', '$con')";
	
	$result=mysqli_query($con_data, $sql);
	
	if($result)
	{
		header("location: website.php");
		
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
name:	<input type="text" name="name" required>
emai:	<input type="text" name="email" required>
pass:	<input type="text" name="password" required>
con:	<input type="text" name="contect" required>
	<input type="submit" name="submit" value= "submit"  >
</pre>
</form>
</body>
</html>