<?php

require_once ('./../../../classes/util/connect.php');

$id = $_GET['userid'];
$SelSql = "SELECT * FROM `tb_user` WHERE userid = $id";
$res = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Developers Community-Design Public Profile Page</title>
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
        <div class="col-lg-8">
            <div class="rectangle" style="background-color: #BFC9CA ; width: 1200px; height: 300px ;margin-top: 50px">
                <div class="row">
                    <div class="col-lg-3" style="margin-left: 40px">
                        <img src="./../../images/assets/avatar%20photo.png" class="img-thumbnail"  style="margin-bottom: 30px; margin-top: 50px; width: 304px; height: 236px ; border-radius: 180px; ">
                    </div>

                    <div class="row">
                        <div class="col-lg-4" style="margin-left: 50px; margin-top: 100px">
                            <h2><strong><?php echo $r['name'] ?></strong></h2>
                            <h4>Software Engineer</h4>
                            <h4>Apple Inc- University Of London</h4>
                            <h4><?php echo $r['email'] ?></h4>
                            <h4><?php echo $r['country'] ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="rectangle" style="background-color: #BFC9CA ; width: 1200px; height: 100px ;margin-top: 50px">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 style="margin-left: 50px"><strong>Friends 220k </strong></h2>
                    </div>

                    <div class="col-lg-4">
                        <h2 style="margin-left: 50px"><strong>Followers 16.5M</strong></h2>
                    </div>

                    <div class="col-lg-4">
                        <h2 style="margin-left: 50px"><strong>Following 10m</strong></h2>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="rectangle" style="background-color: #BFC9CA ; width: 800px; height: 550px ;margin-top: 50px; margin-bottom: 50px">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 style="margin-left: 50px"><strong>Experience </strong></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <h4 style="margin-left: 50px">Swift Back End Developer Team Lead at Apple Inc</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <h4 style="margin-left: 50px">Apple Inc</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <h4 style="margin-left: 50px">Present</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <h4 style="margin-left: 50px">Silicon Valley</h4>
                    </div>
                </div>


                <div class="row" style="margin-top: 80px">
                    <div class="col-lg-8">
                        <h4 style="margin-left: 50px">Java Back End Developer Team Lead at Google Inc</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <h4 style="margin-left: 50px">Google Inc</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <h4 style="margin-left: 50px">2008-2013</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <h4 style="margin-left: 50px">Silicon Valley</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="rectangle" style="background-color: #BFC9CA ; width: 315px; height: 550px ;margin-top: 50px; margin-bottom: 50px; margin-left: 900px">
            <div class="row">
                <h3 style="margin-left: 50px"><strong>Followers</strong></h3>

                <img src="./avatar%20photo.png" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px; margin-left: 50px; width: 150px; height: 150px ; border-radius: 180px ">
                <h5 style="margin-left: 50px;">Sundar Pichai</h5>

                <img src="./avatar%20photo.png" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px; margin-left: 50px; width: 150px; height: 150px ; border-radius: 180px ">
                <h5 style="margin-left: 50px">Sundar Pichai</h5>
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
