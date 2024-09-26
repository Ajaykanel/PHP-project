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


fieldset{height:300px; width:400px; margin-left:30%; background-color:pink; 
}
legend{color:red; text-align:center; font-size:30px; }
.box{color:red; font-size:20px; height:50px; text-align:center;}
.box2{color:red;}
.boxbt{font-size:50px;}
</style>
</head>
<body><pre> <fieldset><legend>Arithmetic Operators</legend>
<form method='post' name="no">
<table border="1" cellpadding="0" >
<tr>
<td class="box">First No:</td>
<td class="box2"><input type="text" value="" name="a" class="box" placeholder="Enter value a"></td>
</tr>

<tr>
<td class="box">Symbol:</td>
<td><input type="text" value="" name="op" class="box"></td>
</tr>

<tr>
<td class="box">Secound No:</td>
<td><input type="text" value="" name="b" class="box" placeholder="Enter value b"></td>
</tr>

<tr  >
<td ><input type="submit"  value="submit" name="submit" class="boxbt"></td><td><input type="text" value="<?=$result?>" class="box"></td>
</tr>
</table>
</form>
</fieldset>
</pre>
</body>
</html>

