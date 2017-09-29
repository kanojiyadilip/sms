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

<table align="center">
<form method="post" action="updatestudent.php"">
<tr>
<th>Enter Standerd</th>
<th><select name = "standerd">
	     <option value="1">1st</option>
		 <option value="2">2nd</option>
         <option value="3">3rd</option> 
         <option value="4">4th</option>
         <option value="5">5th</option>
	</select></th>
<th>Enter Student Name</th>
<th><input type="text" name="stuname" palceholder="Enter student name"></th>
<th><input type="submit" name="submit" value="search"></th>
</tr>
</form>
</table>




<?php
if(isset($_POST['submit']))
{
   include('../dbcon.php');
   $standerd=$_POST['standerd'];
   $name=$_POST['stuname'];

   $qry=" SELECT * FROM `student` WHERE `standerd`= '$standerd' AND `name` LIKE '%$name%' ";
   $run=mysqli_query($con,$qry);
  
 
   if(mysqli_num_rows($run)<1)
   {
	   echo"<h4 align='center'>There have no matchin this type of data</br> </h4>";
	    echo"<h4 align='center'>Please Enter Valid Details</br> </h4>";
   }
   else
  {
	   
	 
	   $count=0;
	 
	   while($data=mysqli_fetch_assoc($run))
	 {
		 $count++;
	  ?>
	  
	  <table align="center" style=" background-color:white;   margin-top:20px;  width:60%" border="1"; >
<tr style="background-color:black; color:white;">
   <th> NO. </th>
   <th> Image </th>
   <th> Name </th>
   <th> Roll NO. </th>
   <th> Edit </th>
   </tr>
	  
	  
	  
		 <tr>
		 <th> <?php echo $count; ?>  </th>
		 <th> <img src = "../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;" /></th>
		 <th> <?php echo $data['name'] ?>  </th>
		 <th> <?php echo $data['rollno'] ?>   </th>
		 <th> <a href="updateform.php?sid=<?php echo $data['id']?>"</a>Edit</th>
		 </tr>
		 <?php
	 }
	 
 }
}
 ?>