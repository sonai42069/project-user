<?php
session_start();
include "home_header.php";
include "php/config.php";
?>
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
<a href="#" class="logo"><i class="fa-regular fa-basket-shopping"></i> NourishNow </a>
<nav class="navbar">
    <a href="#home">home</a>
    <a href="#products">products</a>
    <a href="#categories">categories</a>
    <a href="#review">Add-Sec</a>

    

</nav>
<div class="search-container">
    <div class="search-nav">
        <form action="search.php" method ="POST">
        <input type="search" name="search" class="search-data" placeholder="Search" required>
        <button type="submit" class="search-btn">search</button>
     </form></div>
    <div class="icons">
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <?php
                if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>
                    <div class="dropdown">
                    <span><img src="php/images/<?php echo $_SESSION['image'] ?>" ></span>
                    <div class="dropdown-content">
                      <h6><a href="logout.php">Logout</a></h6>
                    </div>
                  </div>
                <?php } else { ?>
                <a href="#"><div class="fas fa-user" id="login-btn"></div></a>
                <?php }?>
        <!-- <div class="fas fa-user" id="login-btn"></div> -->
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


<!--header section ends-->
<!--home section starts-->

<section class="home"  id="home">

<div class="content">

<h3>fresh <span>organic</span> products for your lifestyle</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, aperiam doloremque at quis quas eum.</p>
<a href="#" class="btn">shop now</a>
</div>

</section>


<!--home section ends-->

<!--features section starts-->

<section class="features" id="features">
    <hh1 class="heading"> our <span>features</span></hh1>

    <div class="box-container">
        <div class="box">
            <img src="image/feature-img-1.png" alt="">
            <h3>fresh and organic</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, molestias.</p>
            <a href="#" class="btn">read more</a>
        </div>
        <div class="box">
            <img src="image/feature-img-2.png" alt="">
            <h3>free delivery</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, molestias.</p>
            <a href="#" class="btn">read more</a>
        </div>
        <div class="box">
            <img src="image/feature-img-3.png" alt="">
            <h3>easy payments</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, molestias.</p>
            <a href="#" class="btn">read more</a>
        </div>
    </div>
</section>

<!--features section ends-->


<!--product section starts-->

<section class="products" id="products">
<h1 class="heading">our <span>products</span></h1>
<div class="swiper product-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide box">
            <img src="image/product-1.png" alt="">
            <h3>fresh orange</h3>
            <div class="price"> $4.99/- - 10.99/-</div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>
            <div class="swiper-slide box">
                <img src="image/product-2.png" alt="">
                <h3>fresh onion</h3>
                <div class="price"> $4.99/- - 10.99/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
                <div class="swiper-slide box">
                    <img src="image/product-3.png" alt="">
                    <h3>fresh meat</h3>
                    <div class="price"> $4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                       
                    </div>
                    <a href="#" class="btn">add to cart</a>
                    </div>
                    <div class="swiper-slide box">
                        <img src="image/product-4.png" alt="">
                        <h3>fresh cabbage</h3>
                        <div class="price"> $4.99/- - 10.99/-</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                           
                        </div>
                        <a href="#" class="btn">add to cart</a>
                        </div>
        </div>
    </div>

<div class="swiper product-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide box">
            <img src="image/product-5.png" alt="">
            <h3>fresh avocado</h3>
            <div class="price"> $4.99/- - 10.99/-</div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                
            </div>
            <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product-6.png" alt="">
                <h3>fresh potato</h3>
                <div class="price"> $4.99/- - 10.99/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                   
                </div>
                <a href="#" class="btn">add to cart</a>
                </div>
                <div class="swiper-slide box">
                    <img src="image/product-7.png" alt="">
                    <h3>green lemon</h3>
                    <div class="price"> $4.99/- - 10.99/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        
                    </div>
                    <a href="#" class="btn">add to cart</a>
                    </div>
                    <div class="swiper-slide box">
                        <img src="image/product-8.png" alt="">
                        <h3>fresh tommato</h3>
                        <div class="price"> $4.99/- - 10.99/-</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            
                        </div>
                        <a href="#" class="btn">add to cart</a>
                        </div>
        </div>
    </div>
</div>
</section>

<!--product section ends-->

<!--categories section starts-->

<section class="categories" id="categories">
    <h1 class="heading"> product <span>categories</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="image/cat-1.png" alt="">
            <h3>vagetables</h3>
            <p>upto 46% off</p>
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="image/cat-2.png" alt="">
            <h3>fresh fruits</h3>
            <p>upto 46% off</p>
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="image/cat-3.png" alt="">
            <h3>dairy products</h3>
            <p>upto 46% off</p>
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="image/cat-4.png" alt="">
            <h3>fresh meat</h3>
            <p>upto 46% off</p>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

</section>

<!--categories section starts-->








<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!--custom js file link-->
  <script src="javascript/script.js"></script> 
    
</body>
</html>