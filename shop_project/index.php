

<?php include('layouts/header.php'); ?>





      <!--Home-->
      <section id="home">
        <div class="container">
          <img src="bg" alt="">
          <a href="shop.php"><button>Shop Now</button></a>
          
        </div>
        
        
      </section>

      



      <!--Featured-->
      <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
          <h3 style="font-size: 40px;">Featured Pets</h3>
          
        </div>
        <div class="row mx-auto container-fluid">

        <?php include('server/get_featured_products.php'); ?>


        <?php while($row= $featured_products->fetch_assoc()){ ?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price">$ <?php echo $row['product_price']; ?></h4>
           <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a> 
          </div>
      
 
          <?php } ?>
        </div>
      </section>


    
 


<?php include('layouts/footer.php'); ?>
