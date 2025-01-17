<?php

session_start();

if(isset($_POST['add_to_cart'])){
  
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
                <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
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
            <!---->
            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/imgs/featured1.jpeg"/>
                        <div>
                            <p>White Shoes</p>
                            <small><span>RM</span> 155</small>
                            <br>
                            <a class="remove-btn" href="#">Remove</a>
                        </div>
                    </div>
                </td>

                <td>
                  <input type="number" value="1"/>
                  <a class="edit-btn" href="#">Edit</a>
                </td>

                <td>
                  <span>RM</span>
                  <span class="product-price">155</span>
                </td>
            </tr>
            <!---->
            <tr>
              <td>
                  <div class="product-info">
                      <img src="assets/imgs/featured1.jpeg"/>
                      <div>
                          <p>White Shoes</p>
                          <small><span>RM</span> 155</small>
                          <br>
                          <a class="remove-btn" href="#">Remove</a>
                      </div>
                  </div>
              </td>

              <td>
                <input type="number" value="1"/>
                <a class="edit-btn" href="#">Edit</a>
              </td>

              <td>
                <span>RM</span>
                <span class="product-price">155</span>
              </td>
          </tr>
          <!---->
          <tr>
            <td>
                <div class="product-info">
                    <img src="assets/imgs/featured1.jpeg"/>
                    <div>
                        <p>White Shoes</p>
                        <small><span>RM</span> 155</small>
                        <br>
                        <a class="remove-btn" href="#">Remove</a>
                    </div>
                </div>
            </td>

            <td>
              <input type="number" value="1"/>
              <a class="edit-btn" href="#">Edit</a>
            </td>

            <td>
              <span>RM</span>
              <span class="product-price">155</span>
            </td>
        </tr>
        <!---->
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