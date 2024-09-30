<?php
include("connect.php");


    echo"checking Login detail";
    $email=$_POST['username'];
    $password=$_POST['password'];
    echo"checking Login detail";
    $sql="SELECT * FROM `user` WHERE `email`='$email'";
  //echo $sql;
   $result = $conn->query($sql);
    if (mysqli_num_rows($result)>0)
       {  // Associative array
        //$row = $result -> fetch_array(MYSQLI_ASSOC);
        $wrongpass=0;
            while($row=$result->fetch_array(MYSQLI_ASSOC)) 
            {
            // Print a single column data
                
                if($row['password']===$password){
                    echo"Login SuccessFull";
                            
                    
                    header("Location:index.php");
                    $wrongpass=0;
                    break;
                    
                }
                else{
        
                    $wrongpass=1;
                  
                }     
            }
            if($wrongpass==1)
            {
                echo "FORGOT PASSWPRD!";
            }
        }
        else{
                echo"Not Found <br> Register YourSelf!";
                //header("Location:registrationForm.html");
            }     // Print the entire row data

 


?>