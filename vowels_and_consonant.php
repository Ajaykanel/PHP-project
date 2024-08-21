<?php
if(isset($_POST['submit']))
{
		$ch=$_POST['a'];		
}
?>

<html>
<head>
<style>
#box1{position:absolute;
color:red; 
margin-top:8px; 
height:133px; 
text-align:center;  
font-size:30px; 
width:250px;  
margin-left:28px;}

img{display:flex;}

#bt{position:absolute; 
margin-top:160px; 
font-size:30px; 
background:blue; 
color:white; 
height:50px; 
width:100px; 
margin-left:100px;}
</style>
</head>
<body>
<form method="post">
<input type="text" name="a" id="box1" value="<?php if($ch>='a' && $ch<='z')
		{
			if($ch=='a' || $ch=='e' || $ch=='o' || $ch=='i' || $ch=='u')
			{
				echo "vowels";
			}
			else
			{
				echo "Consonant";
			}
		}
		else
		{
			echo "Invalid key";
		}?>">
<input type="submit" name="submit" value="ok" id="bt" >
<img src="https://shorturl.at/vpY0v">
</form>
</body>
</html>