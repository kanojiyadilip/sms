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
?>




 <div class="admintitle" align="center">
        <h3><a href="../index.php" style="float:left; margin-left:30px; color:#fff; font-size:20px;">Back</a></h3>
        <h3><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h3>
        <h1> Welcome to Admin Dashboard  </h1>
		
 </div>
 
 <div class="dashboard">
 <table align="center" border="1" style="width:50%;  background-color:#94b8b8;  ">
 <tr>
 <td>1.</td><td><a href="addstudent.php" stylr="text-decoration:non;"> Insert Student Details</a></td>
</tr>

<tr>
 <td>2.</td><td><a href="updatestudent.php"> Update Student Details</a></td>
</tr>

<tr>
 <td>3.</td><td><a href="deletestudent.php"> Delete Student Details</a></td>
</tr>
</table>







</body>
</html>