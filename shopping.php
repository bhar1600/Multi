    <?php $page="shop"; include 'includes/header.php'; ?>
    <div class="product">
      <div class="container-fluid mt-5">
        <div class="row">
          <div class="col-md-3">
            <div class="heading">
              <h3>Filters</h3>
            </div>
              <hr class="fil-hr">
              <div class="mt-4">
                <h5>CATEGORIES</h5>
                <ul class="cat">
                  <li> <a href="#"><i class="fa-solid fa-chevron-right"></i> Electronics</a> </li>
                  <li> <a href="#"><i class="fa-solid fa-chevron-right"></i> Men</a> </li>
                  <li> <a href="#"><i class="fa-solid fa-chevron-right"></i> Women</a> </li>
                  <li> <a href="#"><i class="fa-solid fa-chevron-right"></i> Baby & Kids</a> </li>
                  <li> <a href="#"><i class="fa-solid fa-chevron-right"></i> Home & Furniture</a> </li>
                  <li> <a href="#"><i class="fa-solid fa-chevron-right"></i> Sports Book & More</a> </li>
                </ul>
              </div>
              <hr class="fil-hr">
              <div class="mt-4">
                <h5>PRICE</h5>
                <input type="range" name="" value="" min="100" max="1000">
              </div>
              <hr class="fil-hr mt-4">
              <div class="mt-4">
                <input type="checkbox" name="" value="Moonlight Prime" id="mlp"><label for="mlp" class="fw-bold">&nbsp&nbspMoonlight Prime</label>
              </div>
              <hr class="fil-hr mt-4">
              <div class="mt-4">
                <h5>COLOR</h5>
                <ul class="color">
                <li> <a href="#"><i class="fa-brands fa-codepen"></i> Red</a> </li>
                <li> <a href="#"><i class="fa-brands fa-codepen"></i> Green</a> </li>
                <li> <a href="#"><i class="fa-brands fa-codepen"></i> White</a> </li>
                <li> <a href="#"><i class="fa-brands fa-codepen"></i> Black</a> </li>
                <li> <a href="#"><i class="fa-brands fa-codepen"></i> Pink</a> </li>
                <li> <a href="#"><i class="fa-brands fa-codepen"></i> Yellow</a> </li>
                </ul>
              </div>
              <hr class="fil-hr mt-4">
              <div class="mt-4">
                <h5>DISCOUNT</h5>
                <ul class="discount">
                  <li> <a href="#"><i class="fa-solid fa-bolt"></i> 50% or more</a> </li>
                  <li> <a href="#"><i class="fa-solid fa-bolt"></i> 40% or more</a> </li>
                  <li> <a href="#"><i class="fa-solid fa-bolt"></i> 30% or more</a> </li>
                  <li> <a href="#"><i class="fa-solid fa-bolt"></i> 20% or more</a> </li>
                  <li> <a href="#"><i class="fa-solid fa-bolt"></i> 10% or more</a> </li>
                </ul>
              </div>
          </div>
          <div class="col-md-9">
            <p>Home > Clothing and Accessories > Topwear > T-shirts</p>
            <p>Showing 1 – 40 of 21,208 results for "tshirt"</p>
            <?php
            for($i=0; $i < 5; $i++) {
            echo "<div class='row'>
              <div class='col-md-3 pro-img'>
                <img src='slide/5.jpg' alt='' class='w-100' height='300px'>
                <p>Graphic Print Men Crew Neck Yellow T-Shirt</p>
                <p>₹319 <del>₹1999</del> 84% off</p>
              </div>
              <div class='col-md-3 pro-img'>
                <img src='slide/6.jpg' alt='' class='w-100' height='300px'>
                <p>Graphic Print Men Crew Neck Yellow T-Shirt</p>
                <p>₹319 <del>₹1999</del> 84% off</p>
              </div>
              <div class='col-md-3 pro-img'>
                <img src='slide/7.jpg' alt='' class='w-100' height='300px'>
                <p>Graphic Print Men Crew Neck Yellow T-Shirt</p>
                <p>₹319 <del>₹1999</del> 84% off</p>
              </div>
              <div class='col-md-3 pro-img'>
                <img src='slide/8.jpg' alt='' class='w-100' height='300px'>
                <p>Graphic Print Men Crew Neck Yellow T-Shirt</p>
                <p>₹319 <del>₹1999</del> 84% off</p>
              </div>
            </div>
            <hr>";
          }
             ?>
            <div class="row pagin">
              <div class="col-md-2 pa">
                <p>Page 1 of 10</p>
              </div>
              <div class="col-md-10">
                <ul class="paginat">
                  <li> <a href="#">Prev</a> </li>
                  <li> <a href="#">1</a> </li>
                  <li> <a href="#">2</a> </li>
                  <li> <a href="#">3</a> </li>
                  <li> <a href="#">Next</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt-4">
      <div class="row">
        <h2>Feature </h2>
        <div class="col-md-3">
          <img src="feature/5.jpg" alt="" class="w-100">
        </div>
        <div class="col-md-3">
          <img src="feature/2.jpg" alt="" class="w-100">
        </div>
        <div class="col-md-3">
          <img src="feature/3.jpg" alt="" class="w-100">
        </div>
        <div class="col-md-3">
          <img src="feature/4.jpg" alt="" class="w-100">
        </div>
      </div>
    </div>

    <div class="container-fluid mt-4">
      <div class="row">
        <h2>Deals On Top Brands</h2>
        <div class="col-md-6">
          <div class="row">
              <div class="col-md-3 dealpro">
                <img src="topdealproduct/1.jpg" alt="" class="w-100">
                <h5 class="text-center">Dummy Text Here</h5>
              </div>
              <div class="col-md-3 dealpro">
                <img src="topdealproduct/2.jpg" alt="" class="w-100">
                <h5 class="text-center">Dummy Text Here</h5>
              </div>
              <div class="col-md-3 dealpro">
                <img src="topdealproduct/3.jpg" alt="" class="w-100">
                <h5 class="text-center">Dummy Text Here</h5>
              </div>
              <div class="col-md-3 dealpro">
                <img src="topdealproduct/4.jpg" alt="" class="w-100">
                <h5 class="text-center">Dummy Text Here</h5>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
              <div class="col-md-3 dealpro">
                <img src="topdealproduct/5.jpg" alt="" width="100%">
                <h5 class="text-center">Dummy Text Here</h5>
              </div>
              <div class="col-md-3 dealpro">
                <img src="topdealproduct/6.jpg" alt="" class="w-100">
                <h5 class="text-center">Dummy Text Here</h5>
              </div>
              <div class="col-md-3 dealpro">
                <img src="topdealproduct/7.jpg" alt="" class="w-100">
                <h5 class="text-center">Dummy Text Here</h5>
              </div>
              <div class="col-md-3 dealpro">
                <img src="topdealproduct/8.jpg" alt="" class="w-100">
                <h5 class="text-center">Dummy Text Here</h5>
              </div>
          </div>
        </div>
      </div>
    </div>

<div class="signin-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <p>See your orders</p>
        <button class="signin" type="button" name="button">Sign In</button>
        <p>New Customer? <a href="#">Start Here</a> </p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <img src="shoppingbanner/1.jpg" alt="" class="w-100">
    </div>
    <div class="col-md-6">
      <img src="shoppingbanner/2.jpg" alt="" class="w-100">
    </div>
  </div>
</div>

    <?php include 'includes/footer.php'; ?>
  </body>
</html>
