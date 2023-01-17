<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    // header("location: login.php");
    $loggedin= false;
    // exit;
}
else{
    $loggedin = true;
  }

?>






<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* .bgy {
            background: yellow;
        } */
        .head1{
            background-color:blue;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="p-5">
        <h1  class="fs-1">Institutes</h1><br>
        <table class="table table-dark table-striped-column table-hover p-3">
            <thead class="head1">
                <tr>
                    <th colspan="4" class="fs-2">Institutes</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th scope="row" colspan="2" class="p-4 fs-4 bg-warning text-dark">Title</th>
                    <!-- <td>Mark</td> -->
                    <td class="p-4 fs-4 bg-warning text-dark">Session</td>
                    <td class=" p-4  ps-5 fs-4 bg-warning text-dark">View / Download</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" colspan="2" class="fs-5 bg-warning-subtle text-danger ps-3">Delhi Skill and Entrepreneurship University</th>
                    <!-- <td>Jacob</td> -->
                    <td class="fs-5 bg-warning-subtle text-danger  ps-4">2023</td>
                    <td class="fs-5 bg-warning-subtle text-danger  ps-5"><a href="https://dseu.ac.in/" target="_blank"
                            aria-label="External site that opens in a new window"
                            title="External site that opens in a new window"
                            onclick="return confirm('You are being redirected to an external website. Please note that JOINT ADMISSION COUNSELLING, DELHI cannot be held responsible for external websites content &amp; privacy policies.');"
                            rel="noopener noreferrer">Delhi Skill and Entrepreneurship University <i
                                class="fa fa-external-link-square"></i></a></td>
                </tr>
                <tr>
                    <th scope="row" colspan="2" class="fs-5 bg-warning-subtle text-danger ps-3">Delhi Technological University</th>
                    <!-- <td>Jacob</td> -->
                    <td class="fs-5 bg-warning-subtle text-danger ps-4">2023</td>
                    <td class="fs-5 bg-warning-subtle text-danger ps-5"><a href="http://www.dtu.ac.in/" target="_blank"
                            aria-label="External site that opens in a new window"
                            title="External site that opens in a new window"
                            onclick="return confirm('You are being redirected to an external website. Please note that JOINT ADMISSION COUNSELLING, DELHI cannot be held responsible for external websites content &amp; privacy policies.');"
                            rel="noopener noreferrer">Delhi Technological University <i
                                class="fa fa-external-link-square"></i></a></td>
                </tr>
                <tr>
                    <th class="fs-5 bg-warning-subtle text-danger ps-3" scope="row" colspan="2">Indira Gandhi Delhi Technical University for Women</th>
                    <!-- <td>Jacob</td> -->
                    <td class="fs-5 bg-warning-subtle text-danger ps-4">2023</td>
                    <td class="fs-5 bg-warning-subtle text-danger ps-5"><a href="https://www.igdtuw.ac.in/" target="_blank"
                            aria-label="External site that opens in a new window"
                            title="External site that opens in a new window"
                            onclick="return confirm('You are being redirected to an external website. Please note that JOINT ADMISSION COUNSELLING, DELHI cannot be held responsible for external websites content &amp; privacy policies.');"
                            rel="noopener noreferrer">Indira Gandhi Delhi Technical University for Women <i
                                class="fa fa-external-link-square"></i></a></td>
                </tr>
                <tr>
                    <th  class="fs-5 bg-warning-subtle text-danger ps-3" scope="row" colspan="2">Indraprastha Institute of Information Technology</th>
                    <!-- <td>Jacob</td> -->
                    <td class="fs-5 bg-warning-subtle text-danger ps-4">2023</td>
                    <td class="fs-5 bg-warning-subtle text-danger ps-5"><a href="https://www.iiitd.ac.in/" target="_blank"
                            aria-label="External site that opens in a new window"
                            title="External site that opens in a new window"
                            onclick="return confirm('You are being redirected to an external website. Please note that JOINT ADMISSION COUNSELLING, DELHI cannot be held responsible for external websites content &amp; privacy policies.');"
                            rel="noopener noreferrer">Indraprastha Institute of Information Technology <i
                                class="fa fa-external-link-square"></i></a></td>
                </tr>
                <tr>
                    <th class="fs-5 bg-warning-subtle text-danger ps-3" scope="row" colspan="2">Netaji Subhas University of Technology</th>
                    <!-- <td>Jacob</td> -->
                    <td class="fs-5 bg-warning-subtle text-danger ps-4">2023</td>
                    <td class="fs-5 bg-warning-subtle text-danger ps-5"><a href="http://www.nsit.ac.in/" target="_blank"
                            aria-label="External site that opens in a new window"
                            title="External site that opens in a new window"
                            onclick="return confirm('You are being redirected to an external website. Please note that JOINT ADMISSION COUNSELLING, DELHI cannot be held responsible for external websites content &amp; privacy policies.');"
                            rel="noopener noreferrer">NSUT <i class="fa fa-external-link-square"></i></a></td>
                </tr>

            </tbody>
        </table>
    </div>



    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>