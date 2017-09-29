<?php
session_start();
if(isset($_SESSION['uid']))
{
header('location:admin/admindash.php');	
}


?>
<!DOCTYPE HTML>
<html lang="en_us">
<head>
    <meta charset="UTF-8">
	<tittle></tittle> 
</head>
<body>

<div class="login" align="center" >
<h3><a href="index.php" style="float:left; margin-left:10px; color:#fff; font-size:20px;">Back</a></h3>
<h1   style="background-color:silver;"  align="center">        Admin Login </h1>

</div>
<form action="login.php" method="post">
<table align="center">
<tr  >
<td>User Name</td>
<td><input type="test" placeholder="user name" name="uname"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" placeholder="Password" name="pass"></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" value="Login" name="login"></td>
</tr>
</table>
</form>
</body>
</html>

<?php

include('dbcon.php');
if(isset($_POST['login']))
{
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	
	$qry=" SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password';";
	$run = mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($row<1)
	{
		?>
		<script>
		alert('Username or password not match !!');
		window.open('login.php','_self');
		</script>
		<?php
	}
	else
	{
		 $data=mysqli_fetch_assoc($run);
		 $id=$data['id'];
		
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
	}
	
}

?>