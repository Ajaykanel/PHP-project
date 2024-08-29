<html>
<head>
<style>
.box{display:flex;}
.box1{background:#ff00ff; 
margin:10px; 
height:260px; 
width:100px; 
text-align:center; } 
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
		$table=$i*2;
		echo "<br>".$table;
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
		echo "<br> $j *2=".$table=$j*3;
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
		$table=$k*5;
		echo "<br> $j*2=".$table;
	}?>
	</div>
</div>
</form>
</body>
</html>