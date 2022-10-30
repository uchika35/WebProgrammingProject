<!DOCTYPE html>
<html lang="en">
<?php
    if (!isset($_COOKIE["username"]) ){
        header('Location: g-in.php');
        exit();
    }
?>

<meta charset="UTF-8">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutbolKe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
    body{
        background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url("https://img.freepik.com/free-photo/football-scene-stadium-with-close-up-soccer-shoe-kicking-ball_207634-5556.jpg?w=1060");
    background-color: #cccccc;
    background-size: 100% 100%;
    height: 100vh; 
    }

    .row{
        padding-left: %20;
    }
    .card-img-top{
      height: 450px;
    }
</style>
</head>

<body><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">FutbolKe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
  </div>
</nav>
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="https://cdnuploads.aa.com.tr/uploads/Contents/2015/08/13/thumbs_b_c_e2c28c5b5de855608bd5162b6ec9f45b.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><a href="field.php">Rent Field</a></h5>
      <p class="card-text">To rent a field click the link </p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://www.liveabout.com/thmb/0JwDYsaEr3XXn4ksny9KirtQxRY=/1333x1000/smart/filters:no_upscale()/LionelMessiBarcelona-5898d9fe3df78caebca7ac0d.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><a href="player.php">Play</a></h5>
      <p class="card-text">To join a match click the link</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://merriam-webster.com/assets/mw/images/article/art-wap-landing-mp-lg/man-watching-football-at-home-7033-84d73545782891fd80ad66ac9559144a@1x.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><a href="https://www.selcuksportshd78.com/">Watch a match</a></h5>
      <p class="card-text">To watch a live match click the link</p>
      
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>





</body>
</html>