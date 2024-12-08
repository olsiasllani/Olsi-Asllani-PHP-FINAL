<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Anna's Pastry</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
  
   <body>
      
  </div><nav>
         <a href="#" class="logo">
         <a href="index.php"> <img class="logo__img" src="home_img/logowhite.png" alt="logo" height="30px"></a>
          <span class="logo__text"></span>
        </a>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a  href="index.php">Home</a></li>
             <li><a  href="about.php">About Us</a></li>
            
            <li><a href="menu.php">Menu</a></li>
           
        
      <?php 
    require 'config.php';

      if(!empty($_SESSION['admin']) && $_SESSION['admin'] == true){
    ?>
      <li><a href="dashboard.php" class="nav-link px-2 link-dark">Dashboard</a></li>
    <?php
      }
    ?>
    </ul>

  
<?php
  if(empty($_SESSION['username'])){
?>
    <div class="col-md-3 text-end">
      <button type="button" class="btn btn-outline-light me-2" onclick="window.location.href='login.php';">Login</button>
      <button type="button" class="btn btn-outline-light" onclick="window.location.href='signup.php';">Sign-up</button>
    </div>
<?php
  }else{
?>
  <div class="col-md-3 text-end">
    <button type="button" class="btn btn-outline-light me-2" onclick="window.location.href='logout.php';">Log Out</button>
  </div>
<?php
  }
?>

</nav>

  </header>