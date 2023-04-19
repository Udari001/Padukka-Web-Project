<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap-4.6.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            #btn1{
                margin-top: 68px;
                height: 35px;
                width: 125px;
            }
            .carousel-inner{
                height: 480px;
                width: 1250px;
            }
            .ft{
                padding: 20px;
                background-color: lightskyblue;
                padding-left: 850px;
            }
            hr{
                border: 2px solid purple;
            }
            .navbar{
                background-color: purple;
            }
            p{
                font-size: 20px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>

        <div class="container-fluid mt-3 ml-3">
            <div class="row">
                <div class="col-md-3 mt-3">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/img2.jpg" alt="" height="100px" width="80px"/>
                        </div>
                        <div class="col-md-9 mt-4">
                            <font>Ministry of Skills Development,<br>Employment and<br>Labour Relations</font>    
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <center><img src="images/img3.jpg" alt="" height="120px" width="120px"/></center>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger" id="btn1">LOG ME OUT</button>
                        </div>
                        <div class="col-md-4">
                            <img src="images/img1.jpeg" alt="" height="100px" width="90px"/>    
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        </svg> DASHBOARD <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                        </svg> COURSE <span class="sr-only">(current)</span></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Beautician</a>
                                        <a class="dropdown-item" href="#">Hairdresser</a>
                                        <a class="dropdown-item" href="#">Automobile Mechanic</a>
                                        <a class="dropdown-item" href="#">Software Developer</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                        </svg> BATCH <span class="sr-only">(current)</span></a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">BT-2022-01</a>
                                        <a class="dropdown-item" href="#">HD-2022-01</a>
                                        <a class="dropdown-item" href="#">AM-2022-01</a>
                                        <a class="dropdown-item" href="#">SD-2022-01</a>
                                    </div>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        </svg> STUDENT <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        </svg> CHANGE PASSWORD <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>    
        </div>
        <hr>

        <div class="container-fluid mt-3 ml-5 mb-3">
            <div class="row">
                <div class="col-xs-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="non">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/img6.jpg" class="d-block w-100" alt="Image 1">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img7.jpg" alt="Image 2">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/img8.jpg"  alt="Image 3">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid mt-3">
            <div class="card-deck ml-2">
                <div class="card">
                    <img src="images/beauty.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center><p>Beautician</p>
                            <a class="btn btn-primary" href="dashboard.php" role="button">Register</a></center>
                    </div>
                </div>
                <div class="card">
                    <img src="images/hair.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center><p>Hairdresser</p>
                            <a class="btn btn-primary" href="dashboard.php" role="button">Register</a></center>
                    </div>
                </div>
                <div class="card">
                    <img src="images/am.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center><p>Automobile Mechanic</p>
                            <a class="btn btn-primary" href="dashboard.php" role="button">Register</a></center>
                    </div>
                </div>
                <div class="card">
                    <img src="images/sd.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center><p>Software Developer</p>
                            <a class="btn btn-primary" href="dashboard.php" role="button">Register</a></center>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <footer class="ft">
            <div class="row">
                <div class="col-sm-8">
                    <font class="copy-text">
                    © 2022 Online Library Management System
                    </font>
                </div>
            </div>
        </footer>
        <?php
        // put your code here
        ?>
        <script src="vendor/bootstrap-4.6.2-dist/jquery.slim.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>
