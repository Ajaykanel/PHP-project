<html>
<head>
<style>
form{background:pink; width:400px; }
.box{display:flex; background:pink; width:400px;}
.box1{background:blue; 
margin:10px; 
height:250px; 
width:100px; 
text-align:center;}
</style>
</head>
<body>
<form method="post">
<p>one to ten number  add </p>
<div class="box">

	<div class="box1">
	<p>while_loop</p>
	<?php $i=1;
	$count=0;
	while($i<=10)
	{
		$count=$count+$i;
		echo "<br>".$count;
		$i++;
	}

	?>
	</div>
	<div class="box1">
	<p>do_while</p>
	<?php 
	$j=1;
	$count=0;
	do
	{
		$count=$count+$j;
		$j++;
	}
		while($j<=10);
		echo "<br>".$count;	

?>
	</div>
	<div class="box1">
	<p>for_while</p>
	<?php
	$count=0;
	for( $k=1; $k<=10; $k++)
	{
		$count=$count+$k;
		echo "<br>".$count;
	}?>
	</div>
</div>
</form>
</body>
</html>