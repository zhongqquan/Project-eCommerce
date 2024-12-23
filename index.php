<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!--Navbar-->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top"> -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary py-3 fixed-top">
        <div class="container">
          <img class="logo" src="assets/imgs/logo.jpeg"/>
          <h2 class="brand">Vintage</h2>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons"  id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
                <a href="account.html"><i class="fas fa-user"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <!--Home-->
      <section id="home">
        <div class="container">
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best Prices</span> This Season</h1>
            <p>Eshop offers the best products for the most affordable prices</p>
            <button>Shop Now</button>
        </div>
      </section>

      <!--Brand-->
      <section id="brand" class="container">
        <div class="row m-0">
            <!-- img fluid: bootstrap class to make image responsive -->
             <!-- bootstrap page takes 12 columns, eg:when small screen, 1 image will be shown -->
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand1.jpg"/> 
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand2.jpg"/>
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand3.jpg"/>
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand4.jpg"/>
        </div>
      </section>

      <!-- New [20]-->
      <section id="new" class="w-100">
        <div class="row p-0 m-0"> <!--padding 0; margin 0-->
          <!--One-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/1.jpeg"/>
            <div class="details">
              <h2>Awesome Shoes</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>

          <!--Two-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/2.jpeg"/>
            <div class="details">
              <h2>Awesome Jacket</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>

          <!--Three-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/3.jpeg"/>
            <div class="details">
              <h2>50% OFF Watches</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
        </div>
      </section>



      <!-- Featured [22]-->
      <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
          <h3> Our Featured</h3>
          <hr class="mx-auto">
          <p>Here you can checkout our featured products</p>
        </div>
        <div class="row mx-auto container-fluid">
          <?php include('server/get_featured_products.php'); ?>

          <?php while($row=$featured_products->fetch_assoc()) { ?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price">RM <?php echo $row['product_price']; ?></h4>
            <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
          </div>

          <?php } ?>

          <!-- <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/featured2.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Adidas Power Backpack</h5>
            <h4 class="p-price">RM 169.00</h4>
            <button class="buy-btn">Buy Now</button>
          </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/featured3.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Puma Running Cap</h5>
            <h4 class="p-price">RM 49.00</h4>
            <button class="buy-btn">Buy Now</button>
          </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/featured4.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Under Armour Tech Polo</h5>
            <h4 class="p-price">RM 188.00</h4>
            <button class="buy-btn">Buy Now</button>
          </div> -->
       
        </div>
      </section>

      <!-- Banner -->
       <section id="banner" class="my-5 py-5">
        <div class="container">
          <h4>MID SEASON'S SALE</h4>
          <h1>Autumn Collection <br> UP to 30% OFF</h1>
          <button class="text-uppercase">shop now</button>
        </div>
       </section>

       <!-- Clothes -->
       <section id="clothes" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3> Dresses & Coats</h3>
          <hr class="mx-auto">
          <p>Here you can checkout our amazing clothes</p>
        </div>
        <div class="row mx-auto container-fluid">

          <?php include('server/get_coats.php');?>
          <?php while($row=$coats_products->fetch_assoc()){ ?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price">RM <?php echo $row['product_price']; ?></h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <?php } ?>

          <!-- <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/clothes2.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Adidas Power Backpack</h5>
            <h4 class="p-price">RM 169.00</h4>
            <button class="buy-btn">Buy Now</button>
          </div> -->

          <!-- <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/clothes3.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Puma Running Cap</h5>
            <h4 class="p-price">RM 49.00</h4>
            <button class="buy-btn">Buy Now</button>
          </div> -->

          <!-- <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/clothes4.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Under Armour Tech Polo</h5>
            <h4 class="p-price">RM 188.00</h4>
            <button class="buy-btn">Buy Now</button>
          </div> -->
       
        </div>
       </section>

       <!-- Watches -->
      <section id="watches" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3> Best Watches</h3>
          <hr class="mx-auto">
          <p>Check out our unique watches</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/watch1.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">RM 128.90</h4>
            <button class="buy-btn">Buy Now</button>
          </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/watch2.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Adidas Power Backpack</h5>
            <h4 class="p-price">RM 169.00</h4>
            <button class="buy-btn">Buy Now</button>
          </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/watch3.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Puma Running Cap</h5>
            <h4 class="p-price">RM 49.00</h4>
            <button class="buy-btn">Buy Now</button>
          </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/watch4.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Under Armour Tech Polo</h5>
            <h4 class="p-price">RM 188.00</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
       
        </div>
       </section>

      <!-- Shoes -->
      <section id="shoes" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3> Shoes</h3>
          <hr class="mx-auto">
          <p>Here you can checkout our amazing shoes</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/shoes1.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Sports Shoes</h5>
            <h4 class="p-price">RM 128.90</h4>
            <button class="buy-btn">Buy Now</button>
          </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/shoes2.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Adidas Power Backpack</h5>
            <h4 class="p-price">RM 169.00</h4>
            <button class="buy-btn">Buy Now</button>
          </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/shoes3.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Puma Running Cap</h5>
            <h4 class="p-price">RM 49.00</h4>
            <button class="buy-btn">Buy Now</button>
          </div>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/shoes4.jpeg"/>
            <div class="star">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Under Armour Tech Polo</h5>
            <h4 class="p-price">RM 188.00</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
       
        </div>
       </section>

       
      <!--Footer-->
      <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img class="logo" src="assets/imgs/logo.jpeg"/>
            <p class="pt-3">We provide the best products for the most affordable prices</p>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Featured</h5>
            <ul class="text-uppercase">
              <li><a href="#">men</a></li>
              <li><a href="#">women</a></li>
              <li><a href="#">boys</a></li>
              <li><a href="#">girls</a></li>
              <li><a href="#">new arrivals</a></li>
              <li><a href="#">sales</a></li>
            </ul>
          </div>
            
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Contact Us</h5>
            <div>
              <h6 class="text-uppercase">Address</h6>
              <p>1234 Lebuh Cecil, Georgetown</p>
            </div>
            <div>
              <h6 class="text-uppercase">Phone Number</h6>
              <p>04-5447878</p>
            </div>
            <div>
              <h6 class="text-uppercase">Email</h6>
              <p>info@gmail.com</p>
            </div>
          </div>

          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Instagram</h5>
            <div class="row"></div>
            <img src="assets/imgs/featured1.jpeg" class="img-fluid w-25 h-30 m-2"/>
            <img src="assets/imgs/featured2.jpeg" class="img-fluid w-25 h-30 m-2"/>
            <img src="assets/imgs/featured3.jpeg" class="img-fluid w-25 h-30 m-2"/>
            <img src="assets/imgs/featured4.jpeg" class="img-fluid w-25 h-30 m-2"/>
            <img src="assets/imgs/shoes3.jpeg" class="img-fluid w-25 h-30 m-2"/>
          </div>

        </div>


        <div class="copyright mt-5">
          <div class="row container mx-auto">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
              <img src="assets/imgs/payment.jpeg"/>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4 text-nowrap  mb-2">
              <p>eCommerce @ 2024 All Right Reserved</p>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>

          </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
