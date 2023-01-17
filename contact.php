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



<?php
$a = "";
$b = 0;
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'dbconnect.php';
  $applicationno = $_POST["applicationno"];
  $password = $_POST["password"];


  $username = "SELECT username FROM `userdata` WHERE applicationno='$applicationno'";

  $sql = "SELECT * FROM `userdata` WHERE applicationno='$applicationno'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);

  if ($num == 1) {
    // $sql1 = "SELECT * FROM `userdata` WHERE applicationno='$applicationno' AND cpassword='$password'";
    // $result1 = mysqli_query($conn, $sql1);
    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($password, $row['password'])) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['applicationno'] = $applicationno;


        $sql1 = "SELECT username FROM `userdata` WHERE applicationno='$applicationno'";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $_SESSION['username'] = $row1['username'];

        
        header("location: home.php");
      } else {
        $showError = "Wrong Password";
      }
    }
  } else {
    $showError = "The application No. you entered isn't connected to an account.";
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
            font-size: 5rem;
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
        }

        @media (max-width:33rem) {
            .contact .contacthead .me {
                font-size: 2rem;
                text-align: center;
            }

            .input {
                width: 20rem;
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
                
                swal('ERROR!','$a','error')
                
                </script>";
            } ?>
        </h2>
    </div>
    <div class="form">
        <form method="post">

            <input type="text" name="name" id="name" class="name input" placeholder=" Name">
            <br><br>
            <input type="email" name="email" id="email" placeholder=" Email" class="email input">
            <br><br>
            <textarea name="message" id="msg" cols="8" rows="4" placeholder="Message..." class="msg input"></textarea>
            <br><br>

            <button "type=" submit" value="Submit" class="submit input b" id="submit">
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



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>