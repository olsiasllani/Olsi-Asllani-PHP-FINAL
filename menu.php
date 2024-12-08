<?php 
 /*
  We will include config.php for connection with database.
  We will fetch all datas from movies in database and show them.
  */
  
   include_once('config.php');

   $sql = "SELECT * FROM menu";
   $selectMenu = $con->prepare($sql);
   $selectMenu->execute();
   $menu_data = $selectMenu->fetchAll();



 ?>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <body>
   
 <style type="text/css">
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
} 
   nav{
  display: flex;
  height: 80px;
  width: 100%;
  background: #FF9494;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
}
nav .logo{
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}
nav ul li{
  margin: 0 5px;
}
nav ul li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
nav ul li a.active,
nav ul li a:hover{
  color: #111;
  background: #fff;
}
nav .menu-btn i{
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}
@media (max-width: 1000px){
  nav{
    padding: 0 40px 0 50px;
  }
}
@media (max-width: 920px) {
  nav .menu-btn i{
    display: block;
  }
  #click:checked ~ .menu-btn i:before{
    content: "\f00d";
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }
  #click:checked ~ ul{
    left: 0;
  }
  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: cyan;

  }
}
.logo {
  vertical-align: middle;
  display: flex;
  column-gap: 10px;
  align-items: center;
   text-decoration: none;
}

.logo__img {
  height: 80px;
  
}

.logo__text {
  font-size: 20px;
  color: #fff;
  font-weight: 500;
  letter-spacing: -0.5px;

}
 </style>   

    
<nav>
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

  



  


 <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">

        <?php foreach ($menu_data as $menu) { ?>

        <div class="col">
          <div class="card shadow-sm">

            <img src="menu_img/<?php echo $menu['Image'];  ?>" height="350">

            <div class="card-body">
              <h4><?php echo $menu['Name']; ?></h4>
              <p class="card-text"  ><?php echo $menu['Description']; ?> </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="details.php?id=<?php echo $menu['Id']; ?>"  class="btn btn-sm btn-outline-secondary" >View</a>
                  <a href="edit.php?id=<?php echo $menu['Id']; ?>"  class="btn btn-sm btn-outline-secondary">Edit</a>
                </div>
                <small class="text-muted">Rating: <?php echo $menu['Rating']; ?></small>
               
              </div>
            </div>
          </div>
        </div>
          
      <?php } ?>
   
       

        
      </div>
    </div>
  </div>





<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">&copy; 2024 Company, Inc</p>
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>


  