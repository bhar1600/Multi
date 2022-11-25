<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="fontawesome/all.css">
    <link rel="stylesheet" href="bootstrap-5.2.1-dist/css/bootstrap.css">
    <script src="jquery/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="stylesheet/mastersheet.css">
    <style media="screen">

    </style>
  </head>
  <body id="login">

    <div id="box">
      <div class="container">
        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-4" id="box1">
            <a href="index.php"><img class="my-2" src="logo/Color logo - no background.png" alt="" width="190px"></a>
            <h3>Welcome to Moonlight</h3>
            <input id="user" type="text" name="" value="" placeholder="Username or Email"> <br>
            <div class="cls-pass">

                <input id="pass" class="mb-2" type="password" name="" value="" placeholder="Password">

                <i id="eye" class="fa-solid fa-eye"></i>
                <i id="eye2" class="fa-solid fa-eye-slash d-none"></i>

            </div>
            <a href="#">Forget Password</a> <br>
            <input type="submit" class="btn btn-primary my-1" name="" value="Sign In">
            <p>By continuing, you agree to Moonlight's <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice</a>.</p>
            <p><i class="fa-brands fa-google"></i> <a href="#"> Sign in with google</a> </p>
            <p>or</p>
            <p>New Moonlight? <a href="registeration.php">Create Account</a> </p>
          </div>
          <div class="col-md-4" id="box2">
            <img src="vec/1.jpg" alt="" class="h-100" width="105%">
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
