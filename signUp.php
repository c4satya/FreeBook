<?php 

//signUp backend
include("connect.php");

  echo"checking registration detail";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
    $phoneNo=$_POST['phone'];

    $checkEmail= "SELECT * FROM `user` WHERE `email`='$email'";
    //=$conn->query("SELECT * FROM `user` WHERE `email`='$email'");
     $result= $conn->query($checkEmail);
       // echo "<br>".$result;
       if($result->num_rows>0)
          {
            echo "<br>";
            echo"User Already Exist !";
             header("location:login.html"); 
          }
          else{
              echo"User Detail Entry to database";
            $insertQuery="INSERT INTO `user` (`userId`, `password`, `name`, `adminKey`, `profilePic`, `contactNo`, `joinDate`, `email`) VALUES ('','$password','$name','','','$phoneNo','','$email')";
             if($conn->query($insertQuery)==TRUE)
              {
                header("location:login.html");
                echo"Registration Success";
                exit();

              }
             else{
                 echo"Error:".$conn->error;
             } 
          }


?>