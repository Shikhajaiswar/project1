<style>
  .nav-link:hover{
    /* text-decoration: underline; */
    /* background-color: aqua; */
    font-size: large;
  }

  .nav-link:active{
    text-decoration: underline;
  }
</style>

<?php
// session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
  $name = $_SESSION['username'];
} else {
  $loggedin = false;
}


echo '

<div class="container-fluid shadow" style="background-color:#5619a9">
  <div class="row">
    <div class="col d-flex justify-content-end">
      <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook-new.png" alt="" width="25px" class="mx-2 my-1"></a>
      <a href="https://www.linkedin.com/" target="_blank"><img src="img/linkedin.png" alt="" width="25px" class="mx-2 my-1"></a>
      <a href="https://twitter.com/home" target="_blank"><img src="img/twitter.png" alt="" width="25px" class="mx-2 my-1"></a>
      <a href="" target="_blank"><img src="img/instagram-new.png" alt="" width="25px" class="mx-2 my-1"></a>
      <a href="" target="_blank"><img src="img/facebook-new.png" alt="" width="25px" class="mx-2 my-1"></a>
    </div>
  </div>
</div>';

echo '
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow  sticky-top py-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">पाठशाला</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="institute.php">Institutes</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn  text-light   mx-2" style="background-color:#5619a9" type="submit">Search</button>
        
      </form>';

if (!$loggedin) {
  echo '
      <a href="login.php">
          <button class="btn btn-outline-light mx-2 text-light" style="background-color:#5619a9" >LogIn</button>
        </a>
      <a href="signup.php">
          <button class="btn btn-outline-light mx-2 text-light" style="background-color:#5619a9">SignUp</button>
      </a>';
} else {
  echo "<div class='dropdown mx-5'>
        <a class='dropdown-toggle' style='text-transform:uppercase;' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
        $name
        </a>
        <ul class='dropdown-menu ' >
          <li><a class='dropdown-item' href='logout.php'>Log Out</a></li>
          <li><a class='dropdown-item' href='profile.php'>My Profile</a></li>
        </ul>
      </div>";
  
}




echo '

    </div>
  </div>
</nav>';
