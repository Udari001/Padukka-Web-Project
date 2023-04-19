<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap-4.6.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="validation.js" type="text/javascript"></script>
        <style>
            #btn1{
                margin-top: 65px;
                height: 35px;
                width: 125px;
            }
            #form{
                background: url('images/bg.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
            #box{
                border: 1px solid black;
                background-color: black;

                color: white;

                width: 700px;
            }
            h2{
                color: blue;
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

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7">
                    <form action="action.php" method="post" name="f1" onsubmit="validate()">

                        <h2>REGISTRATION FORM...</h2>
                        <div class="container mt-3 ml-2" id="box">
                            <div class="form-group was-validated mt-3">
                                <label for="formGroupExampleInput">Student ID :</label>
                                <input type="text" class="form-control" name="nic" placeholder="Enter Student ID" oninput="nicvalidation()" required="">
                                <label name="nicError" id="nicError">hint : SID-xxxx(4 numbers)</label> 
                            </div>
                            <div class="form-group was-validated">
                                <label for="formGroupExampleInput">Student Name :</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" oninput="namevalidation()" required="">
                                <label name="nameError" id="nameError"></label> 
                            </div>
                            <div class="form-group was-validated">
                                <label for="formGroupExampleInput">Student Address :</label>
                                <input type="text" class="form-control" name="address" placeholder="Enter Address" oninput="addressvalidation()" required="">
                                <label name="addressError" id="addressError"></label> 
                            </div>
                            <input type="submit" value="Add" name="add" class="btn btn-primary mb-3">
                            <a class="btn btn-primary mb-3 ml-3" href="search.php" role="button">Search</a>
                            <a class="btn btn-primary mb-3 ml-3" href="update.php" role="button">Update</a>
                            <a class="btn btn-primary mb-3 ml-3" href="delete.php" role="button">Delete</a>
                        </div>

                    </form>
                </div>
                <div class="col-xl-5 mt-3">
                    <img src="images/bg.jpg" height="400px" width="500px">
                    
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/bootstrap-4.6.2-dist/jquery.slim.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>

</html>

