<?php
session_start();

if(!isset($_SESSION['user_id'])){

    echo 'you have to login first';
    exit();


}

?>
     

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="dashboard-header">
    <?php
      include "header.php";
          
    ?> 
  </header>
<h1>Dashboard</h1> 
   
</body>
</html>