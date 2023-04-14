<?php
	include_once "top2.php";
    include_once "php/config.php";
    $search = mysqli_real_escape_string($con, $_POST['search']);
    if(!empty($search)){
      //  $LIST ="SELECT * FROM product WHERE name LIKE '{$search}%' ";
        $sql = mysqli_query($con, "SELECT * FROM product WHERE name LIKE '{$search}%' ");
        if(mysqli_num_rows($sql) > 0){?>
			<div class="search-box">
			
				<div class="pname">Product Name</div>
				<div class="price">Price</div>
				<div class="mrp">MRP</div>
				<div class="image">Image</div>
			
			</div>
		<?php
        while($row = mysqli_fetch_assoc($sql)){
			?>
       <div class="search-box1">
			<div class="pname"><?php echo $row['name'] ?></div>
			<div class="price"><?php echo $row['price'] ?></div>
			<div class="mrp"><?php echo $row['mrp'] ?></div>   
       		 <div class="image">
				<div class="image-img">
       			 <img src="../admin/images/picture/<?php echo $row['image']?>">
        		</div>
			</div>
		</div>
       <?php }
	   ?>
	   <?php          
  }else{ ?>

          <div class="no-data"> <?php echo "No Data Found Related to Your Search Term " ;?> </div>
		 <?php }
    }

    ?>