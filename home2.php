<?php
session_start();
include "home_header.php";
include "php/config.php";
?>

<body>
   <!-- <div class="home2-header"> -->
    <header >
        
        <div class="home2-logo">
            <a href="home2.php"><img class="logo" src="picture/logo_nourishnow.png" alt="NourishNow"></a>
        </div>
        <div class="home2-group">
            <ul class="home2-navigation">
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
                <li><a href="#"><ion-icon name="heart-outline"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="cart-outline"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="menu-outline"></ion-icon></a></li>
            </ul>
            <form action="search.php" method="POST">
            <div class="home2-searchbox">
            <input type="text" name="search" placeholder="Search in NorishNow">
            </div>
            <div class="home2-search">
                <span class="icon">                 
                <ion-icon name="search-outline" class="home2-searchbtn"></ion-icon>
                <ion-icon name="close-outline" class="home2-closebtn"></ion-icon>
                </span>
            </div>
            <ion-icon name="menu-outline" class="home2-menutoggle"></ion-icon>

        </div>

    </header>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur eius cum odit placeat ratione, odio quidem, laudantium reiciendis, voluptate dolorem nam deserunt voluptatibus! Officiis est dolores nulla magnam sapiente, temporibus voluptatum officia quidem reiciendis ex non a distinctio iste dolor cum sunt natus facilis obcaecati deleniti sed doloribus dolorem accusantium placeat. Aperiam, repellendus! Delectus dicta officiis voluptatem nihil explicabo sint id asperiores aliquam quia corporis repellendus sunt culpa modi, dolore velit sed molestias voluptas veniam provident ipsa reprehenderit fugit! Vero mollitia dolor molestiae accusamus itaque possimus dolorum totam assumenda? Illum repudiandae odio tempora maiores quam iste qui molestias necessitatibus voluptatibus neque nemo, dicta incidunt vel sint quo animi exercitationem! Sunt eligendi suscipit obcaecati in omnis totam sapiente nostrum dolorem repellendus harum magnam nam deserunt, nulla blanditiis possimus cum? Officia sint tempora atque quas adipisci! Cumque maxime voluptatum consequatur deserunt, voluptatem aperiam modi praesentium dicta quaerat sunt possimus? Magnam temporibus reprehenderit, fugit quis iste necessitatibus dolores fugiat corporis id, consectetur blanditiis dignissimos unde architecto illum qui et cumque distinctio voluptate cum, veniam ex maxime harum accusantium maiores! Consequuntur nihil accusantium cumque aspernatur sit voluptatibus? Enim hic corporis tempore repellat esse eum eaque sed, obcaecati quos porro possimus quam! Quod accusantium optio, beatae modi corporis itaque inventore, iure asperiores temporibus debitis minus culpa soluta nobis molestias adipisci harum. Totam aliquam quibusdam reiciendis repudiandae velit illo quo qui at quaerat? Neque eveniet corrupti quo facilis esse ipsam quod totam asperiores, excepturi consequuntur vitae minima ipsum tenetur libero dignissimos debitis repellat, mollitia facere atque iste aperiam quasi minus tempore! Provident dolorum maiores quas dolores temporibus illum exercitationem, magnam adipisci iste voluptates dicta delectus dignissimos, quod asperiores? Quo nobis sequi molestiae commodi accusamus repellat, incidunt, dolores inventore vero debitis placeat in rem doloremque nulla nostrum eum amet, minus sed. Ut, nesciunt eveniet. Non suscipit earum nulla quam mollitia laborum vero aspernatur voluptatibus quae. Molestias officiis, libero iusto architecto id voluptates, assumenda sunt illo quidem debitis dignissimos! Ipsam voluptas harum, totam nemo tempora non asperiores incidunt eveniet id minima dicta facilis quos reprehenderit eligendi in? Rerum, quo provident enim fugit reiciendis quos repudiandae dolorem obcaecati quisquam architecto autem doloremque vero sunt corporis excepturi beatae facere exercitationem iusto quaerat? Officia veritatis vero hic est numquam accusamus at necessitatibus sit, voluptatibus quia natus asperiores nam perferendis eligendi? Aliquid nulla aliquam inventore ipsum excepturi error amet. Necessitatibus magni, iure, praesentium possimus rem veritatis laborum modi nobis impedit corrupti architecto, dicta similique nostrum alias unde labore non a minima dolor recusandae ipsa veniam vitae natus quo! Earum amet minima autem quaerat, rem excepturi aspernatur eligendi, quos ut iure commodi vero aut quisquam aliquid reiciendis velit accusamus voluptates explicabo repellendus quam perferendis modi dolor doloremque nisi? Assumenda odio earum eius similique autem natus provident! Tempora ipsa sint, magni quas dicta laborum fugiat! Voluptate hic quae blanditiis nulla, eligendi maiores. Eius voluptatem unde sint nihil quia debitis repudiandae commodi dolores tenetur, suscipit quidem similique incidunt iure. Necessitatibus sint neque quod accusantium cumque explicabo, expedita corrupti pariatur nulla provident, praesentium molestias sed quis.</p>
    <?php 
    $sql="select product.*,categories.categories from product,categories where product.categories_id=categories.id  order by product.id desc";
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($res)){
    ?>
    <div class="main">
        <div class="main-img">
        <img src="../admin/images/picture/<?php echo $row['image']?>">
        </div>
    </div>
    <?php } ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="javascript/home2.js"></script>
</body>
</html>
<!--search system-->
<?php
if(isset($_POST['search-outline'])){
    $search=$_POST['search'];
    $sql="select * from product where name like '%$search%'";
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($res)){
        echo $row['name'];
    }
}
?>
