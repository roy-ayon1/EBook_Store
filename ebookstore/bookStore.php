<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add To Cart - Furniture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./CSS/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    
    
  </head>
  <body>

  <nav class = "navbar">
          <a href = "index.php" class = "navbar-brand">BooKer.</a>
          <button type = "button" class = "navbar-toggler">
            <i class = "fas fa-bars"></i>
          </button>
          <div class = "navbar-collapse">
            <ul>
              <li><a href = "./index.php">Home</a></li>
              <li><a href = "./bookStore.php">BookStore</a></li>
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
                
              </div>

              <div class = "cart-total">
                <h3>Total: $</h3>
                <span id = "cart-total-value"></span>
              </div>
            </div>
          </div>
        </nav>
    
    <section class = "products">
      <div class = "container">
        <h2>Our Products</h2>
        <div class = "product-list">
         
          </div>
          
        </div>
      </div>
    </section>

    <div>
      <?php include('./footer.php')
     ?>
      </div>
      


    
    <script src="./JS/menu.js"></script>

  </body>
  </html>