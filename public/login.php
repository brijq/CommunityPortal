<?php

/**
 * This is the login page
 */

require_once 'includes/autoload.php';
use classes\business\UserManager;

//$path = str_replace("classes\business\UserManager","classes/business/UserManager");

//include '../classes/business/UserManager.php';

$formerror="";

$email="";
$password="";

$email_err = "";
$password_err = "";

/**
 * @params string $email
 * @params string $password
 * This logic belows includes the validation of inputs with the requirements and followed by the backend filter with
 * database and will then carry out the necessary authorisation if username and password is valid.
 */
if(isset($_REQUEST["submitted"])){
    $email=isset($_REQUEST["email"]) ? $_REQUEST["email"] : '';
    $password=isset($_REQUEST["password"]) ? $_REQUEST["password"] : '';

    $UM=new UserManager();

    // Validate password
    if(empty($_REQUEST['password'])){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_REQUEST['password'])) < 6){
        $password_err = "Password must have at least 6 characters.";
    } else{
        $password = trim($_REQUEST['password']);
    }

    $existuser=$UM->getUserByEmailPassword($email,$password);
    if(isset($existuser)){
        print "user exist";
        session_start();
        $_SESSION['email']=$email;
        header("Location: home.php");
    } else {
        print "invalid user";
        $formerror = "Invalid User Name or Password";
    }
}

?>

        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <link rel="stylesheet" href="./css/bootstrap-3.3.7-dist/css/bootstrap.css">
                <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
                <title>Developers Community-Design Login Page</title>
            </head>
            <body>

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

            <!-- Body -->
            <div class="container">
                <div class="col-lg-6 text-center">
                    <div class="rectangle" style=" background:#BFC9CA ; margin-left: 280px; margin-top: 100px; margin-bottom: 100px; width: 600px; height: 600px">
                        <div class="row">
                            <div class="text-center" style="font-family: American Typewriter;">
                                <h2>Developers Community</h2>
                                <h2 style="margin-bottom: 100px">Get Started - Its Free!</h2>
                            </div>
                        </div>



                        <form name="myForm" method="post">
                            <div class="form-group">
                                <?php if(isset($formerror)){ ?><div class="alert alert-success" role="alert"> <?php echo $formerror; ?> </div><?php } ?>
                                <?php if(isset($formerror)){ ?><div class="alert alert-danger" role="alert"> <?php echo $formerror; ?> </div><?php } ?>

                                <div class="col">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="username">Email</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" id="email" name="email" value="<?=$email?>" aria-describedby="emailHelp" placeholder="Enter username"  style="margin-bottom: 50px; margin-left: 50px; width:500px; height:48px">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input type="password" class="form-control" id="password"  value="<?=$password?>"  name="password" placeholder="Password" style="margin-bottom: 50px; margin-left: 50px; width:500px; height:48px">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <input type="hidden" name="submitted" value="1"><input type="submit" name="submit" value="Submit">
                            <input type="submit" name="clear" value="Clear Search" onclick="javascript:clearForm();">

                            <div class="form-group">
                                <a href="forgetpassword.php" style="margin-top: 50px">Forget Your Password? Click Here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



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
}

