<?php 
    require_once '../controllers/authController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style_userverify.css">
</head>
<body>
    <section>
        <div class="imgBx">
            <img src="images/bg.jpg"/>
        </div>
        <a href="../index.php"><div class="home-signup-btn"><span><img src="images/home.png"></span></div></a>
        <div class="contentBx">
            <div class="formBx">
                <!--
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error! </strong> Passwords do not match 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>-->
                <?php if(count($errors)>0): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif;?>

                <h2>Reset Password</h2>
                <form action="reset_password.php" method="post">
                   <div class="inputBx">
                       <span>Password</span>
                       <input type="password" name="password">
                   </div> 
                   <div class="inputBx">
                       <span>Confirm Password</span>
                       <input type="password" name="passwordConf">
                   </div> 
                   <!-- <div class="remember">
                       <label><input type="checkbox" name="" id=""> Remember me</label>
                   </div> -->
                   <div class="inputBx">
                       <input type="submit" value="Reset password" name="reset-password-btn">
                   </div>
                </form>
                <!-- <h3>Login with social media</h3>
                <ul class="sci">
                    <li><img src="facebook.png"></li>
                    <li><img src="twitter.png"></li>
                    <li><img src="instagram.png"></li>
                </ul> -->
            </div>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>