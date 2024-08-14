<?php
if(isset($_POST['submit']))
{
	$a=$_POST['a'];
	$b=$_POST['b'];
	
}

?>

<html>
<head>
<style>
.box1{background:pink; height:220px; width:210px;  padding:10px;  }
.box1 input{height:40px; display:flex;}
#btn{background:#a832a8; height:40px; width:100px; color:white; font-weight:bold; font-size:30px; } 
 </style>
</head>
<body>
<form method="post">
<div class="box1" >
<h4>Who is bigger among A and B</h4>
	<input type="text"  name="a" value="" placeholder="enter value a">
	<input type="text" name="b" value="" placeholder="enter value b">
	<input type="text" value="<?php 
	if ($a>$b){
		 echo "a is greater then";
	 }
	 elseif($b>$a){
		 echo "b is greater then";
	 }
	 else{
		 echo "both equal a and b";
	 }?>">
	<input id="btn" type="submit" name="submit" value="OK">
</form>
</body>
</html>