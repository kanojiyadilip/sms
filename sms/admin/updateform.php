<?php
session_start();
      
	   if($_SESSION['uid'])
	   {
		echo "";   
	   }
	   else
	   {
		header('location: ../login.php');   
	   }
?> 
<?php
      include('header.php');
	  include('titlehead.php');
	  include('../dbcon.php');
	  $sid=$_GET['sid'];
	  $sql="SELECT * FROM `student` WHERE `id`='$sid'";
	  $run=mysqli_query($con,$sql);
	  $data=mysqli_fetch_assoc($run);
	  
	  
?>
<form action="updatedata.php" method="post" enctype="multipart/form-data">
<table align="center" style="width:50%; margin-top:40px; background-color:#ffc34d; "  >
<tr>
<th >Roll NO.</th>
<td ><input type="text" name="rollno" value=<?php echo $data['rollno']; ?> required></td>
</tr>

<tr>
<th>Name</th>
<td><input type="text" name="name" value=<?php echo $data['name'];?> required></td>
</tr>

<tr>
<th>City</th>
<td><input type="text" name="city" value=<?php echo $data['city'];?> required></td>
</tr>

<tr>
<th>Parence Conntact</th>
<td><input type="text" name="pcont" value=<?php echo $data['pcont'];?> required></td>
</tr>

<tr>
<th>Standerd</th>
<td><input type="number" name="std" value=<?php echo $data['standerd'];?> required></td>
</tr>

<tr>
<th>Image</th>
<td><input type="file" name="simg" ></td>
</tr>

<tr>
<input type="hidden" name="sid" value="<?php echo $data['id'];?>" />
<td colspan="2" align="center"><input type="submit" name="submit" value="Submit" required></td>

</tr>
</table>
</form>
</body
</html>