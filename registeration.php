    <div id="registeration">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-4 p-3 text-center" id="box1">
            <h3>Looks like you're new here!</h3>
            <h5 style="margin-bottom:200px">Sign up with your mobile number to get started</h5>
            <a href="index.php"><img src="logo/Color logo - no background.png" alt="" class="w-100"></a>
          </div>
          <div class="col-md-4 pt-5" id="box2">
            <br>
            <input type="phone"  name="" value="" placeholder="Mobile Number"> <br><br><br>
            <div class="cls-pass">
                <input id="pass" type="password" name="" value="" placeholder="Set Password">
                <i id="eye" class="fa-solid fa-eye"></i>
                <i id="eye2" class="fa-solid fa-eye-slash d-none"></i>
            </div> <br><br>
            <input type="submit" class="btn btn-success" name="" value="Sign Up"> <br> <br>
            <a href="login.php">Existing User? Log In</a>
          </div>
        </div>
      </div>
    </div>
    <script src="jquery/jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        $("#eye").click(function(){
          $("#pass").attr("type","text");
          $("#eye").addClass("d-none");
          $("#eye2").removeClass("d-none");
        });

        $("#eye2").click(function(){
          $("#pass").attr("type","password");
          $("#eye2").addClass("d-none");
          $("#eye").removeClass("d-none");
        });

      });
    </script>

  </body>
</html>
