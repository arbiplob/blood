<?php
  session_start();
?>
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
	<title></title>
</head>
<body>
	<center>
	<form method="POST" action="u_login.php">
		<table>
			<th bgcolor="white" colspan="5">If You Register Your Information pleace Login  </th>
			<tr>
				<td>Number:</td>
				<td><input type="number" name="number" placeholder="Enter Your Number" required></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" placeholder="Enter Your Password" required></td>
			</tr>
			<tr>
				<td ><a href="u_reg.html">Create </a></td>
				<td><button type="submit" name="submit" class="button">Login</button></td>
			</tr>
		</table>
	</form>
        </center>
     <a href=""></a>
     <?php 

  include_once("connect.php");

    if(isset($_POST["submit"])){
  $number=$_SESSION["number"]=$_POST["number"];
  $password=$_POST["password"];
 $sql="SELECT * FROM user_information WHERE Number = '$number'  AND Password = '$password'";
 $result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
		while ($row =  mysqli_fetch_assoc($result)){
			
			header("location:main.php");
		}
		}
	else{
		echo "<script>alert('Number And Password Is Incorrect!')</script>";
	}
}
	?>
</body>
</html>
