<?php
    include("../config/config.ini");
?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <link rel="stylesheet" href="../../bootstrap-3.3.7-dist/css/bootstrap.css">
                    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
                    <title>Developers Community-Home Page</title>
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

                    <h1>Whats New</h1>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card" style="width: 30rem; float: right">
                                <img class="card-img-top" src="images/assets/images.jpg" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Why Be A Programmer?</h4>
                                    <p class="card-text">Why Be A Programmer? Come In And Find Out More About Pros of being a Programmer!</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card" style="width: 30rem; float: right">
                                <img class="card-img-top" src="images/assets/googleimage.png" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Whats Store in Google?</h4>
                                    <p class="card-text">Click Here to Read More About What Google Have to Tell you the Latest Findouts</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card" style="width: 30rem; float: right ">
                                <img class="card-img-top" src="images/assets/appleeeimage.png" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">What is the future of MacOs</h4>
                                    <p class="card-text">Personal Interview conducted by ABC Jobs with Johnny Ive to speak about future of notebooks</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container">
                    <h1>Latest</h1>

                        <div class="row" style="margin-bottom: 10%">
                            <div class="col-lg-2">
                                <img src="images/assets/appleeeimage.png" alt="..." class="img-thumbnail">
                            </div>

                            <div class="col-lg-2" style="margin-top: 20px ">
                                <h3> Johny Ive </h3>
                                <h5> Swift Developer & GoLang Developer </h5>
                            </div>

                            <div class="col-lg-4" style="margin-top: 60px; color:#9d9d9d; font-family: 'American Typewriter' ">
                                <h4> What is Programming All About Nowadays ? </h4>
                            </div>

                            <div class="col-lg-3" style="margin-top: 60px; color:#4b5257; font-family: Baskerville ">
                                <h4> 28 mins ago &nbsp;&nbsp;&nbsp;10 comments </h4>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 10%">
                            <div class="col-lg-2">
                                <img src="images/assets/googleimage.png" alt="..." class="img-thumbnail">
                            </div>

                            <div class="col-lg-2" style="margin-top: 20px ">
                                <h3> Sundar Pichai </h3>
                                <h5> Android Developer and Design </h5>
                            </div>

                            <div class="col-lg-4" style="margin-top: 60px; color:#9d9d9d; font-family: 'American Typewriter' ">
                                <h4> Anybody Faces this issue Error: 24456 Please Help!!! </h4>
                            </div>

                            <div class="col-lg-3" style="margin-top: 60px; color:#4b5257; font-family: Baskerville ">
                                <h4> 45 mins ago &nbsp;&nbsp;&nbsp;107 comments </h4>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 10%">
                            <div class="col-lg-2">
                                <img src="images/assets/googleimage.png" alt="..." class="img-thumbnail">
                            </div>

                            <div class="col-lg-2" style="margin-top: 20px ">
                                <h3> Sundar Pichai </h3>
                                <h5> Android Developer and Design </h5>
                            </div>

                            <div class="col-lg-4" style="margin-top: 60px; color:#9d9d9d; font-family: 'American Typewriter' ">
                                <h4> Do you think Python Programmers can still earn as much as expected? </h4>
                            </div>

                            <div class="col-lg-3" style="margin-top: 60px; color:#4b5257; font-family: Baskerville ">
                                <h4> 50 mins ago &nbsp;&nbsp;&nbsp;28 comments </h4>
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
