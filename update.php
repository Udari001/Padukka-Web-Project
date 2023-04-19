<html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                                                    <a class="nav-link" href="search.php">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                                        </svg> SEARCH <span class="sr-only">(current)</span></a>
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

                            <div class="container">
                                <form action="#" method="post" name="f1" onsubmit="validate()">
                                    <fieldset>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Enter Student ID</b></label>
                                            <br>
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
                                    </fieldset>

                                    <?php
                                    require_once './config.php';
                                    $database = mysqli_select_db($connection, 'student_registration_web');
                                    $nic = "";

                                    if (isset($_POST['search'])) {
                                        $nic = $_POST['nic'];
                                    }
                                    $sql = "SELECT * FROM student WHERE nic='$nic'";
                                    $result = $connection->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {

                                            $nic = $row['nic'];
                                            $name = $row['name'];
                                            $ad = $row['address'];


                                            echo "<forme>";
                                            echo "<label> Student ID </label><input name='nic_n' class='form-control' value='$nic'>";
                                            echo "<label> Name </label><input name='name_n' class='form-control' value='$name'>";
                                            echo "<label> Address </label><input name='address_n' class='form-control' value='$ad'>";
                                            echo '<br>';
                                            echo "<div class='form-group row'>
                    <div class='col-sm-10'>
                        <button type='submit' name='update' class='btn btn-primary'>Update</button>
                    </div>
                </div>";
                                            echo "</forme>";
                                        }
                                    } else {
                                        
                                    }
                                    //  }$connection->close();
                                    ?>

                                    <?php
                                    /*  require_once '../include/config.php';
                                      $database = mysqli_select_db($connection, 'training_school_web'); */


                                    $nic = filter_input(INPUT_POST, "nic_n");
                                    $name = filter_input(INPUT_POST, "name_n");
                                    $ad = filter_input(INPUT_POST, "address_n");

                                    $sql1 = "UPDATE student SET nic='$nic', name='$name', address='$ad' WHERE nic ='$nic'";

                                    if (isset($_POST['update'])) {
                                        if ($connection->query($sql1) === TRUE) {
                                            echo "Record updated successfully.";
                                        } else {
                                            echo "Error updating record: " . $connection->error;
                                        }
                                    }



                                    // $connection->close();
                                    ?>
                                    <?php
                                    if (isset($_POST['delete'])) {
                                        
                                    }
                                    ?>
                                    <?php
                                    if (isset($_POST['delete'])) {
                                        $sql = "DELETE FROM student WHERE nic='$nic'";

                                        if (mysqli_query($connection, $sql)) {
                                            echo "Record deleted successfully";
                                        } else {
                                            echo "Error deleting record: " . mysqli_error($connection);
                                        }

                                        mysqli_close($connection);
                                    }
                                    ?>

                                </form>
                            </div>
                            <script src="vendor/bootstrap-4.6.2-dist/jquery.slim.min.js" type="text/javascript"></script>
                            <script src="vendor/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
                    </body>
                    </html>