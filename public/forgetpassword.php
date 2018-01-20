<?php

require_once('../classes/util/connect.php');
require('../classes/util/config.php');
//require('../PHPMailer/PHPMailerAutoload.php');
if(isset($_POST) & !empty($_POST)){
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $sql = "SELECT * FROM `tb_user` WHERE name = '$name'";
    $res = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($res);
    if($count == 1){
        $r = mysqli_fetch_assoc($res);
        $password = $r['password'];
        $to = $r['email'];
        $subject = "Your Recovered Password";

        $message = "Your password have been recovered: " . $password . "Please do not lose your password". "This is a auto generated email";
        $headers = "From : communityportal@brian.com";
        if(mail($to, $subject, $message, $headers)){
            $smsg = "Your Password has been sent to your email id";
        }else{
            $fmsg =  "Failed to Recover your password, try again";
        }

    }else{
        $fmsg = "User name does not exist in database";
    }
}


?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
        <title>Developers Community-Design The Forget Password Page</title>
    </head>

<!-- Navigation Bar -->
<nav class="navbar">
    <div class="container-fluid">

        <div class="navbar-header">
            <div class="row">
                <a class="navbar-brand navbar-header-text" href="#">Developers Community</a>
            </div>
            <div class="row">
                <a class="navbar-text h6 navbar-header-below-text" href="#">powered by ABC Jobs</a>
            </div>
        </div>

        <form class="navbar-form navbar-right">
            <div class="form-group">
                <div class="row">
                    <input type="text" class="form-control" placeholder="Username">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="row">
                <div class="navbar-link">
                    <a href="">New to Us? Sign Up Now!</a>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-default">Register Now!</button>
                <button type="submit" class="btn btn-default navbar-right">Sign Up</button>
            </div>
        </form>

        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">About Us</a></li>
            <li><a href="#">Whats New!</a></li>
            <li><a href="#">Create Topics</a></li>
        </ul>
    </div>
</nav>
    <title>Forgot Password in PHP & MySQL</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

    <link rel="stylesheet" type="text/css" href="styles.css">
<body>
<div class="container">
    <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
    <form style="margin-bottom: 50px;" class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>

        <div class="col-lg-5">
        <div style ="margin-bottom: 50px;" class="input-group">
            <input  style="width: 1100px;" type="text" name="name" class="form-control" placeholder="Name" required>
        </div>
        </div>
        <div style ="margin-bottom: 400px;">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
        <a class="btn btn-lg btn-primary btn-block" href="modules/user/register.php">Register</a>
        </div>
    </form>
</div>
</body>
</html>



<!--Footer-->
<div class="rectangle" style="width: 1700px; height: 200px">

    <div class="col-lg-5">
        <a href="#">
            <i class="fa fa-5x fa-facebook-official" style="margin-right: 30px; color:#2b669a" ></i>
        </a>

        <a href="#">
            <i class="fa fa-5x fa-twitter" style="margin-right: 30px; color:#5cb3fd" ></i>
        </a>

        <a href="#">
            <i class="fa fa-5x fa-linkedin" style="margin-right: 30px; color:#025aa5"></i>
        </a>

        <a href="#">
            <i class="fa fa-5x fa-github" style="margin-right: 30px; color:#8c8c8c"></i>
        </a>

    </div>

    <div class="col-lg-3" style="color:#f9f9f9">
        <h4>Questions? Visit Our Help Center</h4>
    </div>

    <div class="col-lg-4">
        <form>
            <div class="form-group">
                <label for="exampleSelect1" style="color:#f9f9f9">Select Language</label>
                <select class="form-control" id="exampleSelect1">
                    <option>English</option>
                    <option>Chinese</option>
                </select>
            </div>
        </form>
    </div>

</div>
</body>
</html>
 * */
}