<?php
    session_start();
    include "db_connect.php";

    $_SESSION['guest_name'] = $user_name;
    
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $result = "SELECT user_name
               FROM users 
               WHERE user_email = '$user_email' 
               AND user_password = '$user_password'";

    $db_result = $conn->query($result);

    if ($db_result->rowCount() != 0){
        foreach($db_result as $row){
            $firstname = $row['user_name'];
        }        
    }
    else 
    {
        echo 'The username or password is incorrect!';
       
    }
    $conn = null;
    header("Location: ../../index.html");
?>