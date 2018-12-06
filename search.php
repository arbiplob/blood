<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title></title>
</head>
<body>
  
  <marquee direction="right"> If you Need Blood.. Search District Or Blood Group </marquee>
  <center>
  <form method="POST" action="search.php">
    <table>
      <tr>
        <td bgcolor="cyan"  ><input type="text" name="search" placeholder="group or district"></td>
    <td ><button  type="submit" name="submit" class="button" >search</button></td>
      </tr>
    </table>
    
  </form>
       <a href="main.php"> Back Home</a>
    </center>



  <?php 

     include_once("connect.php");
     ?>
     <table border="1px solid" align="center">
     <?php
   
        if (isset($_POST["search"])) {
            
            $u_search=$_POST["search"];

            $sql="SELECT * FROM user_information WHERE Bgroup = '$u_search'  OR Hdistrict= '$u_search'";
            $result=mysqli_query($con,$sql);

            ?>

<th> Full Name</th>

<th> Number</th>
<th> Blood Group</th>
<th> Gender</th>
<th> Date of Birth</th>
<th> Home District</th>
<th> Present Address</th>

            <?php
            if (mysqli_num_rows($result)>0) {
    while ($row =  mysqli_fetch_assoc($result)){

      echo"<tr>";

      
      echo "<td>" .$row["Fname"]. "</td>";
      echo "<td>" .$row["Number"]. "</td>";
      echo "<td>" .$row["Bgroup"]. "</td>";
      echo "<td>" .$row["Gender"]. "</td>";
      echo "<td>" .$row["Dob"]. "</td>";
      echo "<td>" .$row["Hdistrict"]. "</td>";
      echo "<td>" .$row["Preaddress"]. "</td>";
      
      

      
      

    }
        }
      }


   ?>

   
</body>
</html>