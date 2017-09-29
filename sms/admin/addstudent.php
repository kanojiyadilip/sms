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
?>
<form action="addstudent.php" method="post" enctype="multipart/form-data">
<table align="center" style="width:50%; margin-top:40px;  background-color:#999966; "  >
<tr>
<th style="background-color:#999966" >Roll NO.</th>
<td style="background-color:#999966"><input type="text" name="rollno" placeholder="Enter Roll No." required></td>
</tr>

<tr>
<th>Name</th>
<td><input type="text" name="name" placeholder="Enter Name" required></td>
</tr>

<tr>
<th>City</th>
<td><input type="text" name="city" placeholder="Enter City" required></td>
</tr>

<tr>
<th>Parent Conntact</th>
<td><input type="number" name="pcont" placeholder="Enter Parent Conntact" required></td><p style="color:red;"><?php if(isset($msg)){echo $msg;}?></p>
</tr>

<tr>
<th>Standerd</th>
<td><select name = "std">
	     <option value="1">1st</option>
		 <option value="2">2nd</option>
         <option value="3">3rd</option> 
         <option value="4">4th</option>
         <option value="5">5th</option>
	</select></td>

</tr>

<tr>
<th>Image</th>
<td><input type="file" name="simg" placeholder="Enter Roll No." ></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Submit" required></td>
</tr>
</table>
</form>
</body
</html>

<?php
if(isset($_POST['submit']))
{
 include('../dbcon.php');
 

 $rollno=$_POST['rollno'];
 $name=$_POST['name'];
 $city=$_POST['city'];
 $pcont=$_POST['pcont'];
 $std=$_POST['std']; 
 $imagename=$_FILES['simg']['name'];
 $tampname=$_FILES['simg']['tmp_name'];
 
 if(!filter_var($pcont, FILTER_VALIDATE_INT))
 {
	 $msg=" Please enterr valid contact number";
 } 
 else{
	 
 }
 
 move_uploaded_file($tampname,"../dataimg/$imagename");
 
 
 
 $qry=" INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`, `image`) VALUES ('$rollno','$name','$city','$pcont','$std','$imagename')";
 
 $run = mysqli_query($con,$qry);
 
 if($run==TRUE)
 {
	   ?>
	 <script>
	 alert("Data insert succsessfully ");
	 </script>
	 <?php
 }
 else
 {     ?>
	 <script>
	 alert("not insert value ERROR !!")
	 window.open('addstudent.php','_self')
	 </script>
	 <?php
 }
}
?>