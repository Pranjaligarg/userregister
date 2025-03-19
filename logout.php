<?php
    session_start();
    //destry the session
    session_unset();
    session_destroy();
    //delete the user cookie if it exists

    
    if(isset($_COOKIE['username'])){
        //cookies expire
        setcookie('username','', time() - 3600, '/');
    }
    header('Location: login.html');
    exit();
?>

    
