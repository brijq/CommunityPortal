<?php

require_once 'includes/autoload.php';

use classes\business\UserManager;


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


$email="";

if(isset($_REQUEST["submitted"])) {
    $email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : '';

    $UM = new UserManager();


    $existuser = $UM->getUserByEmail($email);

    if (isset($existuser)) {

        $existingUser = $UM->getUserByEmailReset($email);

        if ($existingUser["email"]) {
            // Create a unique salt. This will never leave PHP unencrypted.
            $salt = "498#2D83B631%3800EBD!801600D*7E3CC13";

            // Create the unique user password reset key
            $password = hash('sha512', $salt . $existingUser["email"]);

            // Create a url which we will direct them to reset their password
            $pwrurl = "http://localhost:8080/CommunityPortal/public/reset_password.php?q=".$password;

            // Mail them their key
            $mailbody = "Dear user,\n\nIf this e-mail does not apply to you please ignore it. It appears that you have requested a password reset at our website www.yoursitehere.com\n\nTo reset your password, please click the link below. If you cannot click it, please paste it into your web browser's address bar.\n\n" . $pwrurl . "\n\nThanks,\nThe Administration";
            mail($existingUser["email"], "CommunityPortal - Password Reset", $mailbody);
            echo "Your password recovery key has been sent to your e-mail address.";

            $mail = new PHPMailer();

            try {
                $mail->IsSMTP();
                $mail->Host = 'smtp.mailgun.org';
                $mail->SMTPAuth = true;
                $mail->Username = 'postmaster@mailgun.taiyuan.com.sg';
                $mail->Password = '5585dffec4722c40fbd39390e0765a20';
                $mail->Port = '587';

                //$mail->From = $_POST["email"];
                $mail->From = 'noreply@communityportal.com';
                $mail->FromName = 'CommunityPortal';
                $mail->addAddress($email);
                $mail->addReplyTo($email, 'Reply');

                $mail->isHTML(true);
                $mail->Subject = 'Forget Password Confirmation';
                $mail->Body = $mailbody;

                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                if (!$mail->send()) {
                    echo 'Message could not be send';
                } else {
                    echo 'Message has been send';
                }
            } catch (Exception $e) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
            print "An email have already been send, Please Check Your inbox.";
            $_SESSION['email'] = $email;

            $formerror = "An email have already been send, Please Check Your inbox.";
            header("Location: reset_password.php");
        } else {
            print "User does not exist . Please fill in an valid email address or Register First";
            $formerror = "User does not exist . Please fill in an valid email address";
        }
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


            <div><?=$formerror?></div>
            <form name="myForm" method="post">
                <div class="form-group">

                    <div class="col">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="username">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter username"  style="margin-bottom: 50px; margin-left: 50px; width:500px; height:48px">
                            </div>
                        </div>
                    </div>
                </div>


                <input type="hidden" name="submitted" value="1"><input type="submit" name="ForgotPassword" value="Request Reset Now">
                <input type="submit" name="clear" value="Clear Search" onclick="javascript:clearForm();">

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