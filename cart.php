<?php

session_start();

if(isset($_POST['add_to_cart'])){
  if(isset($_SESSION['cart'])){ // if cart is not empty

    $products_array_ids = array_column($_SESSION['cart'],"product_id");
    // compare to check if the add to cart product id already exist or not
    if(!in_array($_POST['product_id'], $products_array_ids)){

      $product_id = $_POST['product_id'];

        $product_array = array(
          'product_id' => $_POST['product_id'],
          'product_name' => $_POST['product_name'],
          'product_price' => $_POST['product_price'],
          'product_image' => $_POST['product_image'],
          'product_quantity' => $_POST['product_quantity']
        );

        $_SESSION['cart'][$product_id] = $product_array;


    }else{ // product has already been added
      echo '<script>alert("Product was already added to cart");</script>';
      // echo '<script>window.location="index.php";</script>';

    }




  }else{ // if the cart is empty, first product added

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $product_array = array(
      'product_id' => $product_id,
      'product_name' => $product_name,
      'product_price' => $product_price,
      'product_image' => $product_image,
      'product_quantity' => $product_quantity
    );

    $_SESSION['cart'][$product_id] = $product_array;

  }
  //remove product from cart
}else if(isset($_POST['remove_product'])){

  $product_id = $_POST['product_id'];
  unset($_SESSION['cart'][$product_id]);

}

else{
  header('location:index.php');

}


?>

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
                <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
                <a href="account.html"><i class="fas fa-user"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!--Cart-->
      <section class="cart container my-5 py-5">
        <div class="container mt-5">
            <h2 class="font-weight-bold">Your Cart</h2>
            <hr>
        </div>
        
        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th> <!--header-->
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <?php foreach ($_SESSION['cart'] as $key =>$value){ ?>
            
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/imgs/<?php echo $value['product_image'];?>"/>
                        <div>
                            <p><?php echo $value['product_name'];?></p>
                            <small><span>RM</span> <?php echo $value['product_price'];?></small>
                            <br>
                            <form method="POST" action="cart.php">
                              <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>"/>
                              <input type="submit" name="remove_product" class="remove-btn" value="remove"/>
                            </form>

                        </div>
                    </div>
                </td>

                <td>
                  <input type="number" value="<?php echo $value['product_quantity']; ?>"/>
                  <a class="edit-btn" href="#">Edit</a>
                </td>

                <td>
                  <span>RM</span>
                  <span class="product-price">155</span>
                </td>
            </tr>
            <?php } ?>
        </table>

        <div class="cart-total">
          <table>
            <tr>
              <td>Subtotal</td>
              <td>RM 155</td>
            </tr>
            <tr>
              <td>Total</td>
              <td>RM 155</td>
            </tr>
          </table>
        </div>
        
        <div class="checkout-container">
          <button class="btn checkout-btn">Checkout</button>
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