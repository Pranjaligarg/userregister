  <?php
    session_start();
    include('connect.php');
    
      
    if(isset($_COOKIE['username'])){
       $username = $_COOKIE['username'];
       $stmt = $conn->prepare('SELECT id, username FROM users WHERE username = ?');
       $stmt->bind_param('s',$username);
       $stmt->execute();
       $stmt->store_result();
       $stmt->bind_result($id,$db_username);
       $stmt->fetch();

       if($stmt->num_rows>0){
        $_SESSION['user_id'] = $id;
        $_SESSION['user_name'] = $db_username;
        

        header('Location: dashboard.php');
        exit();
       }
       
    }
    
?>