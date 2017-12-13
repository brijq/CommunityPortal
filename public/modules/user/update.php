<?php
require_once '../../includes/autoload.php';

use classes\business\UserManager;
use classes\entity\User;

ob_start();
//include '../../includes/security.php';

$name="";
$password="";
//$confirmpassword="";
$email="";
$age='';
$mobilenumber='';
$country='';
$city='';
$address='';

if(!isset($_REQUEST["submitted"])){
    $UM=new UserManager();
    $existuser=$UM->getUserByEmail($_SESSION["email"]);
    $name=$existuser->name;
    $email=$existuser->email;
    $password=$existuser->password;
    $age=$existuser->age;
    $mobilenumber=$existuser->mobilenumber;
    $country=$existuser->country;
    $city=$existuser->city;
    $address=$existuser->address;

    echo $name;
    echo $email;
    echo $password;
    echo $age;
    echo $mobilenumber;
    echo $country;
    echo $city;
    echo $address;

}else{
    $userName=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $email=$_REQUEST["email"];
    $age=$_REQUEST["age"];
    $mobilenumber=$_REQUEST["mobilenumber"];
    $country=$_REQUEST["country"];
    $city=$_REQUEST["city"];
    $address=$_REQUEST["address"];



    if($userName!='' && $email!='' && $password!='' && $age!="" && $mobilenumber!="" && $country!="" && $city!="" && $address!=""){
        $update=true;
        $UM=new UserManager();
        if($email!=$_SESSION["email"]){
            $existuser=$UM->getUserByEmail($email);
            if(is_null($existuser)==false){
                $formerror="User Email already in use, unable to update email";
                $update=false;
            }
        }
        if($update){
            $existuser=$UM->getUserByEmail($_SESSION["email"]);
            $existuser->name=$name;
            $existuser->email=$email;
            $existuser->password=$password;
            $existuser->age=$age;
            $existuser->mobilenumber=$mobilenumber;
            $existuser->country=$country;
            $existuser->city=$city;
            $existuser->address=$address;
            $UM->saveUser($existuser);
            //$_SESSION["email"]=$email;
            header("Location:../../home.php");
        }
    }else{
        $formerror="Please provide required values";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Developers Community-Registration Confirmation Page</title>
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
        <div class="col-lg-3">
            <img src="../../images/avatar%20photo.png" class="img-thumbnail"  style="margin-bottom: 30px; margin-top: 50px; width:304px; height:236px ">
        </div>

        <div class="col-lg-5">
            <div class="rectangle" style="background-color: #BFC9CA ; width: 1000px; height: 800px ;margin-top: 50px">
                <div class="row">
                    <div class="col-lg-2 pull-right" style="margin-top: 10px">
                        <button type="button" class="btn btn-info">Edit</button>
                    </div>

                    <div class="col-lg-4" style="margin-left: 50px">
                        <h3 style="color:#2aabd2; margin-bottom: 50px"><strong>Personal Particulars</strong></h3>

                        <h5 style="margin-bottom: 50px"><strong>Name : Steve Jobs</strong></h5>

                        <div class="form-group">
                            <label for="Name" style="margin-left:20px">Name</label>
                            <input type="text" class="form-control"  style="margin-bottom: 40px; margin-left:20px" name="name" id="name" placeholder="Name"  required>
                        </div>

                        <div class="form-group">
                            <label for="Password" style="margin-left:20px">Password</label>
                            <input type="password" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="password" id="password" placeholder="Enter password" required>
                        </div>

                        <h5 style="margin-bottom: 50px"><strong>Email : stevejobs@icloud.com</strong></h5>

                        <div class="form-group">
                            <label for="Email" style="margin-left:20px">Email address</label>
                            <input type="email" class="form-control"  style="margin-bottom: 10px;  margin-left:20px"name="email" id="Email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted"  style="margin-bottom: 40px;  margin-left:20px" >We'll never share your email with anyone else.</small>
                        </div>

                        <h5 style="margin-bottom: 50px"><strong>Age: 26</strong></h5>

                        <div class="form-group">
                            <label for="age" style="margin-left:20px">Age</label>
                            <input type="text" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="age" id="age"  required>
                        </div>

                    </div>

                    <div class="col-lg-2" style="margin-top: 85px; margin-left: auto"></div>

                    <div class="col-lg-4" style="margin-top: 10px">
                        <h5 style="margin-bottom: 50px"><strong>Phone : 12345678</strong></h5>

                        <div class="form-group">
                            <label for="mobilenumber" style="margin-left:20px">Mobile Number</label>
                            <input type="text" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="mobilenumber" id="mobilenumber"  required>
                        </div>

                        <h5 style="margin-bottom: 50px"><strong>Country : Singapore</strong></h5>

                        <div class="form-group">
                            <label for="Country" style="margin-left:20px">Country</label>
                            <input type="text" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="country" id="country"  required>
                        </div>

                        <h5 style="margin-bottom: 50px"><strong>City : Singapore</strong></h5>

                        <div class="form-group">
                            <label for="City" style="margin-left:20px">City</label>
                            <input type="text" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="city" id="city"  required>
                        </div>

                        <h5 style="margin-bottom: 50px"><strong>City : Blk 123, Stevens Road Singapore 123456</strong></h5>

                        <div class="form-group">
                            <label for="Address" style="margin-left:20px">Address</label>
                            <input type="text" class="form-control"  style="margin-bottom: 10px;  margin-left:20px" name="address" id="address"  required>
                        </div>

                        <input type="hidden" name="submitted" value="1"><input type="submit" name="submit" value="Submit">
                        <input type="submit" name="clear" value="Clear Search" onclick="javascript:clearForm();">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <button type="submit" class="btn btn-primary" style="width: 250px">Add New Profile Section</button>
        </div>

        <div class="col-lg-5">
            <div class="rectangle" style="background-color: #BFC9CA ; width: 1000px; height: 800px ;margin-top: 50px">
                <div class="row">
                    <div class="col-lg-2 pull-right" style="margin-top: 10px">
                        <button type="button" class="btn btn-info">Edit</button>
                    </div>

                    <div class="col-lg-4" style="margin-left: 50px ; margin-top: 45px">
                        <h3 style="color:#2aabd2; margin-bottom: 20px"><strong>Education Particulars</strong></h3>

                        <h5 style="margin-bottom: 50px"><strong>Institution : University Of London</strong></h5>

                        <h5 style="margin-bottom: 50px"><strong>Programme : Degree in Computer Science</strong></h5>

                        <h5 style="margin-bottom: 50px"><strong>Duration : 2008-2012</strong></h5>
                    </div>

                    <div class="col-lg-2" style="margin-top: 10px; margin-left: 30px">
                        <button type="button" class="btn btn-info">Edit</button>
                    </div>


                    <div class="col-lg-4" style=" margin-left: 200px;">
                        <h3 style="color:#2aabd2; margin-bottom: 20px"><strong>Work History</strong></h3>

                        <h5 style="margin-bottom: 50px"><strong>Designation: Team Lead BackEnd</strong></h5>

                        <h5 style="margin-bottom: 50px"><strong>Company : Apple Inc</strong></h5>

                        <h5 style="margin-bottom: 50px"><strong>Duration : Jan 2017 - Present</strong></h5>

                        <h5 style="margin-bottom: 50px"><strong>Description : In Charge Of Swift Development</strong></h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2 pull-right" style="margin-top: 10px">
                        <button type="button" class="btn btn-info">Edit</button>
                    </div>

                    <div class="col-lg-4" style="margin-left: 50px ; margin-top: 45px">
                        <h3 style="color:#2aabd2; margin-bottom: 20px"><strong>Education Particulars 2</strong></h3>

                        <h5 style="margin-bottom: 50px"><strong>Institution : University Of London</strong></h5>

                        <h5 style="margin-bottom: 50px"><strong>Programme : Degree in Computer Science</strong></h5>

                        <h5 style="margin-bottom: 50px"><strong>Duration : 2008-2012</strong></h5>
                    </div>

                    <div class="col-lg-2" style="margin-top: 10px; margin-left: 30px">
                        <button type="button" class="btn btn-info">Edit</button>
                    </div>


                    <div class="col-lg-4" style=" margin-left: 200px;">
                        <h3 style="color:#2aabd2; margin-bottom: 20px"><strong>Work History 2</strong></h3>

                        <h5 style="margin-bottom: 50px"><strong>Designation: Team Lead BackEnd</strong></h5>

                        <h5 style="margin-bottom: 50px"><strong>Company : Apple Inc</strong></h5>

                        <h5 style="margin-bottom: 50px"><strong>Duration : Jan 2017 - Present</strong></h5>

                        <h5 style="margin-bottom: 50px"><strong>Description : In Charge Of Swift Development</strong></h5>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <p></p>
        </div>

        <div class="col-lg-4">
            <div class="rectangle" style="background-color: #BFC9CA ; width: 1000px; height: 300px ;margin-top: 50px; margin-bottom: 20px">
                <div class="row">
                    <div class="col-lg-3" style="margin-left: 50px ; margin-top: 45px">
                        <h3 style="color:#2aabd2; margin-bottom: 50px"><strong>Skills Set & Interest</strong></h3>
                        <h5 style="margin-bottom: 50px"><strong>Swift Programming</strong></h5>
                        <h5 style="margin-bottom: 50px"><strong>IOS Programming</strong></h5>
                    </div>

                    <div class="col-lg-3" style="margin-left: 50px ; margin-top: 45px">
                        <h5 style="margin-bottom: 50px; margin-top: 95px"><strong>Kotlin Programming</strong></h5>
                        <h5 style="margin-bottom: 50px"><strong>Objective C</strong></h5>
                    </div>

                    <div class="col-lg-3" style="margin-left: 30px ; margin-top: 45px">
                        <h5 style="margin-bottom: 50px; margin-top: 95px"><strong>Android Programming</strong></h5>
                        <h5 style="margin-bottom: 50px"><strong>Python</strong></h5>
                    </div>
                </div>



            </div>
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

