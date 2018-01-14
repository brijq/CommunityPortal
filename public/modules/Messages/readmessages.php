<?php
session_start();
require_once '../../includes/autoload.php';





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Developers Community-Read Messages</title>
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
    <h2>Messages: </h2>

    <div class="row">
        <div class="col-lg-3">
            <img src="./avatar%20photo.png" class="img-thumbnail"  style="margin-bottom: 30px; margin-top: 50px; width: 304px; height: 236px ">
        </div>

        <div class="col-lg-7">
            <h3 style="margin-top: 100px; color: #2aabd2">Sundar Pichai</h3>
            <h5 style="margin-top: 50px;">Hello , Can you help me on this area regarding how do I work on the new framework?</h5>
        </div>

        <div class="col-lg-2 pull-right">
            <h3 style="margin-top: 100px; color: #2aabd2">Monday</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <img src="./pretty-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 30px; margin-top: 50px; width: 304px; height: 236px ">
        </div>

        <div class="col-lg-7">
            <h3 style="margin-top: 100px; color: #2aabd2">Melissa Tan</h3>
            <h5 style="margin-top: 50px;">Hello , Check Out this new Design CMS System and Content Management Area on this.?</h5>
        </div>

        <div class="col-lg-2 pull-right">
            <h3 style="margin-top: 100px; color: #2aabd2">Tuesday</h3>
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
