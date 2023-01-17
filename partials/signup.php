<?php

$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials\dbconnect.php';
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
            $sql = "INSERT INTO `userdata` ( `username`,`applicationno`, `password`, `cpassword`) VALUES ('$username', '$applicationno', '$password','$cpassword')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <?php include 'C:\xampp\htdocs\project1\partials\header.php'; ?>
    <!-- <?php include '.\partials\footer.php'; ?> -->
    <div class="container border border-dark rounded-3 border-3" style="width: 18rem;">
        <div class="row">
            <div class="col mx-auto">
                <form action="home.php" method="post">
                    <h3 class="text-center">SIGN UP FORM</h3>
                    <hr>
                    <div class="mb-9 mx-auto">
                        <label for="username" class="form-label">User Name :</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="applicationno" class="form-label">Application No. :</label>
                        <input type="number" name="applicationno" class="form-control" id="applicationno" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="cpassword" class="form-label">Confirm Password :</label>
                        <input type="password" class="form-control" name="cpassword" id="cpassword">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary mx-auto">Submit</button>
                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>