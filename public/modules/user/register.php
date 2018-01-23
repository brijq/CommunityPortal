<?php
/**
 * This is the register .php page
 */
session_start();
require_once '../../includes/autoload.php';

use classes\util\DBUtil;
use classes\business\UserManager;
use classes\entity\User;

$_SESSION['formerror']='';

$name="";
$password="";
//$confirmpassword="";
$email="";
$age='';
$mobilenumber='';
$country='';
$city='';
$address='';

if(isset($_REQUEST["submitted"])){
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $age=$_REQUEST["age"];
    $mobilenumber=$_REQUEST["mobilenumber"];
    $country=$_REQUEST["country"];
    $city=$_REQUEST["city"];
    $address=$_REQUEST["address"];



    if($name!='' && $password !='' && $email!='' && $age!="" && $mobilenumber!="" && $country!="" && $city!="" && $address!="") {
        $UM = new UserManager();
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user-> age = $age;
        $user-> mobilenumber = $mobilenumber;
        $user-> country = $country;
        $user-> city = $city;
        $user->address = $address;

        $existuser = $UM->getUserByEmail($email);


        if (!isset($existuser)) {
            print "User exist";
            // Save the Data to Database
            $UM->saveUser($user);
            header("Location:thankyou.php");
        } else {
            print "User does not exist";
            $formerror = "User Already Exist";
        }

    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Developers Community-Registration Page</title>
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
    <div class="row">
        <form name="myForm" method="post" class="form-group" action="register.php">
            <?php if(isset($formerror)){ ?><div class="alert alert-success" role="alert"> <?php echo $formerror; ?> </div><?php } ?>
            <?php if(isset($formerror)){ ?><div class="alert alert-danger" role="alert"> <?php echo $formerror; ?> </div><?php } ?>
            <div class="col">
                <h1> Sign Up Now And Join Our Largest Network Across More than 100,000 Connections All Over The World</h1>
            </div>
    </div>

    <form>
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="exampleTextarea">Write About Yourself</label>
                    <textarea class="form-control" id="exampleTextarea" rows="7"></textarea>
                </div>

                <div class="form-group">
                    <label for="example-tag-your-interest">Tag your interest .. topics ...</label>
                    <input type="text" class="form-control" id="example-tag-your-interest" aria-describedby="example-tag-your-interest-Help" placeholder="Enter anything">
                    <small id="example-tag-your-interest-help" class="form-text text-muted">You can key in your favourite topics or anything</small>
                </div>

            </div>

            <div class="col-lg-5">
                <div class="form-group">
                    <label for="Name" style="margin-left:20px">Name</label>
                    <input type="text" class="form-control"  style="margin-bottom: 40px; margin-left:20px" name="name" id="name" placeholder="Name"  required>
                </div>

                <div class="form-group">
                    <label for="Password" style="margin-left:20px">Password</label>
                    <input type="password" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="password" id="password" placeholder="Enter password" required>
                </div>

                <div class="form-group">
                    <label for="Password" style="margin-left:20px">Confirm Password</label>
                    <input type="password" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="Confirmpassword" id="Confirmpassword" placeholder="Enter password" required>
                </div>

                <div class="form-group">
                    <label for="Email" style="margin-left:20px">Email address</label>
                    <input type="email" class="form-control"  style="margin-bottom: 10px;  margin-left:20px"name="email" id="Email" aria-describedby="emailHelp" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted"  style="margin-bottom: 40px;  margin-left:20px" >We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="age" style="margin-left:20px">Age</label>
                    <input type="text" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="age" id="age"  required>
                </div>

                <div class="form-group">
                    <label for="mobilenumber" style="margin-left:20px">Mobile Number</label>
                    <input type="text" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="mobilenumber" id="mobilenumber"  required>
                </div>

                <div class="form-group">
                    <label for="Country" style="margin-left:20px">Country</label>
                    <input type="text" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="country" id="country"  required>
                </div>

                <div class="form-group">
                    <label for="City" style="margin-left:20px">City</label>
                    <input type="text" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="city" id="city"  required>
                </div>

                <div class="form-group">
                    <label for="Address" style="margin-left:20px">Address</label>
                    <input type="text" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="address" id="address"  required>
                </div>

                <input type="hidden" name="submitted" value="1"><input type="submit" name="Register" value="Register">
            </div>
        </div>
    </form>

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