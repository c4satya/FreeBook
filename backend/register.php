<?php 
include 'connect.php';
if(isset($_POST['signUp'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conformPassword=$_POST['conformPassword'];
    $phoneNo=$_POST['phone'];
    
    $checkEmail="SELECT * FROM user WHERE email='email'";
    if(!($password===$conformPassword))
     { echo"Password Mismatch";}
    elseif($checkEmail)
          {
            echo"User Already Exist !";
        
          }
          else{
            $insertQuery="INSERT INTO user (name,email,password,contactNo) VALUES ('$name','$email','$password','$phoneNo')"
             if($con->query($insertQuery)==TRUE)
              {
                header("location:registrationForm.php");

              }
             else{
                 echo"Error:".$conn->error;
             } 
          }

}
if(isset($_POST['signIn'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location:homepage.php");
        exit();
    }
    else{
        echo"Not Found";
    }

}
?>