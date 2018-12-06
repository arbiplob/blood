<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
		table{
            border: 3px solid cyan;
            border-radius: 15px;
            background: cyan;

            }
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Admin Login</title>
</head>
<body>
	<center>
	<form method="POST" action="admin_login.php">
		<table>
			<tr>
				<td>Admin Name:</td>
				<td><input type="text" name="aname" placeholder="Enter Admin Name" required></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="apassword" placeholder="Enter Password"></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit" class="button">Login</button></td>
			</tr>
		</table>
	</form>
	</center>


     <?php 

  include_once("connect.php");

    if(isset($_POST["submit"])){
   $aname=$_SESSION["aname"]=$_POST["aname"];
   $apassword=$_POST["apassword"];


 $sql="SELECT * FROM admin_login WHERE user = '$aname'  AND password = '$apassword'";
 $result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
		while ($row =  mysqli_fetch_assoc($result)){
			
			header("location:show.php");
		}
		}
	else{
		echo "<script >alert('Password Or User Name Incorrect!')</script>";
		
	}
}
	?>
</body>
</html>
