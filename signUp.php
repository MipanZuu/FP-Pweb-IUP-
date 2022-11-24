<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login | TEAM-X </title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark font-monospace">
    <div id="login" class="container bg-dark">
        <div class="row-fluid">
          <div class="span12">
            <div class="login well well-small">
              <div class="center">
                <img src="dist/logo/teamx-text-color.png" alt="OUR LOGO" class="mt-5">
                <h1 class="mt-4">
                    E-Commerce System
                    <span class="fs-6">
                        by TEAM-X
                    </span>
                </h1>
              </div>
              <form class="login-form" id="UserSignUp" method="post" accept-charset="utf-8">
                <h2 id="email"> Email </h2>
                <div class="control-group mb-4">
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input name="data[User][email]" required="required" placeholder=" " maxlength="123" type="text" id="UserEmail"> 
                  </div>
                </div>
                <h2 id="email"> Username </h2>
                <div class="control-group mb-4">
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input name="data[User][username]" required="required" placeholder=" " maxlength="123" type="text" id="UserUsername"> 
                  </div>
                </div>
                <h2 id="password"> Password </h2>
                <div class="control-group mb-4">
                  <div class="input-prepend">
                    <span class="add-on"><i class="icon-lock"></i></span>
                    <input name="data[User][password]" required="required" placeholder=" " type="password" id="UserPassword"> 
                  </div>
                </div>

                <div class="control-group">
                  <p class="text-white">Already have an account? <a href="index.php">Sign In</a></p>
                </div>

                <div class="control-group mt-4 text-center bg-primary">
                  <input class="btn btn-custom text-white fw-bolder py-2" type="submit" value="Sign Up"> 
                </div>
    
              </form>
    
            </div>
            <!-- login -->
          </div>
        </div>
        <!-- row-fluid -->
      </div>
      <!-- container -->
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery-3.6.1.min.js"></script>
<script src="assets/js/signUpUser.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
</html>