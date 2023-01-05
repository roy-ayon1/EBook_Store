$('#carousel-example-generic').on('slid.bs.carousel', function () {
    $(".item.active:nth-child(" + ($(".carousel-inner .item").length -1) + ") + .item").insertBefore($(".item:first-child"));
    $(".item.active:last-child").insertBefore($(".item:first-child"));
});  


.detail,
.button{
    width: 90%;
    /*background: red;*/
    margin: auto;
    padding: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 50px;
    font-size: 20px;
    color: #444;
}
small{color: #555;}
a{
    text-decoration: none;
    padding: 6px 14px;
    font-size: 15px;
    margin: 5px 0 0 20px;
    display: inline-block;
    background: #6773ff;
    color: white;
}
p.star{
    margin: 5px auto;
    width: 65%;
    font-size: 25px;
    color: #808080;
}




   
<div class="container mt-4">
<div class="row">
    <div class="col-md-12 text-center text-success"> Product Slider </div>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="card">
                    <img src="./src/Best Seller/1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3>T-shirt 1</h3>
                        <h5>$ <span class="text-center">23</span></h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sunt quaerat optio
                        aliquid minus maiores eos d.
                        </p>
                            <button class="btn btn-primary btn-sm">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="item">
              <div class="card">
                  <img src="./src/Best Seller/2.jpg" alt="" class="card-img-top">
                  <div class="card-body">
                      <h3>T-shirt 2</h3>
                      <h5>$ <span class="text-center">23</span></h5>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sunt quaerat optio
                      aliquid minus maiores eos d.
                      </p>
                          <button class="btn btn-primary btn-sm">Buy Now</button>
                  </div>
              </div>
          </div>


          <div class="item">
            <div class="card">
                <img src="./src/Best Seller/3.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h3>T-shirt 3</h3>
                    <h5>$ <span class="text-center">23</span></h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sunt quaerat optio
                    aliquid minus maiores eos d.
                    </p>
                        <button class="btn btn-primary btn-sm">Buy Now</button>
                </div>
            </div>
        </div>



        <div class="item">
          <div class="card">
              <img src="./src/Best Seller/4.jpg" alt="" class="card-img-top">
              <div class="card-body">
                  <h3>T-shirt 4</h3>
                  <h5>$ <span class="text-center">23</span></h5>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sunt quaerat optio
                  aliquid minus maiores eos d.
                  </p>
                      <button class="btn btn-primary btn-sm">Buy Now</button>
              </div>
          </div>
      </div>
        <div class="item">
          <div class="card">
              <img src="./src/Best Seller/5.jpg" alt="" class="card-img-top">
              <div class="card-body">
                  <h3>T-shirt 5</h3>
                  <h5>$ <span class="text-center">23</span></h5>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sunt quaerat optio
                  aliquid minus maiores eos d.
                  </p>
                      <button class="btn btn-primary btn-sm">Buy Now</button>
              </div>
          </div>
      </div>
        <div class="item">
          <div class="card">
              <img src="./src/Best Seller/6.jpg" alt="" class="card-img-top">
              <div class="card-body">
                  <h3>T-shirt 6</h3>
                  <h5>$ <span class="text-center">23</span></h5>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sunt quaerat optio
                  aliquid minus maiores eos d.
                  </p>
                      <button class="btn btn-primary btn-sm">Buy Now</button>
              </div>
          </div>
      </div>
        <div class="item">
          <div class="card">
              <img src="./src/Best Seller/7.jpg" alt="" class="card-img-top">
              <div class="card-body">
                  <h3>T-shirt 1</h3>
                  <h5>$ <span class="text-center">23</span></h5>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sunt quaerat optio
                  aliquid minus maiores eos d.
                  </p>
                      <button class="btn btn-primary btn-sm">Buy Now</button>
              </div>
          </div>
      </div>
        <div class="item">
          <div class="card">
              <img src="./src/Best Seller/8.jpg" alt="" class="card-img-top">
              <div class="card-body">
                  <h3>T-shirt 1</h3>
                  <h5>$ <span class="text-center">23</span></h5>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sunt quaerat optio
                  aliquid minus maiores eos d.
                  </p>
                      <button class="btn btn-primary btn-sm">Buy Now</button>
              </div>
          </div>
      </div>
        <div class="item">
          <div class="card">
              <img src="./src/Best Seller/9.jpg" alt="" class="card-img-top">
              <div class="card-body">
                  <h3>T-shirt 1</h3>
                  <h5>$ <span class="text-center">23</span></h5>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sunt quaerat optio
                  aliquid minus maiores eos d.
                  </p>
                      <button class="btn btn-primary btn-sm">Buy Now</button>
              </div>
          </div>
      </div>
        <div class="item">
          <div class="card">
              <img src="./src/Best Seller/10.jpg" alt="" class="card-img-top">
              <div class="card-body">
                  <!-- <h3>T-shirt 1</h3>
                  <h5>$ <span class="text-center">23</span></h5>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sunt quaerat optio
                  aliquid minus maiores eos d.
                  </p> -->
                      <button class="btn btn-primary btn-sm">Buy Now</button>
              </div>
          </div>
      </div>
        <div class="item">
          <div class="card">
              <img src="./src/Best Seller/11.jpg" alt="" class="card-img-top">
              <div class="card-body">
                  <!-- <h3>T-shirt 1</h3>
                  <h5>$ <span class="text-center">23</span></h5>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus sunt quaerat optio
                  aliquid minus maiores eos d.
                  </p> -->
                      <button class="btn btn-primary btn-sm">Buy Now</button>
              </div>
          </div>
      </div>



        </div>
    </div>
</div>

 



<script>
     var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    nav:true,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },            
        960:{
            items:5
        },
        1200:{
            items:6
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});
   </script>