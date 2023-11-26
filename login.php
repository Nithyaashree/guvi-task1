<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Log in</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="">
    <!-- external css -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="./public/js/validation.min.js"></script>
</head>

<body>
<style>
body {
  background-image: url('./public/images/Background.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
    <div class="container-fluid">
        <div class="container">
            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 no-padding">
                        <div class="login-box">
                            <h4> Sign In</h4>
                            <div class="login-row row no-margin">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control form-control-sm">
                            </div>
                            <div class="login-row row no-margin">
                                <label for="password">Password</label>
                                <input type="password" name="user_password" id="user_password" class="form-control form-control-sm">
                            </div>
                            <div class="login-row btnroo row no-margin">
                                <input type="button" value="login" id="submit" name="submit" class="form-control form-control-sm">
                            </div>
                            <div class="login-row row no-margin">
                                <div id="error"></div>
                            </div>
                            <div class="login-row donroo row no-margin">
                                <p>Don't have an account?<a href="index.php">&nbsp;Sign up</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 img-box">
                        <img src="./public/images/Signin.png" alt="">
                    </div>
                </div>
                <div class="card  alert-info align-baseline">
                    
                </div>
            </div>
        </div>
    </div>
    <script src="scripts/loginProcess.js"></script>
</body>

</html>