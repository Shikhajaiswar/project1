<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // include 'dbconnect.php';
    include 'dbconnect.php';
    //Initializing the session
    session_start();


    // $_SESSION['photo'] = $_POST['photo'];
// $_SESSION['sign'] = $_POST['sign'];
// $_SESSION['aadhaarNo'] = $_POST['aadhaarNo'];
// $_SESSION['aadhaar'] = $_POST['aadhaar'];

    //writing MySQL Query to insert the details
    $sql = "INSERT INTO `registration` ( `fname`, `lname`,`dob`, `gender`, `country`, `phone`, `email`,`a1`,`city`, `state`, `zip`,`photo`, `sign`, `aadhaarNo`, `aadhaar`) VALUES ( " . $_SESSION['fname'] . "," . $_SESSION['lname'] . "," . $_SESSION['dob'] . "," . $_SESSION['gender'] . "," . $_SESSION['country'] . "," . $_SESSION['phone'] . "," . $_SESSION['email'] . "," . $_SESSION['a1'] . "," . $_SESSION['city'] . "," . $_SESSION['state'] . "," . $_SESSION['zip'] . "," . $_POST['photo'] . "," . $_POST['sign'] . "," . $_POST['aadhaarNo'] . "," . $_POST['aadhaar'] . ")";


    // $sql = "INSERT INTO `registration` ( `fname`, `lname`,`dob`, `gender`, `country`, `phone`, `email`,`a1`, `a2`,`city`, `state`, `zip`,`photo`, `sign`, `aadhaarNo`, `aadhaar`) VALUES (". $_SESSION ['fname']."," . $_SESSION['lname'] . "," . $_SESSION['dob'] . "," . $_SESSION['gender'] . "," . $_SESSION['country'] . "," . $_SESSION['phone'] . "," . $_SESSION['email'] . "," . $_SESSION['a1'] . "," . $_SESSION['a2'] . "," . $_SESSION['city'] . "," . $_SESSION['state'] . "," . $_SESSION['zip'] . "," . $_POST['photo'] . "," . $_POST['sign'] . "," . $_POST['aadhaarNo'] . "," . $_POST['aadhaar'] . ")";

    // mysql_query($insert_query);
// mysqli_query($insert_query);
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $showAlert = true;
    }

    // header("location: home.php");
    else {
        $showError = "Passwords do not match";
    }
}
?>
<!-- <pre>Successfully Registered</pre> -->