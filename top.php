<?php
session_start();
// include "home_header.php";
include "php/config.php";
?>


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" type="x-icon" href="picture/logo_tab.png">
    <title>NourishNow : A better you starts here</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="stylesheet" href="css/top.css">
   </head>
   <body>
      <nav>
         <div class="menu-icon">
            <span class="fas fa-bars"></span>
         </div>
         <div class="logo">
         <a href="top.php"><img class="logo" src="picture/logo_nourishnow.png" alt="NourishNow"></a>
         </div>
        
         <div class="nav-items">
        <li><a href="top.php">Home</a></li>
        <li><a href="#">Wishlist<ion-icon name="heart-outline"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="cart-outline">Cart</ion-icon></a></li>

                <li><a href="#"><ion-icon name="menu-outline"></ion-icon></a></li>
         </div>
         <div class="search-icon">
            <span class="fas fa-search"></span>
         </div>
         <div class="cancel-icon">
            <span class="fas fa-times"></span>
         </div>
         <form action="search.php" method ="POST">
            <input type="search" name="search" class="search-data" placeholder="Search" required>
            <button type="submit" >search</button>
         </form>
         <div class="nav-items">
         <?php
             if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>
                    <li><div class="dropdown">
                    <span><img src="php/images/<?php echo $_SESSION['image'] ?>" ></span>
                    <div class="dropdown-content">
                      <h6><a href="logout.php">Logout</a></h6>
                    </div>
                  </div></li>
                <?php } else { ?>
                <li><a href="#"><ion-icon name="person-outline"></ion-icon></a></li>
                <?php }?>
         </div>
      </nav>
  <!--    <div class="content">
         <header class="space">Responsive Navbar with Search Box</header>
         <div class="space text">
            using HTML CSS & JavaScript
         </div>
      </div>-->
      <script>
         const menuBtn = document.querySelector(".menu-icon span");
         const searchBtn = document.querySelector(".search-icon");
         const cancelBtn = document.querySelector(".cancel-icon");
         const items = document.querySelector(".nav-items");
         const form = document.querySelector("form");
         menuBtn.onclick = ()=>{
           items.classList.add("active");
           menuBtn.classList.add("hide");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         cancelBtn.onclick = ()=>{
           items.classList.remove("active");
           menuBtn.classList.remove("hide");
           searchBtn.classList.remove("hide");
           cancelBtn.classList.remove("show");
           form.classList.remove("active");
           cancelBtn.style.color = "#ff3d00";
         }
         searchBtn.onclick = ()=>{
           form.classList.add("active");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
      </script>
   </body>
</html>
<!-- <?php
/* if(isset($_POST['search-outline'])){
    $search=$_POST['search'];
    $sql="select * from product where name like '%$search%'";
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($res)){
        echo $row['name'];
    }
} */
?> -->