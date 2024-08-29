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
		if($i%2==0)
		{
			echo "<br>even=".$i;
		}
		else
		{
			echo "<br> odd=".$i;
		}
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
		if($j%2==0)
		{
			echo "<br> even=".$j;
		}
		else
		{
			echo "<br> odd=".$j;
		}
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
		if($k%2==0)
		{
			echo "<br> even=".$k;
			
		}
		else
		{
			echo "<br> odd=".$k;
		}
	}?>
	</div>
</div>
</form>
</body>
</html>