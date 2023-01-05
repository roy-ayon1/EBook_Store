<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/multi-carosel-1.css">
    <link rel="stylesheet" href="./CSS/multi-carosel-2.css">
    <link rel="stylesheet" href="./CSS/container3.css">
    <link rel="stylesheet" href="./CSS/anounce2.css">
    <link rel="stylesheet" href="./CSS/anounce3.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/Responsive.css">
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./CSS/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="./CSS/owl.carousel.css">
     <link rel="stylesheet" href="./css/owl.theme.default.css">
     <link rel="stylesheet" href="https://unpkg.com/flickity@2.0.11/dist/flickity.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      

    <title>BOOKER</title>
</head>

<body>
<header>

    <?php include('./menu.php')
     ?>
  <div class="banner">
    <div class="banner-content">
      

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" id="bannerItem">
                <img class="d-block w-100" src="./src/banner pic/sofa book.jpg" alt="First slide">
                <div class="carousel-caption  d-none d-md-block ">
                    <h5 class="">A GOOD SOFA<br>A GOOD BOOK <br>&<br> YOU
                    </h5>
                    <!-- <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt nostrum eaque, enim sequi,
                        ut ipsum et doloribus tempora neque vitae doloremque laboriosam voluptatum. Ipsam numquam
                        corrupti dolore laudantium magni id!</p> -->
                </div>
            </div>
            <div class="carousel-item" id="bannerItem">
                <img class="d-block w-100" src="./src/banner pic/4.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="">BOOKS ARE YOUR<br>BESTFRIEND FOREVER</h5>
                    <!-- <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt nostrum eaque, enim sequi,
                        ut ipsum et doloribus tempora neque vitae doloremque laboriosam voluptatum. Ipsam numquam
                        corrupti dolore laudantium magni id!</p> -->
                </div>
            </div>
            <div class="carousel-item" id="bannerItem">
                <img class="d-block w-100" src="./src/banner pic/5.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="">NOTHING IS PLEASANTER<br>THAN EXPLORING A LIBRARY</h5>
                    <!-- <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt nostrum eaque, enim sequi,
                        ut ipsum et doloribus tempora neque vitae doloremque laboriosam voluptatum. Ipsam numquam
                        corrupti dolore laudantium magni id!</p> -->
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
  </div>

</header>





        <div class="container">
        <div class="anounce-1">
            <p>BookStore Publishes</p>
            <h3>BEST SELLERS</h3>
            
        </div>
    
        </div>
    
    
    <div class="carousel-wrapper">
      <div class="carousel" data-flickity>
        <div class="carousel-cell">
          <h3>Book 1</h3>
          <a class="more" href="#">Explore More</a>
          <img src="./src/Best Seller/1.jpg">
          <div class="line"></div>
          <div class="price">
            <span>$225</span>
          </div>
        </div>
        <div class="carousel-cell">
          <h3>Book 2</h3>
          <a class="more" href="#">Explore More</a>
          <img src="./src/Best Seller/2.jpg">
          <div class="line"></div>
          <div class="price">
            <span>$200</span>
          </div>
        </div>
        <div class="carousel-cell">
          <h3>Book 3</h3>
          <a class="more" href="#">Explore More</a>
          <img src="./src/Best Seller/3.jpg">
          <div class="line"></div>
          <div class="price">
            <span>$199</span>
          </div>
        </div>
        <div class="carousel-cell">
          <h3>Book 4</h3>
          <a class="more" href="#">Explore More</a>
          <img src="./src/Best Seller/4.jpg">
          <div class="line"></div>
          <div class="price">
            <span>$49</span>
          </div>
        </div>
        <div class="carousel-cell">
          <h3>Book 5</h3>
          <a class="more" href="#">Explore More</a>
          <img src="./src/Best Seller/5.jpg">
          <div class="line"></div>
          <div class="price"><span>$90</span>
          </div>
        </div>
        <div class="carousel-cell">
          <h3>Book 6</h3>
          <a class="more" href="#">Explore More</a>
          <img src="./src/Best Seller/6.jpg">
          <div class="line"></div>
          <div class="price">
            <span>$70</span>
          </div>
        </div>
        <div class="carousel-cell">
          <h3>Book 7</h3>
          <a class="more" href="#">Explore More</a>
          <img src="./src/Best Seller/7.jpg">
          <div class="line"></div>
          <div class="price">
            <span>$325</span>
          </div>
        </div>
        <div class="carousel-cell">
          <h3>Book 8</h3>
          <a class="more" href="#">Explore More</a>
          <img src="./src/Best Seller/8.jpg">
          <div class="line"></div>
          <div class="price">
            <span>$125</span>
          </div>
        </div>
        <div class="carousel-cell">
          <h3>Book 9</h3>
          <a class="more" href="#">Explore More</a>
          <img src="./src/Best Seller/9.jpg">
          <div class="line"></div>
          <div class="price">
            <span>$300</span>
          </div>
        </div>
        <div class="carousel-cell">
          <h3>Book 10</h3>
          <a class="more" href="#">Explore More</a>
          <img src="./src/Best Seller/10.jpg">
          <div class="line"></div>
          <div class="price">
            <span>$540</span>
          </div>
        </div>
      </div>  

    
   </div>
    
     <div class="anounce2">
      <p id="fp1">This Month's</p>
      <h2 id="fh3"> RECOMMENDED BOOKS</h2>
     </div>


   
  <div class="carousel-wrapper-1">
    <div class="carousel-1" data-flickity>
      <div class="carousel-cell-1">
        <h3>Book 1</h3>
        <a class="more" href="#">Explore More</a>
       <a href="#"> <img src="./src/Best Seller/11.jpg"></a>
        <div class="line"></div>
        <div class="price">
          <span>$225</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 2</h3>
        <a class="more" href="#">Explore More</a>
        <a href="#"><img src="./src/Best Seller/12.png"></a>
        <div class="line"></div>
        <div class="price">
          <span>$200</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 3</h3>
        <a class="more" href="#">Explore More</a>
        <img src="./src/Best Seller/13.jpg">
        <div class="line"></div>
        <div class="price">
          <span>$225</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 4</h3>
        <a class="more" href="#">Explore More</a>
        <img src="./src/Best Seller/14.jpg">
        <div class="line"></div>
        <div class="price">
          <span>$200</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 5</h3>
        <a class="more" href="#">Explore More</a>
        <img src="./src/Best Seller/15.jpg">
        <div class="line"></div>
        <div class="price">
          <span>$225</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 6</h3>
        <a class="more" href="#">Explore More</a>
        <img src="./src/Best Seller/16.jfif">
        <div class="line"></div>
        <div class="price">
          <span>$200</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 7</h3>
        <a class="more" href="#">Explore More</a>
        <img src="./src/Best Seller/17.jpeg">
        <div class="line"></div>
        <div class="price">
          <span>$225</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 8</h3>
        <a class="more" href="#">Explore More</a>
        <img src="./src/Best Seller/11.jpg">
        <div class="line"></div>
        <div class="price">
          <span>$225</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 9</h3>
        <a class="more" href="#">Explore More</a>
        <img src="./src/Best Seller/12.png">
        <div class="line"></div>
        <div class="price">
          <span>$200</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 10</h3>
        <a class="more" href="#">Explore More</a>
        <img src="./src/Best Seller/13.jpg">
        <div class="line"></div>
        <div class="price">
          <span>$225</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 11</h3>
        <a class="more" href="#">Explore More</a>
        <img src="./src/Best Seller/14.jpg">
        <div class="line"></div>
        <div class="price">
          <span>$200</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 12</h3>
        <a class="more" href="#">Explore More</a>
        <img src="./src/Best Seller/15.jpg">
        <div class="line"></div>
        <div class="price">
          <span>$225</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 13</h3>
        <a class="more" href="#">Explore More</a>
        <img src="./src/Best Seller/16.jfif">
        <div class="line"></div>
        <div class="price">
          <span>$200</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 14</h3>
        <a class="more" href="#">Explore More</a>
        <img src="./src/Best Seller/17.jpeg">
        <div class="line"></div>
        <div class="price">
          <span>$225</span>
        </div>
      </div>
      <div class="carousel-cell-1">
        <h3>Book 15</h3>
        <a class="more" href="#">Explore More</a>
        <a href="#"><img src="./src/Best Seller/12.png"></a>
        <div class="line"></div>
        <div class="price">
          <span>$200</span>
        </div>
      </div>
      </div>

      
      </div>
     
 

   <div class="anounce3">
  
     <p id="p1">THERE'S NO <br>
        SUCH THING AS TOO <br>
        MANY BOOKS</p>
      <h3 id="btn"> <button class="btn btn-outline-light" type="button">Read Our Story</button></h3>
      
    
   </div>
     
     
    

  <div class="container3">
      <header>
        <span>Coming Up</span>
      <h3>BOOK LAUNCHER</h3>
      </header>
          <div class="Lpart">
            <h4>Introducing The Land of AILOO</h4>
            <br>
              <p>By Mark Walker</p>
                <br>
              <p>When</p>
              <hr>
              <p>Jul 12, 2023, 7:00 PM</p>
              <br>
              
              <p>Where</p>
              
              <hr>
              <p>500 Terry A Francois Blvd, </p>
              <p>500 Terry A Francois Blvd, San Francisco, CA 94158, USA</p>
              <br>
              <br>
              <a href="#">RSVP NOW</a>
          </div>
            <div class="Rpart">
              <img src="./src/realease book.jpg" alt="">
            </div>
  </div>



</section>

<div>
      <?php include('./footer.php')
     ?>
      </div>
      



    
 </body>

<Script type="text/javascript" src="./Js/bootstrap.bundle.js">
</Script>
<Script type="text/javascript" src="./Js/mouseWhell.js">
</Script>

<Script type="text/javascript" src="./Js/all.js"> </Script>
<Script type="text/javascript" src="./Js/main.js"> </Script>
<Script type="text/javascript" src=" ./Js/jquery.js">
</Script>
<Script type="text/javascript" src="./Js/all.js">
</Script>
<Script type="text/javascript" src="./Js/jquery.js"> </Script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script type="text/javascript" src="./js/main.js">
</script>
<script type="text/javascript" src="./js/owl.carousel.js">
</script>
<script src="https://unpkg.com/flickity@2.0.11/dist/flickity.pkgd.min.js">
</script>

</html>