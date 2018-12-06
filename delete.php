<?php 

include_once("connect.php");


$id=$_GET["ID"];


$result=mysqli_query($con,"DELETE FROM user_information where ID=$id");



 if($result){


 	header("location:show.php");
 }
   else{


   	echo "error";
   }


 ?>