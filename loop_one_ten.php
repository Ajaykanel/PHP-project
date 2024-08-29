<html>
<head>
<style>
.box{display:flex;}
.box1{background:blue; 
margin:10px; 
height:250px; 
color:white; 
width:100px; 
text-align:center;}
</style>
</head>
<body>
<form method="post">
<div class="box">
	<div class="box1">
	<p>while_loop</p>
	<?php $i=1;
	while($i<=10)
	{
		echo "<br>".$i;
		$i++;
	}
	?>
	</div>
	<div class="box1">
	<p>do_while</p>
	<?php 
	$j=1;
	do
	{
		echo "<br>".$j;
		$j++;
	}
	while($j<=10)
	?>
	</div>
	<div class="box1">
	<p>for_while</p>
	<?php
	for($k=1; $k<=10; $k++)
	{
		echo "<br>".$k;
	}?>
	</div>
</div>
</form>
</body>
</html>