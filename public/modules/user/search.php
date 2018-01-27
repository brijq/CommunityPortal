<?php
$searchmsg = "";
require_once ('../../../classes/util/connect.php');

    if(isset($_POST['submit'])) {
        //do  something here in code
        if (isset($_GET['go'])) {
            if (preg_match("/^[A-Za-z]+/", $_POST['name'])) {
                $name = $_POST['name'];
                //-query  the database table
                $sql = "SELECT userid, name ,email,age,mobilenumber,country,city,address FROM tb_user WHERE name LIKE '%" . $name . "%'";
                //-run  the query against the mysql query function
                $result = mysqli_query($connection, $sql);

                /**
                //-create  while loop and loop through result set
                while ($row = mysqli_fetch_array($result)) {
                    $name = $row['name'];
                    $email = $row['email'];
                    $age = $row['age'];
                    $mobilenumber = $row['mobilenumber'];
                    $country = $row['country'];
                    $city = $row['city'];
                    $address = $row['address'];
                    $userid = $row['userid'];

                    $abc = "<div class=\"col-lg-3\"> <ul style='text-align: center ; margin-top: 80px;'> <li> <h3 style=\"margin-left: 100px; color: #2aabd2\"><strong><a  href=\"search.php?id=$userid\"> <h3 style='color: #0e90d2; margin-top: 30px;'>name</h3>" . $name . " <h3 style='color: #0e90d2; margin-top: 30px;'>email</h3>" . $email . " <h3 style='color: #0e90d2; margin-top: 30px;'>age</h3>" . $age . "<h3 style='color: #0e90d2; margin-top: 30px;'>mobilenumber</h3> " . $mobilenumber . " <h3 style='color: #0e90d2; margin-top: 30px;'>country</h3>" . $country . "<h3 style='color: #0e90d2; margin-top: 30px;'>city</h3>" . $city . "  <h3 style='color: #0e90d2; margin-top: 30px;'>address</h3>" . $address . "  </a></strong></h3></li> </ul></div>";

                }
                 **/
            } else {
                $searchmsg = "<p>Please enter a search query</p>";
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
    <title>Developers Community-Search Contacts</title>
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
<div style="margin-bottom: 800px">
    <h2 style="text-align: center">Please enter a search query</h2>
    <h3 style="text-align: center">Search  Contacts Details</h3>
    <p style="text-align: center">You  may search either by first or last name</p>
    <form style="text-align: center"  method="post" action="search.php?go"  id="searchform">
        <input style="text-align: center" type="text" name="name">
        <input style="text-align: center" type="submit" name="submit" value="Search">
    </form>

    <h3 style="text-align: center">Results</h3>

    <div class="container">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>E-mail</th>
                <th>Age</th>
                <th>Mobile Number</th>
                <th>Country</th>
                <th>City</th>
                <th>Address</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>1</td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['age'] ?></td>
                    <td><?php echo $row['mobilenumber'] ?></td>
                    <td><?php echo $row['country'] ?></td>
                    <td><?php echo $row['city'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>


    <?php if(!isset($abc)){ ?><div style = "text-align: center;" class="alert alert-success" role="alert"> <?php echo "No Result Found"; ?> </div><?php } ?>
    <?php if(!isset($searchmsg)){ ?><div style = "text-align: center;" class="alert alert-danger" role="alert"> <?php echo $searchmsg; ?> </div><?php } ?>
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