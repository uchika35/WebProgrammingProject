<?php
    if (!isset($_COOKIE["username"]) ){
        header('Location: g-in.php');
        exit();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<style>
    
    body{
    background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url("https://img.freepik.com/free-photo/football-scene-stadium-with-close-up-soccer-shoe-kicking-ball_207634-5556.jpg?w=1060");
    background-color: #cccccc;
    background-size: 100% 100%;
    
    }
    .form-row{
        padding: 2% 2%;
    }

    .form-group{
        padding: 2% 2%;
    }
    .center{
        padding-top: 20px;
        justify-content: center;
      text-align: center;
    }
    .all{
        color: white;
    }
</style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index-logedin">FutbolKe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index-logedin.php">Home <span class="sr-only">(current)</span></a>
        </li>
   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>




<form action="fieldResult.php" method="post">

    <div class="all">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" class="form-control" id="Name" placeholder="First name" value="Mark" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" class="form-control" id="Surname" placeholder="Last name" value="Otto" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="Username" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
<div class="input-group mb-4">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Region</label>
  </div>
  <select class="custom-select" id="region" name="region">
    <option selected>Choose...</option>
    <option value="Europa">Europa</option>
  </select>
</div>
<div class="input-group mb-4">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01" >Town</label>
  </div>
  <select class="custom-select" id="town" name="town">
    <option selected>Choose...</option>
    <option value="sariyer">Sarıyer</option>
    <option value="Kadiköy">Kadıköy</option>
    <option value="Beşiktaş">Beşiktaş</option>
    <option value="Şişli">Şişli</option>
  </select>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01" name="field">Field</label>
  </div>
  <select class="custom-select" id="field" name="field">
    <option selected>Choose...</option>
    <option value="Ahmet Football academy">Ahmet Football academy</option>
    <option value="Barça Feild">Barça Feild</option>
    <option value="Reşitpaşa Field">Reşitpaşa Field</option>
  </select>
</div>

<div class="input-group mb-3" style="padding-top:10px;">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01" name="field">Clock</label>
  </div>
  <select class="custom-select" id="hours" name="hours">
    <option selected>Choose...</option>
    <option value="19:00 - 20:00">19:00 - 20:00</option>
    <option value="20:00 - 21:00">20:00 - 21:00</option>
    <option value="21:00 - 22:00">21:00 - 22:00</option>
    <option value="22:00 - 23:00">22:00 - 23:00</option>
    <option value="23:00 - 00:00">23:00 - 00:00</option>
    
  </select>
</div>

<div class="center">
    <button class="btn btn-primary" type="submit">Submit form</button>
</div></form>
</div>
</div>
</div>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>


