<?php
include ("studentform.php");
include ("connect.php");

if(isset($_POST['submit']))
{
	$n=$_POST['name'];
	$e=$_POST['email'];
	$p=$_POST['password'];
	$cp=$_POST['cpassword'];
	
	$query="insert into reg2(name,email,password,confirm_p)
	values('$n', '$e', '$p', '$cp')";
	
	$result=mysqli_query($con, $query);
	
	if($result)
	{
		echo header("location:show.php");
	}
	else
	{
		echo "not creat database";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="studentform.css" />
  </head>
  <body>
    <div class="container">
      <div class="center">
          <h1>Register</h1>
          <form method="POST" action="">
              <div class="txt_field">
                  <input type="text" name="name" required>
                  <span></span>
                  <label>Name</label>
              </div>
              <div class="txt_field">
                  <input type="email" name="email" required>
                  <span></span>
                  <label>Email</label>
              </div>
              <div class="txt_field">
                  <input type="password" name="password" required>
                  <span></span>
                  <label>Password</label>
              </div>
              <div class="txt_field">
                  <input type="password" name="cpassword" required>
                  <span></span>
                  <label>Confirm Password</label>
              </div>
              <input name="submit" type="Submit" value="Sign Up">
              <div class="signup_link">
                  Have an Account ? <a href="loginForm.php">Login Here</a>
              </div>
          </form>
      </div>
  </div>
  </body>
</html>