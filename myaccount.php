    <?php $page="myacc"; include 'includes/header.php'; ?>
    <div id="myacc" class="mb-5">
      <div class="container-fluid mt-5">
        <div class="row">
          <div class="col-md-3">
            <img src="top/1.jpg" alt=""  class="w-100">
            <div class="">
              <ul>
                <li> <a href="#">My Order</a> </li>
                <li> <a href="#">My Address</a> </li>
                <li> <a href="#">Edit Account</a> </li>
                <li> <a href="#">Change Password</a> </li>
                <li> <a href="#">Pay Offline</a> </li>
                <li> <a href="#">Delete Account</a> </li>
                <li> <a href="#">Log Out</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-9">
            <h2>My Order</h2>
            <h5>Personal Information:</h5>
             <div class="row">
               <div class="col-md-5">
                 <label for="">First Name:</label> <br>
                 <input type="text" name="" value="">
               </div>
               <div class="col-md-5">
                 <label for="">Last Name:</label> <br>
                 <input type="text" name="" value="">
               </div>
             </div>
             <br>
             <h5>Gender:</h5>
             <div class="row">
               <div class="col-md-12">
                 <input type="radio" name="n" value="Male" id="male"><label for="male"> Male</label>
                 <input type="radio" name="n" value="Female" id="female"><label for="female"> Female</label>
               </div>
             </div>
             <br>
             <h5 class="mt-4">Email Address:</h5>
             <div class="row">
               <div class="col-md-12">
                 <input type="email" name="email" value="">
               </div>
             </div>
             <br>
             <h5 class="mt-4">Mobile Number:</h5>
             <div class="row">
               <div class="col-md-12">
                 <input type="phone" name="" value="">
               </div>
             </div>
             <br>
             <button type="button" name="button" class="mt-4">Update</button>
          </div>
        </div>
      </div>

    </div>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>
