<?php

     echo "<br>";
     echo $_POST["user_name"]; 
     echo "<br>";
     echo $_POST["user_email"]; 
     echo "<br>";
     echo $_POST["user_password"]; 

    
         $user_name = $_POST["user_name"];
         $user_email = $_POST["user_email"];
         $user_password = $_POST["user_password"];   
 
        //  $sql = "INSERT INTO users (user_name, user_email, user_password,)
        //          VALUES ('$user_name', '$user_password', '$user_email')";
    
         include "db_connection.php";

         try {
                 $sql = "INSERT INTO users (user_name, user_email, user_password)
                         VALUES ('$user_name', '$user_email', '$user_password')";
                
                 //  use exec() because no results are returned
                 $conn->exec($sql);
                 echo "You've succefully created an account!";
             }
         catch(PDOException $e) 
             {
                 echo $sql . "<br>" . $e->getMessage();
             }
        
         $conn = null;
         
    
         header("Location: ../../index.html");  

//         // $folderString = "../img/";
//         // $folderString .= $_GET["user_firstname"];
//         // echo $folderString;
    
//         // $DBIMG = "banaantje.jpg";
    
//         // $DMIMG = $folderString . $DBIMG;    

 ?>
 <br>

