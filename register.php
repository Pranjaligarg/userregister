<?php
    include 'connect.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["UserName"]; 
        $userpass = $_POST["UserPass"];

        $Hash_Pass = password_hash($userpass,PASSWORD_DEFAULT);

        $stmt = $conn->prepare('INSERT INTO users(username,userpass) VALUES(?,?)');
        $stmt->bind_param('ss',$username,$Hash_Pass);
        $stmt->execute();
        #echo'<script>alert("User Register successful") </script>';
        // exit();
        header ('location:  login.html');

    }
    
?>  

