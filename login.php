<?php
session_start();
include ("connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["UserName"];
    $userpass = $_POST["UserPass"];

    $stmt = $conn->prepare('SELECT id ,username,userpass  FROM users WHERE username = ?');
    $stmt->bind_param('s',$username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id,$db_username,$db_userpass);
    $stmt->fetch();
    
    if(password_verify($userpass,$db_userpass)){
    //    start session and store user data
        $_SESSION['user_id'] = $id;
        $_SESSION['user_name'] = $db_username;

        // if(isset($_POST[remember])){      
        //     setcookie(username,$username,time() + (7*24*60*60),'/');
        // }
     echo 'login successful';
     header('location: dashboard.php');
     exit();
    }
    else{
        echo 'Invalid username or password';
    }

}
?>