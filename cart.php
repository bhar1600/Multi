<?php
$page="cart"; include 'includes/header.php'; ?>
    <div class="mycart">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="row mt-3">
              <div class="col-md-8">
                <h2>My Cart</h2>
                <p>&nbsp;&nbsp;&nbsp;Currently You have 1 Item(s) in your cart</p>
              </div>
              <div class="col-md-4">
                <h5><i class="fa-sharp fa-solid fa-location-dot"></i> Delivered to: Urlana Kalan, Panipat India - 132103</h4>
              </div>
            </div>
            <hr class="fil-hr">

            <table class="table" id="cart-table">
              <thead>
                <th>Product</th>
                <th></th>
                <th>Quality</th>
                <th>Unit Price</th>
                <th>Delete</th>
                <th>Sub Total</th>
              </thead>
              <tbody>
                <td> <img src="feature/5.jpg" alt=""> </td>
                <td> Moonroof King Size Double Bedsheet Set <br>
                     Seller: Admin<br>
                     Delivery in 2 days | Free 40<br>
                     Sales Package: 3 </td>
                <td> 1 </td>
                <td>₹720</td>
                <td> <a href="#" class="btn btn-primary" name="button">Delete</a> </td>
                <td>₹7744</td>
              </tbody>
              <tfoot>

              </tfoot>
            </table>
            <div class="col-md-12">
              <a id="po-btn" class="btn btn-primary" href="placeorder.php">Place Order</a>
            </div>
          </div>
          <div class="col-md-4 p-3">
            <h3><center>Price Details</center></h3>
            <div class="row px-4">
              <div class="col-md-8">
                <p>Price (1 items)</p>
                <p>Discount</p>
                <p>Delivery Charges</p>
              </div>
              <div class="col-md-4">
                <p>₹6767</p>
                <p>₹603</p>
                <p>₹68</p>
              </div>
            </div>
              <hr class="fil-hr" style="width:90%">
            <div class="row px-4 mt-2">
              <div class="col-md-8">
                <p>Total Amount</p>
              </div>
              <div class="col-md-4">
                <p>₹599</p>
              </div>
              <p class="text-success"><b>You will save ₹601 on this order</b></p>
              <p><i class="fa-solid fa-file-shield"></i> Safe and Secure Payments. Easy returns 100% Authentic products.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>
