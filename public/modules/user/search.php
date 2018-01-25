<?php

require_once ('../../../classes/util/connect.php');

    if(isset($_POST['submit'])) {
        //do  something here in code
        if (isset($_GET['go'])) {
            if (preg_match("/^[A-Za-z]+/", $_POST['name'])) {
                $name = $_POST['name'];
                //-query  the database table
                $sql = "SELECT userid, name FROM tb_user WHERE name LIKE '%" . $name . "%'";
                //-run  the query against the mysql query function
                $result = mysqli_query($connection, $sql);

                //-create  while loop and loop through result set
                while ($row = mysqli_fetch_array($result)) {
                    $FirstName = $row['FirstName'];
                    $LastName = $row['LastName'];
                    $ID = $row['ID'];

                    echo "<ul>\n";
                    echo "<li>" . "<a  href=\"search.php?id=$ID\">" . $name . " </a></li>\n";
                    echo "</ul>";
                }
            } else {
                echo "<p>Please enter a search query</p>";
            }
        }
    }



?>

<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
	<html>
	  <head>
    	    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
    	    <title>Search  Contacts</title>
    	  </head>
	  <p><body>
    	    <h3>Search  Contacts Details</h3>
   	    <p>You  may search either by first or last name</p>
    <form  method="post" action="search.php?go"  id="searchform">
   	      <input  type="text" name="name">
   	      <input  type="submit" name="submit" value="Search">
        </form>
	  </body>
</html>
</p>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Developers Community-List User Page</title>
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
<div class="row">
    <div class="col-lg-3">
        <img src="./handsome-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Johnny Ive</strong></h3>
        <h5 style="margin-left: 100px"><strong>Northumbria University</strong></h5>
    </div>

    <div class="col-lg-3">
        <img src="./pretty-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Melissa Tan</strong></h3>
        <h5 style="margin-left: 100px"><strong>London University</strong></h5>
    </div>

    <div class="col-lg-3">
        <img src="./handsome-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Johnny Ive</strong></h3>
        <h5 style="margin-left: 100px"><strong>Northumbria University</strong></h5>
    </div>

    <div class="col-lg-3">
        <img src="./pretty-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Melissa Tan</strong></h3>
        <h5 style="margin-left: 100px"><strong>London University</strong></h5>
    </div>
</div>

<div class="row">
    <div class="col-lg-3">
        <img src="./handsome-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Johnny Ive</strong></h3>
        <h5 style="margin-left: 100px"><strong>Northumbria University</strong></h5>
    </div>

    <div class="col-lg-3">
        <img src="./pretty-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Melissa Tan</strong></h3>
        <h5 style="margin-left: 100px"><strong>London University</strong></h5>
    </div>

    <div class="col-lg-3">
        <img src="./handsome-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Johnny Ive</strong></h3>
        <h5 style="margin-left: 100px"><strong>Northumbria University</strong></h5>
    </div>

    <div class="col-lg-3">
        <img src="./pretty-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Melissa Tan</strong></h3>
        <h5 style="margin-left: 100px"><strong>London University</strong></h5>
    </div>
</div>

<div class="row">
    <div class="col-lg-3">
        <img src="./handsome-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Johnny Ive</strong></h3>
        <h5 style="margin-left: 100px"><strong>Northumbria University</strong></h5>
    </div>

    <div class="col-lg-3">
        <img src="./pretty-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Melissa Tan</strong></h3>
        <h5 style="margin-left: 100px"><strong>London University</strong></h5>
    </div>

    <div class="col-lg-3">
        <img src="./handsome-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Johnny Ive</strong></h3>
        <h5 style="margin-left: 100px"><strong>Northumbria University</strong></h5>
    </div>

    <div class="col-lg-3">
        <img src="./pretty-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Melissa Tan</strong></h3>
        <h5 style="margin-left: 100px"><strong>London University</strong></h5>
    </div>
</div>

<div class="row">
    <div class="col-lg-3">
        <img src="./handsome-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Johnny Ive</strong></h3>
        <h5 style="margin-left: 100px"><strong>Northumbria University</strong></h5>
    </div>

    <div class="col-lg-3">
        <img src="./pretty-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Melissa Tan</strong></h3>
        <h5 style="margin-left: 100px"><strong>London University</strong></h5>
    </div>

    <div class="col-lg-3">
        <img src="./handsome-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Johnny Ive</strong></h3>
        <h5 style="margin-left: 100px"><strong>Northumbria University</strong></h5>
    </div>

    <div class="col-lg-3">
        <img src="./pretty-avatar.jpg" class="img-thumbnail"  style="margin-bottom: 10px; margin-top: 50px ; margin-left: 10px" alt="Cinque Terre" width="304" height="236">
        <h3 style="margin-left: 100px; color: #2aabd2"><strong>Melissa Tan</strong></h3>
        <h5 style="margin-left: 100px"><strong>London University</strong></h5>
    </div>
</div>

<div class="row">
    <div class="col">
        <a href="#" style="margin-top: 50px; color: #2aabd2; margin-left: 710px; margin-bottom: 30px; font-size: 40px">Load More...</a>
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