<html>
<head>
<style>
form{background:pink;width:400px; padding-top:10px; padding-left:20px;}
form input{height:30px; border-radius:5px;}
.box{display:flex;  }
.box1{background:blue; 
margin:10px; 
height:250px;  
width:100px; 
text-align:center;}
</style>
</head>
<body>
<form method="post">
<input type="text" name="num" value="" required>
<input type="submit" name="ok1" value="while" >
<input type="submit" name="ok2" value="do_while" >
<input type="submit" name="ok3" value="for_loop" >
<div class="box">
	<div class="box1">
	<p>while_loop</p>
	<?php
	if(isset($_POST['ok1']))
	{
	$num=$_POST['num'];	
	$i=1;
	while($i<=$num)
	{
		if($i%2==0)
		echo "<br>even".$i;
		$i++;
	}
	}?>
	</div>
	<div class="box1">
	<p>do_while</p>
	<?php 
	if(isset($_POST['ok2']))
	{
	$num=$_POST['num'];
	$j=1;
	do
	{
		if($j%2==0)
		echo "<br> even=".$j;
		$j++;
	}
	while($j<=$num);
	}
	?>
	</div>
	<div class="box1">
	<p>for_while</p>
	<?php
	if(isset($_POST['ok3']))
	{
		$num=$_POST['num'];
	for($k=1; $k<=$num; $k++)
	{
		if($k%2==0)
		echo "<br>even=".$k;
	}
	}?>
	</div>
</div>
</form>
</body>
</html>