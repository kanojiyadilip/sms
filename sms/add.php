<?php

   function add()
   {
	include('dbcon.php');
	$rollno=$_POST['rollno'];
	$standerd=$_POST['std'];
	
	$sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standerd`='$standerd'";
	
	$run=mysqli_query($con,$sql);
	if(mysqli_num_rows($run)>0)
	{
	  $data=mysqli_fetch_assoc($run);
	  ?>
	  <head>
	  <style>
	
	  </style>
	  </head>
	  <table align="center" border="1" style="width:60%; margin-top:250px; background-color:black; color:white;"  >
	  <tr>
	  <th colspan="3" align="center" style="background-color:black; color:white" >Student Detail</th>
	  </tr>
      <tr>
	  <td rowspan="5"   color:white" > <img src="dataimg/<?php  echo $data['image']; ?>" style="max-height:150px; max-width:120px; padding-left:80px;" /> </td>
	  
	  <th>Roll No.</th>
	  <td><?php  echo $data['rollno']; ?></td>
	  </tr>
	  
	  <tr>
	  <th>Name</th>
	  <td><?php  echo $data['name']; ?></td>
	  </tr>
	  
	  <tr>
	  <th>City</th>
	  <td><?php  echo $data['city']; ?></td>
	  </tr>
	  
	  <tr>
	  <th>Parent Contact</th>
	  <td><?php  echo $data['pcont']; ?></td>
	  </tr>
	  
	  <tr>
	  <th>Standerd</th>
	  <td><?php  echo $data['standerd']; ?></td>
	  </tr>
	  	  </table>
	  <?PHP
	}
	else
	{
		echo "<script>alert('sorry there have no this type of data'); </script>";
	}
   }

?>