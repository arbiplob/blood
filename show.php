
<?php
  session_start();

  if(!$_SESSION["aname"]){

    header("location:admin_login.php?error=you are not admin...!");
  }

?>
<?php 

include_once("connect.php");

 ?>


  <table   border="1px solid">

<a href="admin_logout.php">Log Out</a>

 <?php 

   $result=mysqli_query($con,"SELECT *FROM user_information order by ID asc");
?>

<th> Full Name</th>

<th> Number</th>
<th> Blood Group</th>
<th> Gender</th>
<th> Date of Birth</th>
<th> Home District</th>
<th> Present Address</th>
<th></th>
<th></th>
<?php
   while($res=mysqli_fetch_array($result)){

     echo"<tr>";

   	  
   	  echo "<td>" .$res["Fname"]. "</td>";
   	  echo "<td>" .$res["Number"]. "</td>";
   	  echo "<td>" .$res["Bgroup"]. "</td>";
   	  echo "<td>" .$res["Gender"]. "</td>";
   	  echo "<td>" .$res["Dob"]. "</td>";
   	  echo "<td>" .$res["Hdistrict"]. "</td>";
   	  echo "<td>" .$res["Preaddress"]. "</td>";

   	  echo "<td> <a href=\"delete.php?ID=$res[ID]\">Delete</a></td>";
   	      echo "<td><a href=\"edit.php?ID=$res[ID]\">Edit</a></td>";

   }

  ?>