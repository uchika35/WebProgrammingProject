<?php
    if (!isset($_COOKIE["username"]) ){
        header('Location: g-in.php');
        exit();
    }
  
    extract($_POST);
?>
<script>
  function f(){
  
 
    var y=document.getByElementId("approve");
    var x=document.createElement("h1");
    x.position="absolute";
    x.transform=" translate(-50%, -50%)";
    x.top="75%;";
    x.left= "50%";
    x.text-align= "center";
    x.color="#C6DA9C";
    x.value="Your reservation has been made. Good luck!";*/
  }
</script>

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
    height: 100vh; 
    }

    .tableContainer{
    width: 400px;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    text-align: center;    
    width: 400px;
    }
    table{
        width: 400px;
    }
    b{2
        color: #E6B9AF;
    }
    h1{ 
    position: absolute;
    transform: translate(-50%, -50%);
    top: 75%;
    left: 50%;
    text-align: center;
    color:#C6DA9C;
    }
    .center{
      position: absolute;
    transform: translate(-50%, -50%);
    top: 75%;
    left: 50%;
    text-align: center;
    color:#C6DA9C;
    }
</style>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">FutbolKe</a>
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



<div class="tableContainer">
<table class="table table-dark">

  <tbody>  
      <tr>
      <td><b>Region</b></td>
      <td><b>Town</b></td>
      <td><b>Hours</b></td>
      <td><b>Field</b></td>
    </tr> 

    <tr>
    <td><?php echo $region?></td>
    <td><?php echo $town?></td> 
    <td><?php echo $hours?></td>  
    <td><?php echo $field?></td>
    </tr>

  </tbody>
</table>
</div>
<div class="center">
<button class="btn btn-primary" id="approve" onclick="javascript:alert('Your reservation has been made. Good luck!');">Approve</button>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>