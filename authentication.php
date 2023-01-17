<?php
$showAlert = false;
$showError = false;
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    // header("location: login.php");
    $loggedin = false;
    // exit;
} else {
    $loggedin = true;
}

?>

<?php

// Initialize the session
session_start();

// Store the submitted data sent
// via POST method, stored 

// Temporarily in $_POST structure.
$_SESSION['fname'] = $_POST['fname'];

$_SESSION['lname'] = $_POST['lname'];
$_SESSION['dob'] = $_POST['dob'];

$_SESSION['gender']
    = $_POST['gender'];
$_SESSION['country']
    = $_POST['country'];
$_SESSION['phone']
    = $_POST['phone'];
$_SESSION['email']
    = $_POST['email'];
$_SESSION['a1']
    = $_POST['a1'];

$_SESSION['city']
    = $_POST['city'];
$_SESSION['state']
    = $_POST['state'];
$_SESSION['zip']
    = $_POST['zip'];

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        .reg {
            background: linear-gradient(to right, #77a3e4, #aa7df3);

        }
    </style>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
    <!-- <h1 class=" p-3 text-center">Registraion form</h1> -->
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



    <div class="container shadow rounded-3 border-3 my-5 text-light">
        <div class="row">

            <div class="col reg mx-auto rounded-3">
                <div class="m-3 p-3">
                    <h1>Authentication Form</h1>
                    <form method="post" action="submit.php">
                        <fieldset>
                            <legend>
                                To be uploaded during the submission of online application form: Scanned images in
                                JPG/JPEG format only
                            </legend>
                            <fieldset>
                                <div class="mb-3 p-2">
                                    <label for="inputGroupFile02" class="form-label ms-2">Candidate’s Passport Size Photograph (File
                                        size must be greater than 10 kb and less than 100
                                        kb.)</label>


                                    <div class="input-group mb-3">
                                        <!-- <label for="inputGroupFile02">Upload Photo</label> -->
                                        <!-- <label for="12name" class="form-label ms-2">School Name</label> -->

                                        <input type="file" class="form-control" id="inputGroupFile02" name="photo">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                </div>
                                <div class="mb-3 p-2">
                                    <label for="inputGroupFile02" class="form-label ms-2">Candidate’s Signature in running hand
                                        Dimension should be 3.5 cm (width) × 1.5 cm (height) only. (File size must be greater than 4
                                        kb
                                        and less than 30 kb.)
                                    </label>


                                    <div class="input-group mb-3">
                                        <!-- <label for="inputGroupFile02">Upload Photo</label> -->
                                        <!-- <label for="12name" class="form-label ms-2">School Name</label> -->

                                        <input type="file" class="form-control" id="inputGroupFile02" name="sign">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                </div>
                                <div class="mb-3 p-2">
                                    <div class="p-2" style="width: 32rem;">
                                        <label for="exampleInputEmail1" class="form-label">Aadhaar Number, Aadhaar Enrolment ID,
                                            Aadhaar Registration number, Passport Number, Ration Card Number, Bank Account Number,
                                            any other valid Government ID Number</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" name="aadhaarNo" aria-describedby="emailHelp">

                                    </div>


                                </div>
                                <div class="mb-3 p-2">
                                    <label for="inputGroupFile02" class="form-label ms-2">Uplad Self-attested Copy of Aadhaar Card
                                        or any othe Government Id</label>


                                    <div class="input-group mb-3">
                                        <!-- <label for="inputGroupFile02">Upload Photo</label> -->
                                        <!-- <label for="12name" class="form-label ms-2">School Name</label> -->

                                        <input type="file" class="form-control" id="inputGroupFile02" name="aadhaar">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I hereby declare that all the
                                        particulars stated
                                        in this application form are true to the best of my knowledge and belief. I have read
                                        and
                                        understood the JEE procedures for both JEE (Main) - 2019 and JEE (Advanced) – 2019. I
                                        shall
                                        abide by the terms and
                                        conditions thereon. If any data is found to be false, I understand that I will be
                                        disqualified.</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I hereby declare that I have verified
                                        the data
                                        submitted by my ward. If any data is found to be false, I understand that my ward will
                                        be
                                        disqualified.</label>
                                </div>
                                <div class="row ms-2 justify-content-between">
                                    <div style="width: 15rem" class="p-2 col">
                                        <!-- <button type="button" class=" btn btn-primary  ps-3 pe-3">Reset</button> -->
                                        <a href="registration.php">
                                            <!-- <input class="btn btn-primary ps-3 pe-3" type="reset" value="Back" /> -->
                                            <button type="button" class="btn btn-primary  ps-3 pe-3">Back</button>
                                        </a>
                                    </div>
                                    <div style="width: 15rem" class="col-md-4 offset-md-4 p-2 col">

                                        <button type="submit" class="btn btn-primary  ps-3 pe-3" name="submit">Submit</button>


                                    </div>
                                </div>


                            </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>