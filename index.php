<!doctype html>
<?php
error_reporting(~E_NOTICE);
  @session_start();

 ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Font Google-->
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <!--CSS Me-->
    <link href="css/styleme.css" rel="stylesheet">
    <!-- Icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>ToT Hackathon</title>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo.png" style="width:250px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php
        if($_GET['p'] == null){
          echo '<li class="nav-item active"><a class="nav-link" href="./?p=home"><i class="fas fa-home"></i> HOME <span class="sr-only">(current)</span></a></li>';
        }else if($_GET['p'] != 'login' && $_GET['p'] != 'about' && $_GET['p'] != 'game' && $_GET['p'] != 'true' && $_GET['p'] != 'false'){
          echo '<li class="nav-item active"><a class="nav-link" href="./?p=home"><i class="fas fa-home"></i> HOME <span class="sr-only">(current)</span></a></li>';
        }else{
          echo '<li class="nav-item"><a class="nav-link" href="./?p=home"><i class="fas fa-home"></i> HOME <span class="sr-only">(current)</span></a></li>';
        }
        if($_GET['p'] == 'challenge'){
          echo '<li class="nav-item active"><a class="nav-link" href="./?p=challenge"><i class="fas fa-trophy"></i> CHALLENGE</a></li>';
        }else{
          echo '<li class="nav-item "><a class="nav-link" href="./?p=challenge"><i class="fas fa-trophy"></i> CHALLENGE</a></li>';
        }
        if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_email'])){
          if($_GET['p'] == 'login'){
            echo '<li class="nav-item active"><a class="nav-link" href="./?p=login"><i class="fas fa-sign-in-alt"></i> LOGIN</a></li>';
          }else{
            echo '<li class="nav-item "><a class="nav-link" href="./?p=login"><i class="fas fa-sign-in-alt"></i> LOGIN</a></li>';
          }
        }
      ?>


    </ul>
    <?php
        if(isset($_SESSION['user_id']) || isset($_SESSION['user_email'])){
          ?>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item active"><a class="nav-link" href="./?p=about"><i class="fas fa-id-badge"></i> ID : <?php echo $_SESSION['user_id'];?></a></li>
          </ul>
          <?php
        }
     ?>
  </div>
      </div>
    </nav>
    <div class="container mt-5 mb-5">
      <?php
        error_reporting(~E_NOTICE);
        if($_GET['p'] == 'home'){
          include("home.php");
        }else if($_GET['p'] == 'login'){
          include("login.php");
        }else if($_GET['p'] == 'challenge'){
          include("challenge.php");
        }else if($_GET['p'] == 'game'){
          include("game.php");
        }else if($_GET['p'] == 'true'){
          include("true.php");
        }else if($_GET['p'] == 'false'){
          include("false.php");
        }else{
          include("home.php");
        }
       ?>
    </div>



  </body>
</html>
