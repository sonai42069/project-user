<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Website Design</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!--font awesome cdn linl-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<!--header section starts-->


<header class="header">
<a href="#" class="logo"><i class="fa-duotone fa-cart-shopping-fast" style="--fa-primary-color: #e06500; --fa-secondary-color: #ff8929; --fa-secondary-opacity: 0.8;"></i> NourishNow </a>
<nav class="navbar">
    <a href="top1.php">home</a>
    <a href="#products">products</a>
    <a href="#categories">categories</a>
    <a href="#review">Add-Sec</a>
    <a href="#review">Contact</a>

    

</nav>
<div class="search-container">
    <div class="search-nav">
        <form action="search.php" method ="POST">
        <input type="search" name="search" class="search-data" placeholder="Search" required>
        <button type="submit" class="search-btn">search</button>
     </form></div>
    <div class="icons">
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    
    </div>
</div>

<!-- <form action="" class="search-form">
    <input type="search" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
</form> -->

<div class="shopping-cart">
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="image/cart-img-1.png" alt="">
        <div class="content">
            <h3>watermelon</h3>
            <span class="price">$4.99/-</span>
            <span class="quantity">qty : 1</span>
        </div>
    </div>
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="image/cart-img-2.png" alt="">
        <div class="content">
            <h3>onion</h3>
            <span class="price">$4.99/-</span>
            <span class="quantity">qty : 1</span>
        </div>
    </div>
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="image/cart-img-3.png" alt="">
        <div class="content">
            <h3>chicken</h3>
            <span class="price">$4.99/-</span>
            <span class="quantity">qty : 1</span>
        </div>
    </div>
    <div class="total"> total : $19.69/- </div>
    <a href="#" class="btn">check out</a>
</div>

<form action="" class="login-form">
    <h3>login now</h3>
    <input type="email" placeholder="your email" class="box">
    <input type="password" placeholder="your password" class="box">
    <p>forget your password? <a href="#">Click Here</a></p>
    <p>don't have an account! <a href="#">create one</a></p>
    <input type="submit" value="login now" class="btn">
</form>

</header>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!--custom js file link-->
  <script src="javascript/script.js"></script> 
</body>
</html>