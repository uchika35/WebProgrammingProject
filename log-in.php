
<!DOCTYPE html>
<html lang="en">
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
    
.loginContainer{
    position: absolute;
    top: 50%;
    left: 50%;
    background-color:rgba(0, 0, 0, 0.5);
    transform: translate(-50%, -50%);
    width: 400px;
}

.loginContainer h1{
    color: #fff;
    text-align: center;
    padding: 0 0 20px 0 ;
    border-bottom: 1px solid silver;
}

.loginContainer form{
    padding: 0 40px;
    box-sizing: border-box;
}

form .txt_field{
    position: relative;
    margin: 30px 0;
    color:#fff;
}

.txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
}

.txt_field label{
    font-size: 20px;
}

.txt_field button{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #849197;
    border-radius: 15px;
}
    </style>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">FutbolKe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="loginContainer">



    <h1>Log In</h1>
<form method="post" action="login.php">
    <div class="txt_field">
   <label>Username</label><br>
   <input type="text" id="username" name="username" placeholder = "User Name" required><br>
   </div>
   <div class="txt_field">
   <label>Password</label><br>
   <input type="password" id="pass" name="pass" placeholder ="Password"><br><br>
   <button type="submit">Log In</button>
   </div>

   
</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
    
</html>