<?php
if(isset($_POST['submit']))
{
	$num=$_POST['num'];
	$len=strlen((string)$num);
	$sum=0;
	
	for($i=0; $i<$len; $i++)
	{
		$sum += pow((int)$num[$i],$len);
	}
	
	if($sum == $num)
	{
		echo "$num is an armstrong number";
	}
	else
	{
		echo "$num is not an armstrong number";
	}
	
	
}
?>

<html>
<head>
<title>
palindrom
</title>
</head>
<form method="post" name="" action="">
<input type="number" value="" name="num">
<input type="submit" value="ok" name="submit">

</form>
</html>