<?php 

include_once("connect.php");


   if(isset($_POST["update"])){


   	 $Fname=$_POST["fname"];
    $Number=$_POST["number"];
    $Bgroup=$_POST["bgroup"];
    $Gender=$_POST["gender"];
    $Dob=$_POST["bday"];
    $Hdistrict=$_POST["district"];
    $Preaddress=$_POST["paddress"];
    $password=$_POST["password"];
    $id=$_POST['id'];

   	 $result=mysqli_query($con, "UPDATE user_information SET Fname='$Fname',Number='$Number',Bgroup='$Bgroup',Gender='$Gender',Dob='$Dob',Hdistrict='$Hdistrict',Preaddress='$Preaddress'  where id = $id  ");
         
         if($result){
         	header("Location:show.php");
         }
         else{
         	echo "Update error";
         }


        }

 ?>
 <?php  
 
   $id=$_GET["ID"];
   $result=mysqli_query($con,"SELECT * FROM user_information WHERE ID=$id");

   while($res=mysqli_fetch_array($result)){
       
       $Fname=$res["Fname"];
       $Number=$res["Number"];
       $Bgroup=$res["Bgroup"];
       $Gender=$res["Gender"];
       $Dob=$res["Dob"];
       $Hdistrict=$res["Hdistrict"];
       $Preaddress=$res["Preaddress"];

       $id =$res["ID"];

   } 
  ?>
  <style >

    body{
      background-image: url("");
    }
    table{
            border: 3px solid cyan;
            border-radius: 15px;
            background: cyan;

            }
  </style>
    
    <link rel="stylesheet" type="text/css" href="style.css">

    <form action="edit.php" method="POST">

      <table align="center">
        <th><marquee direction="right"><h4>Update Your Information...</h4></marquee></th>
        <tr>
          <td>Full Name:</td>
          <td><input type="text" name="fname" value="<?php echo $Fname; ?>" ></td>
        </tr>
        <tr>
          <td>Number:</td>
          <td><input type="number" name="number" value="<?php echo $Number; ?>"></td>
        </tr>
        <tr>
          <td>Blood Group:</td>
          <td>
            <SELECT  name="bgroup" required>
            <option ><?php echo $Bgroup; ?></option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </SELECT>
          </td>
        </tr>

          <tr>
            <td>Gender:</td>
            <td>

              <input type="radio" name="gender" value="Male"  required>Male
          <input type="radio" name="gender" value="Female">Female
          <input type="radio" name="gender" value="Others">Others
            </td>
          </tr>

          <tr>
            <td>Date of Birth:</td>
            <td><input type="date" name="bday" value="<?php echo $Dob; ?>"></td>
          </tr>
          <tr>
            <td>Home District:</td>
            <td>
              <select name="district">
              <option ><?php echo $Hdistrict; ?></option>
              <option value="Barguna">Barguna</option>
              <option value="Barisal">Barisal</option>
              <option value="Bhola">Bhola</option>
              <option value="Jhalokati ">Jhalokati </option>
              <option value="Patuakhali">Patuakhali</option>
              <option value="Pirojpur ">Pirojpur </option>
              <option value="Bandarban ">Bandarban </option>
              <option value="Brahmanbaria ">Brahmanbaria </option>
              <option value="Chandpur ">Chandpur </option>
              <option value="Chittagong ">Chittagong </option>
              <option value="Comilla">Comilla</option>
              <option value="Cox's Bazar ">Cox's Bazar </option>
              <option value="Feni ">Feni </option>
              <option value="Khagrachhari  ">Khagrachhari  </option>
              <option value="Lakshmipur  ">Lakshmipur  </option>
              <option value="Noakhali ">Noakhali </option>
              <option value="Rangamati  ">Rangamati  </option>
              <option value="Dhaka ">Dhaka </option>
              <option value="Faridpur ">Faridpur </option>
              <option value="Gazipur ">Gazipur </option>
              <option value="Gopalganj  ">Gopalganj  </option>
              <option value="Kishoreganj  ">Kishoreganj  </option>
              <option value="Madaripur  ">Madaripur  </option>
              <option value="Manikganj  ">Manikganj  </option>
              <option value="Munshiganj  ">Munshiganj  </option>
              <option value="Narayanganj  ">Narayanganj  </option>
              <option value="Narsingdi  ">Narsingdi  </option>
              <option value="Rajbari  ">Rajbari  </option>
              <option value="Shariatpur  ">Shariatpur  </option>
              <option value="Tangail ">Tangail </option>
              <option value="Bagerhat  ">Bagerhat  </option>
              <option value="Chuadanga  ">Chuadanga  </option>
              <option value="Jessore ">Jessore </option>
              <option value="Jhenaidah  ">Jhenaidah  </option>
              <option value="Khulna  ">Khulna  </option>
              <option value="Kushtia ">Kushtia </option>
              <option value="Magura  ">Magura  </option>
              <option value="Meherpur  ">Meherpur  </option>
              <option value="Narail ">Narail </option>
              <option value="Satkhira ">Satkhira </option>
              <option value="Jamalpur  ">Jamalpur  </option>
              <option value="Mymensingh  ">Mymensingh  </option>
              <option value="Netrokona  ">Netrokona  </option>
              <option value="Sherpur ">Sherpur </option>
              <option value="Bogra ">Bogra </option>
              <option value="Joypurhat  ">Joypurhat  </option>
              <option value="Naogaon ">Naogaon </option>
              <option value="Natore ">Natore </option>
              <option value="Chapai Nawabganj  ">Chapai Nawabganj  </option>
              <option value="Pabna ">Pabna </option>
              <option value="Rajshahi ">Rajshahi </option>
              <option value="Sirajganj ">Sirajganj </option>
              <option value="Dinajpur ">Dinajpur </option>
              <option value="Gaibandha  ">Gaibandha  </option>
              <option value="Kurigram ">Kurigram </option>
              <option value="Lalmonirhat  ">Lalmonirhat  </option>
              <option value="Nilphamari  ">Nilphamari  </option>
              <option value="Panchagarh  ">Panchagarh  </option>
              <option value="Rangpur ">Rangpur </option>
              <option value="Thakurgaon  ">Thakurgaon  </option>
              <option value="Habiganj ">Habiganj </option>
              <option value="Moulvibazar  ">Moulvibazar  </option>
              <option value="Sunamganj  ">Sunamganj  </option>
              <option value="Sylhet ">Sylhet </option>


            </select>
            </td>
          </tr>
            <tr>
              <td>Present Address:</td>
              <td><input type="text" name="paddress" value="<?php echo $Preaddress; ?>"></td>
            </tr>
            <tr>
              <td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
            </tr>
            <tr>
              <td><input type="submit" name="update" value="update"></td>
            </tr>



      </table>
    </form>