<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    // header("location: login.php");
    $loggedin = false;
} else {
    $loggedin = true;
    $name = $_SESSION['username'];
    $app = $_SESSION['applicationno'];
    echo $app;
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .card:hover {
            color: whitesmoke;
            background: #3d4045;
        }

        .card {
            background-color: wheat;
        }
    </style>
</head>

<body>
    <?php
    include 'dbconnect.php';
    //$conn = mysqli_connect("localhost:3307", "root", "", "portforlio");
    include 'header.php';
    $a = 0;
    $id = $_GET['id'];
    $query = "SELECT * FROM `a` where applicationno='$id'";
    $query_run = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($query_run)) {
        $a = 1;
        $name = $row['name'];
        $applicationno = $row['applicationno'];
        $rank = $row['rank'];
        $choice1 = $row['choice1'];
        $choice2 = $row['choice2'];
        $choice3 = $row['choice3'];
        $choice4 = $row['choice4'];
    }

    ?>


    <div class="row justify-content-evenly">
        <div class="col-4 p-3">
            <div class=" animate__animated animate__backInLeft mt-3">
                <?php echo "<h3 class='text-center'>Your Rank : $rank </h3>"; ?><br>
                <h4 class="text-center ">Your Choices</h4>
                <p class="card-text">
                    <?php
                    if ($a == 1) {
                        echo "<div class='list-group  '>
                                <a href='#' class='list-group-item bg-danger-subtle list-group-item-action mb-3 p-4 rounded-3 border-1 shadow' aria-current='true'>
                                Your 1st Choice : $choice1
                                </a>
                                <a href='#' class='bg-danger-subtle list-group-item list-group-item-action mb-3 p-4 rounded-3 border-1 shadow '>Your 2nd Choice : $choice2</a>
                                <a href='#' class='list-group-item bg-danger-subtle list-group-item-action mb-3 p-4 rounded-3 border-1 shadow '>Your 3rd Choice : $choice3</a>
                                <a href='#' class='list-group-item bg-danger-subtle list-group-item-action mb-3 p-4  rounded-3 border-1 shadow'>Your 4th Choice : $choice4</a>
                                </div>" ?>
                    <?php
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="col-4">
            <div class=" animate__animated animate__backInRight mt-5 ">
                <h3 class="text-cenetr mb-3" align="center">Your Cources : </h3>

                <div class="abc">
                    <?php
                    $a = 0;
                    $q = 0;
                    $con = mysqli_connect("localhost:3307", "root", "", "portforlio");
                    if ($con) {
                        $a = 1;
                        $b = '';

                        // for choice1

                        if ($choice1[0] == 'N') {
                            $b = ltrim($choice1, 'NSUT-');
                            $query = "SELECT * FROM `nsut`";

                            $query_run = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($query_run)) {
                                $cse = $row['Computer Science and Enginnering'];
                                $csai = $row['Computer Science and Engineering (Artificial lntelligence)'];
                                $it = $row['Information Technology'];
                                $ece = $row['Electronics and Communication Engineering'];
                                $mac = $row['Mathematics and Computing'];
                                $ee = $row['Electrical Engineering'];
                                $ice = $row['Instrumentation and Control Engineering'];
                                $mpae = $row['Manufacturing Process and Automation Engineering'];
                                $me = $row['Mechanical Engineering'];
                                $bt = $row['Bio-Technology'];
                                $one = $row[$b];
                            }
                            if ($one > $rank) {
                                $q = 1;
                                echo "<div class='card text-center m-3 p-3' style='width: 28rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$choice1</h5>
                        
                    </div>
                    </div>";
                            }
                        }
                        if ($choice1[0] == 'D') {
                            $b = ltrim($choice1, "DTU-");
                            $query = "SELECT * FROM `dtu`";

                            $query_run = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($query_run)) {
                                $cse = $row['Computer Science and Enginnering'];
                                $csai = $row['Computer Science and Engineering (Artificial lntelligence)'];
                                $it = $row['Information Technology'];
                                $ece = $row['Electronics and Communication Engineering'];
                                $mac = $row['Mathematics and Computing'];
                                $ee = $row['Electrical Engineering'];
                                $ice = $row['Instrumentation and Control Engineering'];
                                $mpae = $row['Manufacturing Process and Automation Engineering'];
                                $me = $row['Mechanical Engineering'];
                                $bt = $row['Bio-Technology'];
                                $one = $row[$b];
                            }
                            if ($one > $rank) {
                                $q = 1;
                                echo "<div class='card text-center m-3 p-3 rounded-3 border-1 shadow' style='width: 28rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$choice1</h5>
                        
                    </div>
                    </div>";
                            }
                        }
                        if ($choice1[0] == 'I' and $choice1[1] == 'G') {
                            $b = ltrim($choice1, "IGDTUW-");
                            $query = "SELECT * FROM `igdtuw`";

                            $query_run = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($query_run)) {
                                $cse = $row['Computer Science and Enginnering'];
                                $csai = $row['Computer Science and Engineering (Artificial lntelligence)'];
                                $it = $row['Information Technology'];
                                $ece = $row['Electronics and Communication Engineering'];
                                $mac = $row['Mathematics and Computing'];
                                $ee = $row['Electrical Engineering'];
                                $ice = $row['Instrumentation and Control Engineering'];
                                $mpae = $row['Manufacturing Process and Automation Engineering'];
                                $me = $row['Mechanical Engineering'];
                                $bt = $row['Bio-Technology'];
                                if ($b[0] == 'n') {
                                    $one = $it;
                                } else {
                                    $one = $row[$b];
                                }
                            }
                            if ($one > $rank) {
                                $q = 1;
                                echo "<div class='card text-center m-3 p-3 rounded-3 border-1 shadow' style='width: 28rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$choice1</h5>
                        
                    </div>
                    </div>";
                            }
                        }

                        // for choice2

                        if ($choice2[0] == 'N') {
                            $b = ltrim($choice2, "NSUT-");
                            $query = "SELECT * FROM `nsut`";

                            $query_run = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($query_run)) {
                                $cse = $row['Computer Science and Enginnering'];
                                $csai = $row['Computer Science and Engineering (Artificial lntelligence)'];
                                $it = $row['Information Technology'];
                                $ece = $row['Electronics and Communication Engineering'];
                                $mac = $row['Mathematics and Computing'];
                                $ee = $row['Electrical Engineering'];
                                $ice = $row['Instrumentation and Control Engineering'];
                                $mpae = $row['Manufacturing Process and Automation Engineering'];
                                $me = $row['Mechanical Engineering'];
                                $bt = $row['Bio-Technology'];
                                $one = $row[$b];
                            }
                            if ($one > $rank) {
                                $q = 1;
                                echo "<div class='card text-center rounded-3 border-1 shadow m-3 p-3' style='width: 28rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$choice2</h5>
                        
                    </div>
                    </div>";
                            }
                        }
                        if ($choice2[0] == 'D') {
                            $b = ltrim($choice2, "DTU-");
                            $query = "SELECT * FROM `dtu`";

                            $query_run = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($query_run)) {
                                $cse = $row['Computer Science and Enginnering'];
                                $csai = $row['Computer Science and Engineering (Artificial lntelligence)'];
                                $it = $row['Information Technology'];
                                $ece = $row['Electronics and Communication Engineering'];
                                $mac = $row['Mathematics and Computing'];
                                $ee = $row['Electrical Engineering'];
                                $ice = $row['Instrumentation and Control Engineering'];
                                $mpae = $row['Manufacturing Process and Automation Engineering'];
                                $me = $row['Mechanical Engineering'];
                                $bt = $row['Bio-Technology'];
                                $one = $row[$b];
                            }
                            if ($one > $rank) {
                                $q = 1;
                                echo "<div class='card text-center rounded-3 border-1 shadow m-3 p-3' style='width: 28rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$choice2</h5>
                        
                    </div>
                    </div>";
                            }
                        }
                        if ($choice2[0] == 'I' and $choice2[1] == 'G') {
                            $b = ltrim($choice2, "IGDTUW-");
                            $query = "SELECT * FROM `igdtuw`";

                            $query_run = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($query_run)) {
                                $cse = $row['Computer Science and Enginnering'];
                                $csai = $row['Computer Science and Engineering (Artificial lntelligence)'];
                                $it = $row['Information Technology'];
                                $ece = $row['Electronics and Communication Engineering'];
                                $mac = $row['Mathematics and Computing'];
                                $ee = $row['Electrical Engineering'];
                                $ice = $row['Instrumentation and Control Engineering'];
                                $mpae = $row['Manufacturing Process and Automation Engineering'];
                                $me = $row['Mechanical Engineering'];
                                $bt = $row['Bio-Technology'];
                                if ($b[0] == 'n') {
                                    $one = $it;
                                } else {
                                    $one = $row[$b];
                                }
                            }
                            if ($one > $rank) {
                                $q = 1;
                                echo "<div class='card text-center rounded-3 border-1 shadow m-3 p-3' style='width: 28rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$choice2</h5>
                        
                    </div>
                    </div>";
                            }
                        }
                        // for choice3

                        if ($choice3[0] == 'N') {
                            $b = ltrim($choice3, "NSUT-");
                            $query = "SELECT * FROM `nsut`";

                            $query_run = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($query_run)) {
                                $cse = $row['Computer Science and Enginnering'];
                                $csai = $row['Computer Science and Engineering (Artificial lntelligence)'];
                                $it = $row['Information Technology'];
                                $ece = $row['Electronics and Communication Engineering'];
                                $mac = $row['Mathematics and Computing'];
                                $ee = $row['Electrical Engineering'];
                                $ice = $row['Instrumentation and Control Engineering'];
                                $mpae = $row['Manufacturing Process and Automation Engineering'];
                                $me = $row['Mechanical Engineering'];
                                $bt = $row['Bio-Technology'];
                                $one = $row[$b];
                            }
                            if ($one > $rank) {
                                $q = 1;
                                echo "<div class='card text-center rounded-3 border-1 shadow m-3 p-3' style='width: 28rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$choice3</h5>
                        
                    </div>
                    </div>";
                            }
                        }
                        if ($choice3[0] == 'D') {

                            $b = ltrim($choice3, 'DTU-');


                            $query = "SELECT * FROM `dtu`";

                            $query_run = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($query_run)) {
                                $cse = $row['Computer Science and Enginnering'];
                                $csai = $row['Computer Science and Engineering (Artificial lntelligence)'];
                                $it = $row['Information Technology'];
                                $ece = $row['Electronics and Communication Engineering'];
                                $mac = $row['Mathematics and Computing'];
                                $ee = $row['Electrical Engineering'];
                                $ice = $row['Instrumentation and Control Engineering'];
                                $mpae = $row['Manufacturing Process and Automation Engineering'];
                                $me = $row['Mechanical Engineering'];
                                $bt = $row['Bio-Technology'];
                                $one = $row[$b];
                            }
                            if ($one > $rank) {
                                $q = 1;
                                echo "<div class='card text-center rounded-3 border-1 shadow m-3 p-3' style='width: 28rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$choice3</h5>
                        
                    </div>
                    </div>";
                            }
                        }
                        if ($choice3[0] == 'I' and $choice3[1] == 'G') {
                            $b = ltrim($choice3, "IGDTUW-");
                            $query = "SELECT * FROM `igdtuw`";

                            $query_run = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($query_run)) {
                                $cse = $row['Computer Science and Enginnering'];
                                $csai = $row['Computer Science and Engineering (Artificial lntelligence)'];
                                $it = $row['Information Technology'];
                                $ece = $row['Electronics and Communication Engineering'];
                                $mac = $row['Mathematics and Computing'];
                                $ee = $row['Electrical Engineering'];
                                $ice = $row['Instrumentation and Control Engineering'];
                                $mpae = $row['Manufacturing Process and Automation Engineering'];
                                $me = $row['Mechanical Engineering'];
                                $bt = $row['Bio-Technology'];
                                if ($b[0] == 'n') {
                                    $one = $it;
                                } else {
                                    $one = $row[$b];
                                }
                            }
                            if ($one > $rank) {
                                $q = 1;
                                echo "<div class='card text-center rounded-3 border-1 shadow m-3 p-3' style='width: 28rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$choice3</h5>
                        
                    </div>
                    </div>";
                            }
                        }

                        // choice4

                        if ($choice4[0] == 'N') {
                            $b = ltrim($choice4, "NSUT-");
                            $query = "SELECT * FROM `nsut`";

                            $query_run = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($query_run)) {
                                $cse = $row['Computer Science and Enginnering'];
                                $csai = $row['Computer Science and Engineering (Artificial lntelligence)'];
                                $it = $row['Information Technology'];
                                $ece = $row['Electronics and Communication Engineering'];
                                $mac = $row['Mathematics and Computing'];
                                $ee = $row['Electrical Engineering'];
                                $ice = $row['Instrumentation and Control Engineering'];
                                $mpae = $row['Manufacturing Process and Automation Engineering'];
                                $me = $row['Mechanical Engineering'];
                                $bt = $row['Bio-Technology'];
                                $one = $row[$b];
                            }
                            if ($one > $rank) {
                                $q = 1;
                                echo "<div class='card text-center rounded-3 border-1 shadow m-3 p-3' style='width: 28rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$choice4</h5>
                        
                    </div>
                    </div>";
                            }
                        }
                        if ($choice4[0] == 'D') {

                            $b = ltrim($choice4, "DTU-");


                            $query = "SELECT * FROM `dtu`";

                            $query_run = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($query_run)) {
                                $cse = $row['Computer Science and Enginnering'];
                                $csai = $row['Computer Science and Engineering (Artificial lntelligence)'];
                                $it = $row['Information Technology'];
                                $ece = $row['Electronics and Communication Engineering'];
                                $mac = $row['Mathematics and Computing'];
                                $ee = $row['Electrical Engineering'];
                                $ice = $row['Instrumentation and Control Engineering'];
                                $mpae = $row['Manufacturing Process and Automation Engineering'];
                                $me = $row['Mechanical Engineering'];
                                $bt = $row['Bio-Technology'];
                                $one = $row[$b];
                            }
                            if ($one > $rank) {
                                $q = 1;
                                echo "<div class='card text-center rounded-3 border-1 shadow m-3 p-3' style='width: 28rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$choice4</h5>
                        
                    </div>
                    </div>";
                            }
                        }
                        if ($choice4[0] == 'I' and $choice4[1] == 'G') {
                            $b = ltrim($choice4, "IGDTUW-");
                            $query = "SELECT * FROM `igdtuw`";

                            $query_run = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($query_run)) {
                                $cse = $row['Computer Science and Enginnering'];
                                $csai = $row['Computer Science and Engineering (Artificial lntelligence)'];
                                $it = $row['Information Technology'];
                                $ece = $row['Electronics and Communication Engineering'];
                                $mac = $row['Mathematics and Computing'];
                                $ee = $row['Electrical Engineering'];
                                $ice = $row['Instrumentation and Control Engineering'];
                                $mpae = $row['Manufacturing Process and Automation Engineering'];
                                $me = $row['Mechanical Engineering'];
                                $bt = $row['Bio-Technology'];

                                if ($b[0] == 'n') {
                                    $one = $it;
                                } else {
                                    $one = $row[$b];
                                }
                                // echo $it;
                            }
                            if ($one > $rank) {
                                $q = 1;
                                echo "<div class='card text-center rounded-3 border-1 shadow m-3 p-3' style='width: 28rem;'>
                    <div class='card-body'>
                        <h5 class='card-title'>$choice4</h5>
                        
                    </div>
                    </div>";
                            }
                        }
                    }

                    if ($q == 0) {
                        echo "<div class='animate__animated animate__heartBeat  animate__delay-5 text-center rounded-3 border-1 shadow m-5 p-3'><h4>No Course </h4></div>";
                    }
                    if ($a == 0) {
                        echo "db not connected";
                    }
                    ?>
                </div>

            </div>
        </div>
        <?php include'footer.php';?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
