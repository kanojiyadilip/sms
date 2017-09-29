<!DOCTYPE HTML>
<html lang="en_us">
<head>
<style>

</style>

    <meta charset="UTF-8">
	<tittle></tittle> 
</head>
<body style="background-color:#99e6ff;">

<h1 align="center" ><i>Welcome to Student Managment System</i></h1>

<?php

session_start();
      
	   if(isset($_SESSION['uid']))
	   {
		
         ?><h3 align="center"  style="background-color:silver;" style="margin-right:20px"><a  href="admin/admindash.php">Admindash</a></h3>
		<?php
	   }
	   else
	   {
		   ?><h3 align="right"  style="background-color:silver;" style="margin-right:20px"><a  href="login.php">Admin Login</a></h3>
           <?php		   
	   }
	   
?>
           

<form method="post" action="index.php" >
<table   style="background-color:silver;  width:600px; height:100px; padding:25px; border:5px solid #999; text-align:justify; position:absolute; top:25%; left:25%; border-radius:15px 50px;" align="center" style="width:30%; " >
<tr>
<td  colspan="2" align="center"><b>Student Information</b></td>
</tr>
<tr>
<td>Choose Standerd</td>
<td>
    <select name = "std">
	     <option value="1">1st</option>
		 <option value="2">2nd</option>
         <option value="3">3rd</option> 
         <option value="4">4th</option>
         <option value="5">5th</option>
	</select>
</td>
</tr>	
<tr>
<td align="left"> Enter Rollno </td>
<td><input type="text" name="rollno" required></td>
</tr>

<tr align="center" >
<td align="center" colspan="2"><input type="submit" name="submit" ></td>
</tr>
		 
</body>
</html>

<?php

if(isset($_POST['submit']))
{
	include('add.php');
	echo add();
	 
}

?>