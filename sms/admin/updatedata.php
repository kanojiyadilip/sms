<?php
 include('../dbcon.php');
 
 $rollno=$_POST['rollno'];
 $name=$_POST['name'];
 $city=$_POST['city'];
 $pcont=$_POST['pcont'];
 $std=$_POST['std'];
 $id=$_POST['sid'];
 $imagename=$_FILES['simg']['name'];
 $tampname=$_FILES['simg']['tmp_name'];
 
 move_uploaded_file($tampname,"../dataimg/$imagename");
 
 
 
 $qry="UPDATE `student` SET `rollno`='$rollno',`name`='$name',`city`='$city',`pcont`='$pcont',`standerd`='$std',`image`='$imagename' WHERE `id`='$id';";
 
 $run = mysqli_query($con,$qry);
 
 if($run==TRUE)
 {
	  ?>
	 <script>
	 alert("Update the data succsessfully ");
	 window.open('updateform.php?sid=<?php echo $id; ?>','_self');
	 </script>
	 <?php
 }
?>

