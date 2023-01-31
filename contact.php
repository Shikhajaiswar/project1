<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    // header("location: login.php");
    $loggedin = false;
    // exit;
} else {
    $loggedin = true;
}

?>



<?php
$a = "";
$b = -1;
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['message'];
    $sql = "INSERT INTO `contact` (`name`, `email`, `msg`) VALUES ('$name', '$email', '$msg');";
    $result = mysqli_query($conn, $sql);
    if($result){
        $b = 1;
        // echo '<script>swal("Good job!", " Sucessfully Submitted!", "success")</script>';
    }
    else{
        $b = 0;
        $a = "Error!";
    }

}

?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PaathShaala</title>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <link rel="shortcut icon" href="loggoo.png" type="image/x-icon">

    <style>
        .background {
            background: rgba(0, 0, 0, 0.7) url("My Portforlio/back.webp");
            background-size: cover;
            background-blend-mode: darken;
            height: 100%;
            width: 100%;

        }

        .margin {

            padding: 6rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 2rem;
        }

        .margin .form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 1.5rem;
        }

        .input {
            width: 30rem;
            padding: 1rem;
            background: none;
            color: white;
            border: 1px solid whitesmoke;
            border-radius: 9px;
        }

        .submit {
            background: red;
            margin: 2rem 0;
            font-size: 2rem;
            cursor: pointer;
        }


        .submit:hover {
            background: white;
            color: black;

        }

        .contact .contacthead .post {
            color: rgb(255, 14, 14);
            text-align: center;
            padding: 6px;
        }

        .socialmedia .media {
            /* margin-top: 0; */
            /* background: black; */
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            /* padding: 5rem; */
        }

        .socialmedia .media img {
            width: 2rem;
            /* border: 2px solid black; */
            /* border-radius: 2rem; */
            cursor: pointer;
        }

        .socialmedia .media img:hover {
            width: 4rem;

        }

        .b {
            height: 5rem;
        }

        .biig {
            font-size: 2rem;
            font-weight: bold;
            top: 0;
            padding: 0 0 2rem;
            color: rgba(226, 185, 122, 0.945);
            /* padding: rem; */
            /* margin:0 0 10rem; */
        }

        .contact .contacthead .post {
            color: rgb(255, 14, 14);
            text-align: center;
            padding: 6px;
        }

        .contact .contacthead .me {
            align-items: center;
            padding: 4rem;
            color: aliceblue;
        }

        .contact .contacthead .us {
            text-align: center;
            padding: 0.5rem;
            color: aliceblue;
        }

        @media (max-width:63rem) {
            .contact .contacthead .me {
                font-size: 2rem;
                text-align: center;
            }

            .input {
                width: 20rem;
            }

            .socialmedia .media img {
                width: 20px;

            }
        }

        @media (max-width:33rem) {
            .contact .contacthead .me {
                font-size: 2rem;
                text-align: center;
            }

            .input {
                width: 20rem;
            }
            .socialmedia .media img {
                width: 20px;

            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <?php include 'header.php'; ?>
    <section class="contact background" id="contact">

        <div class="margin">
            <div class="contacthead">
                <h1 class="me biig" align="center">CONTACT US</h1>
                <h2 class="us">Feel free to get in touch. Cheers!</h2>
                <h2 class="us" id="us">
                    <?php if ($b == 1) {
                        echo '<script>swal("Good job!", " Sucessfully Submitted!", "success")</script>';
                        echo " Sucessfully Submitted";
                    } ?>



                </h2>
                <h2 class="post">
                    <?php if ($b == 0) {
                        echo ($a);


                        echo "<script>
                
                swal('ERROR!','Please Enter Correct Details!','error')
                
                </script>";
                    } ?>
                </h2>
            </div>
            <div class="form">
                <form method="post">

                    <input type="text" name="name" id="name" class="name input" placeholder=" Name" required>
                    <br><br>
                    <input type="email" name="email" id="email" placeholder=" Email" class="email input" required>
                    <br><br>
                    <textarea name="message" id="msg" cols="8" rows="4" placeholder="Message..." class="msg input" required></textarea>
                    <br><br>

                    <button "type=" submit" value="Submit" class="submit input b" id="submit" style="background: #5619a9;">
                        <p>Submit</p>
                    </button>

                    <!-- <input type="submit" value="Submit" class="submit input" onclick="submit()"> -->

                </form>


                <div class="socialmedia">
                    <div class="media">
                        <a href="mailto:pawank@gmail.com" target="_blank"><img src="My Portforlio\email.png" alt=""></a>
                        <a href="https://www.linkedin.com/in/pawan-kumar-6584b322a" target="_blank"><img src="My Portforlio\linkedin.png" alt=""></a>
                        <a href="https://github.com/Pawan20031" target="_blank"><img src="My Portforlio\github.png" alt=""></a>
                        <a href="https://www.facebook.com/profile.php?id=100025813939509" target="_blank"><img src="My Portforlio\fb.png" alt=""></a>
                        <a href="https://www.instagram.com/pawan_kumar2003/" target="_blank"><img src="My Portforlio\instra.png" alt=""></a>
                        <a href="https://twitter.com/pawank2114" target="_blank"><img src="My Portforlio\twitter.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
