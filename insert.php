<?php 

  include_once("connect.php");


  if(isset($_POST["submit"])){


  	$name=$_POST["fname"];
  	$number=$_POST["number"];
  	$bgroup=$_POST["bgroup"];
  	$gender=$_POST["gender"];
  	$dob=$_POST["bday"];
  	$district=$_POST["district"];
  	$preaddress=$_POST["paddress"];
  	$password=$_POST["password"];
  	
  	


        


        $sql=mysqli_query($con,"INSERT INTO user_information(Fname,Number,Bgroup,Gender,Dob,Hdistrict,Preaddress,Password)VALUES('$name','$number','$bgroup','$gender','$dob','$district','$preaddress','$password')");

        if($sql){

        	echo "";

        }
         else{

         	echo "not inserted";
         }


  }



   header("location:u_login.php");
 ?>