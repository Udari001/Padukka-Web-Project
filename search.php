<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap-4.6.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="nicvalidation.js" type="text/javascript"></script>
        <style>
            
        </style>

    </head>

    <body>
        <div id="form">
            <div class="container-fluid mt-1">
                <div class="row">
                    <div class="col-xl-12">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        </svg> HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="dashboard.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        </svg> INSERT <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="update.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        </svg> UPDATE <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="delete.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        </svg> DELETE <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>    
        </div>

        <div class="container mt-5">
            <form action="#" method="post" name="f1" onsubmit="validate()">
                <fieldset>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Enter Student ID</b></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your Student ID Here" name="nic" oninput="nicvalidation()">
                        </div>
                        <div class="col-sm-10">
                            <label name="nicError" id="nicError"></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="search" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                    <?php
                    echo "<table class='table table-bordered table-dark'>";
                    require_once './config.php';
                    $database = mysqli_select_db($connection, 'student_registration_web');

                    $nic = "";
                    $name = "";
                    $ad = "";

                    if (isset($_POST['search'])) {

                        $nic = $_POST['nic'];
                    }

                    $query = "SELECT * FROM student WHERE nic='$nic'";
                    $query_run = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_array($query_run)) {

                        $nic = $row['nic'];
                        $name = $row['name'];
                        $ad = $row['address'];
                    }
                    if (is_null($nic)) {

                        echo "<script>alert('enter valid data')</script>";
                    } else {
                        echo "<tr><th> Student ID </th><td>" . $nic . "</td></tr>";
                        echo "<tr><th> Name </th><td>" . $name . "</td></tr>";
                        echo "<tr><th> Address </th><td>" . $ad . "</td></tr>";
                    }
                    echo "</table>";
                    ?>

                </fieldset>
            </form>
        </div>
        <script src="vendor/bootstrap-4.6.2-dist/jquery.slim.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>