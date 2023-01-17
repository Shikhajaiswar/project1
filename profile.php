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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>


</head>

<body>
    <?php
    include 'header.php';
    // session_start();
    include 'dbconnect.php';
    $applicationno = $_SESSION['applicationno'];
    $query = "SELECT * FROM `registration` where applicationno =  '$applicationno'";
    $query_run = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($query_run)) {
        $name1 = $row['fname'];
        $name2 = $row['lname'];
        $name = $name1 . " " . $name2;
        $pic = $row['photo'];
        echo "<script type='text/javascript'>
        Swal.fire({
            title: 'Welcome!',
            text: '$name',
            imageUrl: '$pic',
            imageWidth: 400,
            imageHeight: 300,
            imageAlt: 'Custom image',
            background: 'wheat',
            color:'black',
            
        })
        </script>";
    ?>




        <div  class="text-center animate__animated animate__backInDown container shadow-lg p-3 mb-5 bg-success rounded mt-3">
            <h1 class="text-warning  animate__animated animate__heartBeat">WELCOME! <p class="fs-3 text-light"><?php echo $row['fname'];
                                                                                                                echo " ";
                                                                                                                echo $row['lname']; ?></p>
            </h1>

        </div>
        <div class="container animate__animated animate__backInDown shadow p-3 mt-2 rounded bg-body-secondary">
            <div class="row">
                <div class="col-9">




                    <div class="container">
                        <img class="rounded-circle " src="<?php echo $row['photo']; ?>" height="100px" width="100px" alt="img">
                        <h3><?php echo $row['fname'];
                            echo " ";
                            echo $row['lname']; ?></h3>
                        <p class="fs-4 text-success-emphasis">Your Profile</p>
                        <p class="fs-6">Application Number : <?php echo $row['applicationno'];
                                                                ?></p>
                    </div>
                





                </div>

            </div>
            <hr>
            <div class="row ">
                <div class="col">

                    <div class="card">
                        <div class="card-header">
                            Personal Details
                        </div>
                        <div class="card-body">

                            <p class="card-text">Name : <?php echo $row['fname'];
                                                        echo " ";
                                                        echo $row['lname']; ?></p>
                            <p class="card-text">Gender : <?php echo $row['gender'];
                                                            ?></p>
                            <p class="card-text">Date od Birth : <?php echo $row['dob'];
                                                                    ?></p>

                            <p class="card-text">Mobile/Phone Number : <?php echo $row['phone'];
                                                                        ?></p>
                            <p class="card-text">Email-Id : <?php echo $row['email'];
                                                            ?></p>


                        </div>
                    </div>

                    <div class="p-2">
                        <a href="update.php?id=<?php echo $row['applicationno'];
                                                ?>">
                            <button type="button" class="btn btn-warning">Edit Profile</button>

                        </a>
                    </div>
                </div>
                <div class="col pb-4">
                    <div class="card">
                        <div class="card-header">
                            Address Details
                        </div>
                        <div class="card-body">

                            <p class="card-text">Address : <?php echo $row['a1'];
                                                            ?></p>
                            </p>
                            <p class="card-text">City : <?php echo $row['city'];
                                                        ?></p>
                            </p>
                            <p class="card-text">State : <?php echo $row['state'];
                                                            ?></p>
                            </p>
                            <p class="card-text">Pincode : <?php echo $row['zip'];
                                                            ?></p>
                            </p>
                            <p class="card-text">Country : <?php echo $row['country'];
                                                            ?></p>
                            </p>

                        </div>
                    </div>
                    
                    
                </div>
            </div>

        </div>
        <div class="p-2 text-center m-5">
                        <a href="couselling.php">
                            <button type="button" class="btn btn-success p-3" style="width:23rem; border-radius:3rem;">Proceed</button>

                        </a>
                    </div>


        </div>


    <?php
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>