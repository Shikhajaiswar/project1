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



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'dbconnect.php';
    include 'header.php';
    $a = 0;
    $id = $_GET['id'];
    $query = "SELECT * FROM `collegedata` where applicationno='$id'";
    $query_run = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($query_run)) {
        $a = 1;
        $name = $row['name'];
        $applicationno = $row['applicationno'];
        $rank = $row['rank'];
        $choice1 = $row['choice1'];
        $choice2 = $row['choice1'];
        $choice3 = $row['choice3'];
        $choice4 = $row['choice4'];
    }
    ?>


    <div class="row justify-content-around">
        <div class="col-4 p-3">
            <div class=" animate__animated animate__backInLeft">
                <h2 class="text-center ">Your Cources</h2>
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
            One of two columns
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</body>

</html>