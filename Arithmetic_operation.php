<?php
if(isset($_POST['submit']))
{
	$a=$_POST['a'];
	$b=$_POST['b'];
	$op=$_POST['op'];
	
	$result=(($op=='+')*($a+$b)+($op=='-')*($a-$b)+($op=='*')*($a*$b)+($op=='/')*($a/$b));
		
}
?>
<html>
<head>
<style>
#box1{width:115px;}
</style>
</head>
<body><pre> <fieldset><legend>operation_arithmetic</legend>
<form method='post' name="no">
	First No:  <input type="text" value="" name="a" placeholder="Enter value a">
	Symbol:	   <input type="text" value="" name="op">
	Secound No:<input type="text" value="" name="b" placeholder="Enter value b">
		   <input type="submit" value="submit" name="submit"><input type="text" value="<?=$result?>" id="box1">
	

</form>
</fieldset>
</pre>
</body>
</html>

