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
        .reg_but{
            /* background-color:#5619a9;
            color: white; */
        }
        .reg_but:hover{
            /* width: 10rem; */
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php include 'header.php'; ?>
    



    <div class="container-fluid img my-3 shadow bg-secondary ">
        <div class="row mx-3">

        </div>
        <div class="row  mt-5">
            <div class="col d-flex justify-content-center fs-2 fw-bolder  text-light mx-5 ">
            We ease your biggest doubts with personalized Video Counselling from our
            </div>
        </div>
        <div class="row head">
            <div class="col d-flex justify-content-center fs-2 fw-bolder  text-light mx-5">
            Curated Experts and Answers from the student community
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center text-light fs-2-5 ">
                Edited By Team Careers360 | Updated on Oct 21, 2022 - 7:22 p.m. IST #JAC Delhi B.Tech Admission
            </div>
        </div>
        <?php
        if($loggedin){
            echo'
        <div class="row  m-5 ">
            <div class="col  d-flex justify-content-center ">
                <a href="registration.php"><button class="btn btn-danger  ">counselling</button></a>
            </div>
        </div>
        <div class="row">';
        }else{
            echo'
        <div class="row  m-5 ">
            <div class="col  d-flex justify-content-center ">
                <a href="login.php"><button class="btn btn-light text-light " style="background-color:#5619a9" >Login for counselling</button></a>
            </div>
        </div>
        <div class="row">';

        }
        ?>

        </div>
    </div>

    <div class="container-fluid content my-5">
        <div class="row d-flex justify-content-center fs-2 fw-bolder">
            Councelling
        </div>
        <div class="row d-flex justify-content-center">
            We ease your biggest doubts with personalized Video Counselling from our
            Curated Experts and Answers from the student community
        </div>
        <div class="row d-flex justify-content-center mx-5">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore qui assumenda eligendi voluptatem labore commodi ipsa molestias fuga error quas aut quisquam, laudantium, distinctio mollitia. Error dicta voluptates qui, nihil quia sit, suscipit accusamus alias adipisci dolores ab libero quae id consequatur molestiae omnis doloremque eveniet recusandae earum itaque ad ducimus? Blanditiis iste rerum in dignissimos? Cupiditate est iure similique soluta placeat? Neque, consequuntur? Blanditiis accusantium ducimus voluptate quas consectetur voluptatibus commodi rem sint! Ducimus harum hic ratione fugit adipisci? Labore provident, numquam corporis iure saepe iusto inventore! Saepe eaque similique sequi! Animi eum, ab itaque similique veritatis harum necessitatibus quo tempora quos enim tenetur, quas culpa pariatur quae sequi. Rerum vel, non, porro fugit iste qui error maxime a repellat voluptates exercitationem voluptatem quasi tenetur, id sed dolorem! Dolor laboriosam dicta asperiores fuga eveniet tempore laborum ex, incidunt quos ratione dolores vel veritatis provident. Assumenda, esse aut quod tempora nihil nam harum mollitia id placeat deserunt iusto qui, sit corporis magni culpa maxime ab blanditiis! Mollitia cum ea nesciunt natus similique facere. Sint nam, tempore sunt perspiciatis illo debitis! Quae asperiores neque corporis voluptatem dignissimos est, amet dolor soluta facere, maxime error fuga cum minima. Soluta nulla quae quo quod repudiandae, aliquam sequi cupiditate? Dolorem non impedit in! Culpa similique doloribus eligendi vitae obcaecati? Tempora maiores cum adipisci aspernatur magnam totam quia quis nam repellat quam in nostrum animi itaque voluptatibus esse ex perferendis, rerum accusantium vel excepturi nesciunt neque ut. Magni molestiae dolores illum, quas qui in ea perferendis maiores. Error esse iure ea iusto. Possimus eos quis nihil nobis ut non perspiciatis sapiente, libero accusantium soluta nam at. Eaque animi quia enim voluptate aspernatur, illum quasi facere? Obcaecati consequatur qui ducimus, quas beatae reprehenderit non odio similique hic atque dolores quaerat vel rerum voluptatibus harum! Nesciunt, deleniti.
        </div>
    </div>





    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>