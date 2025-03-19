<div class="inner">
      <div class="logo fl" > 
        Logo
      </div>
      <div class="user-detail fr">
        <?php
          echo 'welcome '. $_SESSION['user_name'] . ' !';
        ?>
        <a href="logout.php">Logout</a>     
      </div>
      <div class="clrBoth"></div>
    </div>
   