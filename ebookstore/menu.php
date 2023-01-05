<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add To Cart - Furniture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn -->
    
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
              <li><a href = "login.php">Login</a></li>
              <li><a href = "contact.html">contact</a></li>
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

        
    <script src="./JS/menu.js"></script>
    
  </body>
</html>