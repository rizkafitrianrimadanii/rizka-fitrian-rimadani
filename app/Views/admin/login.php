
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?=base_url('/bootstrap/css/bootstrap.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('/bootstrap/css/font-awesome.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('/bootstrap/css/animate.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('/bootstrap/css/animsition.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('/bootstrap/css/util.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('/bootstrap/css/main.css');?>">

<meta name="robots" content="noindex, follow">
    <body>
            <div class="limiter">
                    <div class="container-login100" style="background-image: url('/bootstrap/image/hotel.jpg');">
                        <div class="wrap-login100 p-t-30 p-b-50">
                            <span class="login100-form-title p-b-41">Please Sign In</span>                  
                            <form class="login100-form validate-form p-b-30 p-t-4" method="POST" action="<?=site_url('/login');?>">
                                <div class="wrap-input100 validate-input" data-validate="Enter username">
                                    <input class="input100" type="text" name="txtUser" placeholder="Username">
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input class="input100" type="password" name="txtPass" placeholder="Password">
                                    <span class="focus-input100" ></span>
                                </div>
                                <div class="container-login100-form-btn m-t-32">
                                    <button class="login100-form-btn">Login</button>
                                    
                                    <?=session()->getFlashData('info');?>
                                </div>
                            </form>
                            <span style="color: white"><center>&copy; Rizka Fitrian R- 2021/2022</center></span>
                        </div>
                    </div>
            </div>
            <div id="dropDownSelect1"></div>

                <script src="<?=base_url('/bootstrap/js/jquery-3.2.1.min.js');?>"></script>
                <script src="<?=base_url('/bootstrap/js/animsition.min.js');?>"></script>
                <script src="<?=base_url('/bootstrap/js/popper.js');?>"></script>
                <script src="<?=base_url('/bootstrap/js/bootstrap.min.js');?>"></script>
                <script src="<?=base_url('/bootstrap/js/main.js');?>"></script>
    </body>
</html>
