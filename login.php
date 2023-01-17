<?php
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
 
    while ($row = mysqli_fetch_assoc($result)) {
      // echo $row['password'];
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
    .login {
      background: rgb(156, 162, 227);
      background: linear-gradient(0deg, rgba(156, 162, 227, 1) 0%, rgba(37, 14, 65, 1) 100%);
    }

    .para {
      color: #250e41;
      /* font-weight: bolder; */
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

  <?php include 'header.php'; ?>


  <?php
  if ($login) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
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




  <div class="container  my-5" style="width: 60rem;">
    <div class="row">
      <div class="para col-5 my-5 ">
        <h1 style="font-size:60px; color: #322a87; font-weight:bolder;">पाठशाला </h1>
        <p style="font-size:larger; color: #250e41;">We ease your biggest doubts with personalized Video Counselling from our
          Curated Experts and Answers from the student community</p>
      </div>

      <div class="col-2">

      </div>
      <div class="col-5 login    rounded-3 shadow ">
        <form method="post">

          <div class="mb-3 my-3">
            <label for="applicationno" class="form-label text-light text-light">Application No. :</label>
            <input type="number" name="applicationno" class="form-control" id="applicationno" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label text-light">Password :</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>


          <button type="submit" name="submit" class="btn btn-success mx-auto d-flex justify-content-center my-2">Log in</button>
          <a href="" class="mx-auto text-light d-flex justify-content-center text-underline">Forgotten password?</a>
          <hr>
        </form>
        <a href="signup.php"><button class="btn btn-primary mx-auto d-flex justify-content-center my-3">Create New Account</button></a>

      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>