<?php
if(isset($_POST['submit']))
{
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
?>
<html>
<head>
<style>
form{background:#e80c87; width:400px; margin:50px;}
input{height:50px; padding-left:10px;}
#output{height:60px; width:400px; font-size:30px; margin-top:-50px; background:pink; color:blue;}
.btn{background:#ff00ff; width:115px; border:none; color:white; font-size:30px; font-weight:bold;}
</style>
</head>
<body>
<form method="post">
	<pre>
		<fieldset>
		<legend> greater then</legend>
		<input type="text" name="a" value="" placeholder="enter value a">
		<input type="text" name="b" value="" placeholder="enter value b">
		<input type="text" name="c" value="" placeholder='enter value c'>
		<input type="submit" name="submit" value="submit" class="btn">
		</fieldset>
	</pre>

		<input id="output" type="text" value="<?php if($a>$b && $a>$c)	{
		echo "a is greater then b and c";
	}
	elseif($b>$a && $b>$c){
		echo "b is greater then a adn b";
	}
	elseif($c>$b && $c>$a){
		echo "c is greater then a and b";
	}
	else{
		echo "a b and c both";
	}
}
?>" >
</form>
</body>
</html>
