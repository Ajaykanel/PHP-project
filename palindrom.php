<?php
if(isset($_POST['submit']))
{
$num=$_POST['num'];
$sum=0;
$tem=$num;
$rev;
while($num>0)
{
	$rev=$num%10;
	$sum=($sum*10)+$rev;
	$num=(int)($num/10);
}

if($sum==$tem)
{
	echo "palindrome number";
}

else
{
	echo "not palindrome number";
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