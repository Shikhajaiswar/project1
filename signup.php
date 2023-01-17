<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';
    $username = $_POST["username"];
    $applicationno = $_POST["applicationno"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `userdata` WHERE applicationno = '$applicationno'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        // $exists = true;
        $showError = "Application number Already Exists";
    } else {
        // $exists = false; 
        if (($password == $cpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `userdata` ( `username`,`applicationno`, `password`, `cpassword`) VALUES ('$username', '$applicationno', '$hash','$cpassword')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
            header("location: home.php");
        } else {
            $showError = "Passwords do not match";
        }
    }
}


?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        .signup {
            background: rgb(156, 162, 227);
            background: linear-gradient(0deg, rgba(156, 162, 227, 1) 0%, rgba(37, 14, 65, 1) 100%);

        }

        @import url('https://fonts.googleapis.com/css2?family=Gotu&display=swap');
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <?php include 'header.php'; ?>


    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>



    <div class="container my-5" style="width: 68rem;">
        <div class="row">

            <div class="col-5 my-5">
                <h1 style="font-size:60px; color: #322a87; font-weight: bolder;">पाठशाला </h1>
                <p style="font-size:larger; color: #250e41;">We ease your biggest doubts with personalized Video Counselling from our
                    Curated Experts and Answers from the student community</p>
            </div>
            <div class="col-1">

            </div>
            <div class=" signup col-5 mx-auto  rounded-3 border-1 shadow">
                <form method="post">
                    <h3 class="text-center my-3 text-light">Register Yourself</h3>
                    <hr>
                    <div class="mb-9 mx-auto">
                        <label for="username" class="form-label text-light">User Name :</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="applicationno" class="form-label text-light">Application No. :</label>
                        <input type="number" name="applicationno" class="form-control" id="applicationno" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-light">Password :</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="cpassword" class="form-label text-light">Confirm Password :</label>
                        <input type="password" class="form-control" name="cpassword" id="cpassword">
                    </div>

                    <button type="submit" name="submit" class="btn btn-success mx-auto d-flex justify-content-center my-4">Sign Up</button>
                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>