<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add To Cart - Furniture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="./CSS/memu-book.css"> -->
    <link rel="stylesheet" href="./memu.css">
    <link rel="stylesheet" href="./all.css">
  </head>
  <body>

    
      <div class = "container">
        <!-- navbar -->
        <nav class = "navbar">
          <a href = "index.html" class = "navbar-brand">Vintage.</a>
          <button type = "button" class = "navbar-toggler">
            <i class = "fas fa-bars"></i>
          </button>
          <div class = "navbar-collapse">
            <ul>
              <li><a href = "#">Home</a></li>
              <li><a href = "#">Gallery</a></li>
              <li><a href = "#">New Arrivals</a></li>
              <li><a href = "#">Blog</a></li>
              <li><a href = "#">contact</a></li>
            </ul>
          </div>

          <div class = "cart">
            <button type = "button" id = "cart-btn">
              <i class = "fas fa-shopping-cart"></i>
              <span id = "cart-count-info"></span>
            </button>
            
            <div class = "cart-container">
              <div class = "cart-list">
                <!-- single item -->
                 <!--<div class = "cart-item">
                  <img src = "images/armchair.png" alt = "product image">
                  <div class = "cart-item-info">
                    <h3 class = "cart-item-name">Arm Chair</h3>
                    <span class = "cart-item-category">Chair</span>
                    <span class = "cart-item-price">$120.00</span>
                  </div> 

                  <button type = "button" class = "cart-item-del-btn">
                    <i class = "fas fa-times"></i>
                  </button>
                </div> --!>
                <!-- end of single item  -->
              </div>

              <div class = "cart-total">
                <h3>Total: $</h3>
                <span id = "cart-total-value"></span>
              </div>
            </div>
          </div>
        </nav>
        <!-- end of navbar -->

        <!-- banner -->
       
        </div>
        <!-- end of banner  -->
      </div>
    <!-- </header> -->
    <!-- end of header -->
    <div class = "cart-container">
              <div class = "cart-list">
                <!-- single item -->
                <!-- <div class = "cart-item">
                  <img src = "images/armchair.png" alt = "product image">
                  <div class = "cart-item-info">
                    <h3 class = "cart-item-name">Arm Chair</h3>
                    <span class = "cart-item-category">Chair</span>
                    <span class = "cart-item-price">$120.00</span>
                  </div>

                  <button type = "button" class = "cart-item-del-btn">
                    <i class = "fas fa-times"></i>
                  </button>
                </div> -->
                <!-- end of single item  -->
              </div>

              <div class = "cart-total">
                <h3>Total: $</h3>
                <span id = "cart-total-value"></span>
              </div>
            </div>
          </div>
        </nav>


    <!-- products section  -->
    <section class = "products">
      <div class = "container">
        <h2>Our Products</h2>
        <div class = "product-list">
          <!-- single item -->
          <div class = "product-item">
            <div class = "product-img">
              <img src = "./src/Best Seller/11.jpg" alt = "product image">
              <button type = "button" class = "add-to-cart-btn">
                <i class = "fas fa-shopping-cart"></i>Add To Cart
              </button>
            </div>

            <div class = "product-content">
              <h3 class = "product-name">Wooden Bed</h3>
              <span class = "product-category">Bed</span>
              <p class = "product-price">$120.00</p>
            </div>
          </div>
          <!-- end of single item -->
        </div>
      </div>
    </section>
    <!-- end of products section -->

    <!-- footer -->
   
    <!-- end of footer -->

    



    
    <script src="./memu.js"></script>
  </body>
  
  
</html>