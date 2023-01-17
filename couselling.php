<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    // header("location: login.php");
    $loggedin = false;
} else {
    $loggedin = true;
    $name = $_SESSION['username'];
    $app = $_SESSION['applicationno'];
}

?>







<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <!-- <script src="pawan.js"></script> -->
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gotu&family=Ubuntu:wght@300&display=swap');

        *{
             font-family: 'Ubuntu', sans-serif;
        }
        .signup {
            background: rgb(116, 162, 227);
            background: linear-gradient(0deg, rgba(56, 162, 227, 1) 0%, rgba(17, 14, 65, 1) 100%);

        }

        body {
            background: wheat;
        }

        .heading {
            font-weight: bold;
            color: blue;
            text-transform: uppercase;
        }
    </style>
</head>


<body>
    <?php
    include 'header.php';

    $a = 0;
    // $con = mysqli_connect("localhost", "root", "", "college");
    include 'dbconnect.php';
    if ($conn) {
        if (isset($_POST['submit'])) {
            $name = $_POST['username'];
            $applicationno = $_POST['applicationno'];
            $rank = $_POST['rank'];
            $choice1 = $_POST['choice1'];
            $choice2 = $_POST['choice2'];
            $choice3 = $_POST['choice3'];
            $choice4 = $_POST['choice4'];

            $bull = "INSERT INTO `collegedata` (`name`, `applicationno`, `rank` ,`choice1` , `choice2`, `choice3` , `choice4`) VALUES ('$name', '$applicationno', '$rank' ,'$choice1','$choice2','$choice3','$choice4');";

            if ($conn->query($bull) == true) {
                $a = 1;

                $query = "SELECT * FROM `collegedata` where applicationno='$applicationno'";
                $query_run = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($query_run)) {
                    $name = $row['name'];
                    $applicationno = $row['applicationno'];
                    $rank = $row['rank'];
                    $choice1 = $row['choice1'];
                    $choice2 = $row['choice1'];
                    $choice3 = $row['choice3'];
                    $choice4 = $row['choice4'];
                }
            } else {
                // echo "error : ";
                echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                })
                </script>";
                // echo $bull;
            }
        }
    } else {
        echo "db not connected";
    }
    ?>

    <div class="row justify-content-around pt-5">

        <div class="col-6 animate__animated animate__fadeInDown">
            <div class="p-1 m-1">
                <h2 class="heading">Choose Your College Preferences </h2>

            </div>
            <div class="card  rounded-3 border-1 shadow">
                <h4 class="card-header text-center" style="text-transform: uppercase;">
                    <?php
                    if ($a == 1) {
                        echo $name;
                    } else {
                        echo "Please Fill the form";
                    }
                    ?>
                </h4>
                <div class="card-body text-center">
                    <h5 class="card-title">
                        <?php
                        if ($a == 1) {
                            echo "Your Application No : " . " " . $applicationno;
                        } else {
                        }

                        ?>
                    </h5>
                    <h6 class="card-title">
                        <?php
                        if ($a == 1) {
                            echo "Your CRL Rank : " . " " . $rank;
                        } else {
                        }

                        ?>
                    </h6>
                    <p class="card-text">
                        <?php
                        if ($a == 1) {
                            echo "<div class='list-group'>
                                <a href='#' class='list-group-item list-group-item-action mb-3 p-4 rounded-3 border-1 shadow' aria-current='true'>
                                Your 1st Choice : $choice1
                                </a>
                                <a href='#' class='list-group-item list-group-item-action mb-3 p-4 rounded-3 border-1 shadow '>Your 2nd Choice : $choice2</a>
                                <a href='#' class='list-group-item list-group-item-action mb-3 p-4 rounded-3 border-1 shadow '>Your 3rd Choice : $choice3</a>
                                <a href='#' class='list-group-item list-group-item-action mb-3 p-4  rounded-3 border-1 shadow'>Your 4th Choice : $choice4</a>
                                </div>" ?>
                        <?php
                        } else {
                        ?>
                        <?php
                        }

                        ?>

                    </p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>

            <?php
            if ($a == 1) {
                echo "<div class='text-center m-3'>
                <a href='collegedetails.php?id=$applicationno'><button type='button' class='btn btn-warning shadow btn-lg ' style='width:23rem; border-radius:3rem;'>Proceed</button></a>
            </div>";
            }
            ?>
        </div>


        <div class="col-4 mb-4">
            <div class="p-3    text-light signup rounded-3 border-1 shadow">
                <form method="post">
                    <h3 class="text-center " style="text-transform: uppercase;">Choose Your Courses</h3>
                    <hr>
                    <div class="mb-3 mx-auto">
                        <label for="username" class="form-label text-light">Your Name :</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="applicationno" class="form-label text-light">Application No. :</label>
                        <input type="number" name="applicationno" class="form-control" id="applicationno" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="rank" class="form-label text-light">CRL Rank :</label>
                        <input type="number" class="form-control" name="rank" id="rank">
                    </div>
                    <hr><br>
                    <div class="mb-3">
                        <h3 class="text-light">Prefrences</h3>
                        <label for="country" class="form-label">Choice 1 : </label>

                        <select class="form-select" aria-label="Default select example" name="choice1" id="country">
                            <option selected>Select Your Prefrences</option>
                            <option value="NSUT-Computer Science and Enginnering">NSUT-Computer Science and Enginnering</option>
                            <option value="NSUT-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">NSUT-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="NSUT-Information Technology">NSUT-Information Technology</option>
                            </option>
                            <option value="NSUT- Electronics and Communication Engineering">NSUT- Electronics and Communication Engineering</option>
                            <option value="NSUT-Mathematics and Computing">NSUT-Mathematics and Computing</option>
                            <option value="NSUT-Electrical Engineering">NSUT-Electrical Engineering</option>
                            <option value="NSUT-Instrumentation and Control Engineering">NSUT-Instrumentation and Control Engineering</option>

                            <option value="NSUT-Manufacturing Process and Automation Engineering">NSUT-Manufacturing Process and Automation Engineering</option>
                            <option value="NSUT-Mechanical Engineering">NSUT-Mechanical Engineering</option>
                            <option value="NSUT-Bio-Technology">NSUT-Bio-Technology</option>


                            <!-- dtu-->


                            <option value="DTU-Computer Science and Enginnering">DTU-Computer Science and Enginnering</option>
                            <option value="DTU-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">DTU-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="DTU-Information Technology">DTU-Information Technology</option>
                            </option>
                            <option value="DTU- Electronics and Communication Engineering">DTU- Electronics and Communication Engineering</option>
                            <option value="DTU-Mathematics and Computing">DTU-Mathematics and Computing</option>
                            <option value="DTU-Electrical Engineering">DTU-Electrical Engineering</option>
                            <option value="DTU-Instrumentation and Control Engineering">DTU-Instrumentation and Control Engineering</option>

                            <option value="DTU-Manufacturing Process and Automation Engineering">DTU-Manufacturing Process and Automation Engineering</option>
                            <option value="DTU-Mechanical Engineering">DTU-Mechanical Engineering</option>
                            <option value="DTU-Bio-Technology">DTU-Bio-Technology</option>

                            <!-- igdtuw -->

                            <option value="IGDTUW-Computer Science and Enginnering">IGDTUW-Computer Science and Enginnering</option>
                            <option value="IGDTUW-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">IGDTUW-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="IGDTUW-Information Technology">IGDTUW-Information Technology</option>
                            </option>
                            <option value="IGDTUW- Electronics and Communication Engineering">IGDTUW- Electronics and Communication Engineering</option>
                            <option value="IGDTUW-Mathematics and Computing">IGDTUW-Mathematics and Computing</option>
                            <option value="IGDTUW-Electrical Engineering">IGDTUW-Electrical Engineering</option>
                            <option value="IGDTUW-Instrumentation and Control Engineering">IGDTUW-Instrumentation and Control Engineering</option>

                            <option value="IGDTUW-Manufacturing Process and Automation Engineering">IGDTUW-Manufacturing Process and Automation Engineering</option>
                            <option value="IGDTUW-Mechanical Engineering">IGDTUW-Mechanical Engineering</option>
                            <option value="IGDTUW-Bio-Technology">IGDTUW-Bio-Technology</option>

                            <!-- iiit -->

                            <option value="IIIT-Computer Science and Enginnering">IIIT-Computer Science and Enginnering</option>
                            <option value="IIIT-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">IIIT-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="IIIT-Information Technology">IIIT-Information Technology</option>
                            </option>
                            <option value="IIIT- Electronics and Communication Engineering">IIIT- Electronics and Communication Engineering</option>
                            <option value="IIIT-Mathematics and Computing">IIIT-Mathematics and Computing</option>
                            <option value="IIIT-Electrical Engineering">IIIT-Electrical Engineering</option>
                            <option value="IIIT-Instrumentation and Control Engineering">IIIT-Instrumentation and Control Engineering</option>

                            <option value="IIIT-Manufacturing Process and Automation Engineering">IIIT-Manufacturing Process and Automation Engineering</option>
                            <option value="IIIT-Mechanical Engineering">IIIT-Mechanical Engineering</option>
                            <option value="IIIT-Bio-Technology">IIIT-Bio-Technology</option>
                        </select>


                        <!-- 2nd Choice -->



                        <br>
                        <label for="countryy" class="form-label">Choice 2 : </label>
                        <select class="form-select" aria-label="Default select example" name="choice2" id="country">
                            <option selected>Select Your Prefrences</option>
                            <option value="NSUT-Computer Science and Enginnering">NSUT-Computer Science and Enginnering</option>
                            <option value="NSUT-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">NSUT-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="NSUT-Information Technology">NSUT-Information Technology</option>
                            </option>
                            <option value="NSUT- Electronics and Communication Engineering">NSUT- Electronics and Communication Engineering</option>
                            <option value="NSUT-Mathematics and Computing">NSUT-Mathematics and Computing</option>
                            <option value="NSUT-Electrical Engineering">NSUT-Electrical Engineering</option>
                            <option value="NSUT-Instrumentation and Control Engineering">NSUT-Instrumentation and Control Engineering</option>

                            <option value="NSUT-Manufacturing Process and Automation Engineering">NSUT-Manufacturing Process and Automation Engineering</option>
                            <option value="NSUT-Mechanical Engineering">NSUT-Mechanical Engineering</option>
                            <option value="NSUT-Bio-Technology">NSUT-Bio-Technology</option>


                            <!-- dtu -->


                            <option value="DTU-Computer Science and Enginnering">DTU-Computer Science and Enginnering</option>
                            <option value="DTU-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">DTU-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="DTU-Information Technology">DTU-Information Technology</option>
                            </option>
                            <option value="DTU- Electronics and Communication Engineering">DTU- Electronics and Communication Engineering</option>
                            <option value="DTU-Mathematics and Computing">DTU-Mathematics and Computing</option>
                            <option value="DTU-Electrical Engineering">DTU-Electrical Engineering</option>
                            <option value="DTU-Instrumentation and Control Engineering">DTU-Instrumentation and Control Engineering</option>

                            <option value="DTU-Manufacturing Process and Automation Engineering">DTU-Manufacturing Process and Automation Engineering</option>
                            <option value="DTU-Mechanical Engineering">DTU-Mechanical Engineering</option>
                            <option value="DTU-Bio-Technology">DTU-Bio-Technology</option>

                            <!-- igdtuw -->

                            <option value="IGDTUW-Computer Science and Enginnering">IGDTUW-Computer Science and Enginnering</option>
                            <option value="IGDTUW-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">IGDTUW-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="IGDTUW-Information Technology">IGDTUW-Information Technology</option>
                            </option>
                            <option value="IGDTUW- Electronics and Communication Engineering">IGDTUW- Electronics and Communication Engineering</option>
                            <option value="IGDTUW-Mathematics and Computing">IGDTUW-Mathematics and Computing</option>
                            <option value="IGDTUW-Electrical Engineering">IGDTUW-Electrical Engineering</option>
                            <option value="IGDTUW-Instrumentation and Control Engineering">IGDTUW-Instrumentation and Control Engineering</option>

                            <option value="IGDTUW-Manufacturing Process and Automation Engineering">IGDTUW-Manufacturing Process and Automation Engineering</option>
                            <option value="IGDTUW-Mechanical Engineering">IGDTUW-Mechanical Engineering</option>
                            <option value="IGDTUW-Bio-Technology">IGDTUW-Bio-Technology</option>

                            <!-- iiit -->

                            <option value="IIIT-Computer Science and Enginnering">IIIT-Computer Science and Enginnering</option>
                            <option value="IIIT-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">IIIT-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="IIIT-Information Technology">IIIT-Information Technology</option>
                            </option>
                            <option value="IIIT- Electronics and Communication Engineering">IIIT- Electronics and Communication Engineering</option>
                            <option value="IIIT-Mathematics and Computing">IIIT-Mathematics and Computing</option>
                            <option value="IIIT-Electrical Engineering">IIIT-Electrical Engineering</option>
                            <option value="IIIT-Instrumentation and Control Engineering">IIIT-Instrumentation and Control Engineering</option>

                            <option value="IIIT-Manufacturing Process and Automation Engineering">IIIT-Manufacturing Process and Automation Engineering</option>
                            <option value="IIIT-Mechanical Engineering">IIIT-Mechanical Engineering</option>
                            <option value="IIIT-Bio-Technology">IIIT-Bio-Technology</option>
                        </select>


                        <br>
                        <label for="choice3" class="form-label">Choice 3 : </label>
                        <select class="form-select" aria-label="Default select example" name="choice3" id="choice3">
                            <option selected>Select Your Prefrences</option>
                            <option value="NSUT-Computer Science and Enginnering">NSUT-Computer Science and Enginnering</option>
                            <option value="NSUT-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">NSUT-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="NSUT-Information Technology">NSUT-Information Technology</option>
                            </option>
                            <option value="NSUT- Electronics and Communication Engineering">NSUT- Electronics and Communication Engineering</option>
                            <option value="NSUT-Mathematics and Computing">NSUT-Mathematics and Computing</option>
                            <option value="NSUT-Electrical Engineering">NSUT-Electrical Engineering</option>
                            <option value="NSUT-Instrumentation and Control Engineering">NSUT-Instrumentation and Control Engineering</option>

                            <option value="NSUT-Manufacturing Process and Automation Engineering">NSUT-Manufacturing Process and Automation Engineering</option>
                            <option value="NSUT-Mechanical Engineering">NSUT-Mechanical Engineering</option>
                            <option value="NSUT-Bio-Technology">NSUT-Bio-Technology</option>


                            <!-- dtu -->


                            <option value="DTU-Computer Science and Enginnering">DTU-Computer Science and Enginnering</option>
                            <option value="DTU-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">DTU-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="DTU-Information Technology">DTU-Information Technology</option>
                            </option>
                            <option value="DTU- Electronics and Communication Engineering">DTU- Electronics and Communication Engineering</option>
                            <option value="DTU-Mathematics and Computing">DTU-Mathematics and Computing</option>
                            <option value="DTU-Electrical Engineering">DTU-Electrical Engineering</option>
                            <option value="DTU-Instrumentation and Control Engineering">DTU-Instrumentation and Control Engineering</option>

                            <option value="DTU-Manufacturing Process and Automation Engineering">DTU-Manufacturing Process and Automation Engineering</option>
                            <option value="DTU-Mechanical Engineering">DTU-Mechanical Engineering</option>
                            <option value="DTU-Bio-Technology">DTU-Bio-Technology</option>

                            <!-- igdtuw -->

                            <option value="IGDTUW-Computer Science and Enginnering">IGDTUW-Computer Science and Enginnering</option>
                            <option value="IGDTUW-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">IGDTUW-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="IGDTUW-Information Technology">IGDTUW-Information Technology</option>
                            </option>
                            <option value="IGDTUW- Electronics and Communication Engineering">IGDTUW- Electronics and Communication Engineering</option>
                            <option value="IGDTUW-Mathematics and Computing">IGDTUW-Mathematics and Computing</option>
                            <option value="IGDTUW-Electrical Engineering">IGDTUW-Electrical Engineering</option>
                            <option value="IGDTUW-Instrumentation and Control Engineering">IGDTUW-Instrumentation and Control Engineering</option>

                            <option value="IGDTUW-Manufacturing Process and Automation Engineering">IGDTUW-Manufacturing Process and Automation Engineering</option>
                            <option value="IGDTUW-Mechanical Engineering">IGDTUW-Mechanical Engineering</option>
                            <option value="IGDTUW-Bio-Technology">IGDTUW-Bio-Technology</option>

                            <!-- iiit -->

                            <option value="IIIT-Computer Science and Enginnering">IIIT-Computer Science and Enginnering</option>
                            <option value="IIIT-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">IIIT-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="IIIT-Information Technology">IIIT-Information Technology</option>
                            </option>
                            <option value="IIIT- Electronics and Communication Engineering">IIIT- Electronics and Communication Engineering</option>
                            <option value="IIIT-Mathematics and Computing">IIIT-Mathematics and Computing</option>
                            <option value="IIIT-Electrical Engineering">IIIT-Electrical Engineering</option>
                            <option value="IIIT-Instrumentation and Control Engineering">IIIT-Instrumentation and Control Engineering</option>

                            <option value="IIIT-Manufacturing Process and Automation Engineering">IIIT-Manufacturing Process and Automation Engineering</option>
                            <option value="IIIT-Mechanical Engineering">IIIT-Mechanical Engineering</option>
                            <option value="IIIT-Bio-Technology">IIIT-Bio-Technology</option>
                        </select>

                        <br>

                        <label for="choice4" class="form-label">Choice 4 : </label>
                        <select class="form-select" aria-label="Default select example" name="choice4" id="choice4">
                            <option selected>Select Your Prefrences</option>
                            <option value="NSUT-Computer Science and Enginnering">NSUT-Computer Science and Enginnering</option>
                            <option value="NSUT-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">NSUT-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="NSUT-Information Technology">NSUT-Information Technology</option>
                            </option>
                            <option value="NSUT- Electronics and Communication Engineering">NSUT- Electronics and Communication Engineering</option>
                            <option value="NSUT-Mathematics and Computing">NSUT-Mathematics and Computing</option>
                            <option value="NSUT-Electrical Engineering">NSUT-Electrical Engineering</option>
                            <option value="NSUT-Instrumentation and Control Engineering">NSUT-Instrumentation and Control Engineering</option>

                            <option value="NSUT-Manufacturing Process and Automation Engineering">NSUT-Manufacturing Process and Automation Engineering</option>
                            <option value="NSUT-Mechanical Engineering">NSUT-Mechanical Engineering</option>
                            <option value="NSUT-Bio-Technology">NSUT-Bio-Technology</option>


                            <!-- dtu -->


                            <option value="DTU-Computer Science and Enginnering">DTU-Computer Science and Enginnering</option>
                            <option value="DTU-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">DTU-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="DTU-Information Technology">DTU-Information Technology</option>
                            </option>
                            <option value="DTU- Electronics and Communication Engineering">DTU- Electronics and Communication Engineering</option>
                            <option value="DTU-Mathematics and Computing">DTU-Mathematics and Computing</option>
                            <option value="DTU-Electrical Engineering">DTU-Electrical Engineering</option>
                            <option value="DTU-Instrumentation and Control Engineering">DTU-Instrumentation and Control Engineering</option>

                            <option value="DTU-Manufacturing Process and Automation Engineering">DTU-Manufacturing Process and Automation Engineering</option>
                            <option value="DTU-Mechanical Engineering">DTU-Mechanical Engineering</option>
                            <option value="DTU-Bio-Technology">DTU-Bio-Technology</option>

                            <!-- igdtuw -->

                            <option value="IGDTUW-Computer Science and Enginnering">IGDTUW-Computer Science and Enginnering</option>
                            <option value="IGDTUW-Computer Science and Engineering (with specialisation in Artificial
                                    lntelligence)">IGDTUW-Computer Science and Engineering (with specialisation in Artificial
                                lntelligence)</option>
                            <option value="IGDTUW-Information Technology">IGDTUW-Information Technology</option>
                            </option>
                            <option value="IGDTUW- Electronics and Communication Engineering">IGDTUW- Electronics and Communication Engineering</option>
                            <option value="IGDTUW-Mathematics and Computing">IGDTUW-Mathematics and Computing</option>
                            <option value="IGDTUW-Electrical Engineering">IGDTUW-Electrical Engineering</option>
                            <option value="IGDTUW-Instrumentation and Control Engineering">IGDTUW-Instrumentation and Control Engineering</option>

                            <option value="IGDTUW-Manufacturing Process and Automation Engineering">IGDTUW-Manufacturing Process and Automation Engineering</option>
                            <option value="IGDTUW-Mechanical Engineering">IGDTUW-Mechanical Engineering</option>
                            <option value="IGDTUW-Bio-Technology">IGDTUW-Bio-Technology</option>
                        </select>









                    </div>

                    <button type="submit" name="submit" class="btn btn-success mx-auto d-flex justify-content-center my-4">Submit</button>
                </form>

            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>