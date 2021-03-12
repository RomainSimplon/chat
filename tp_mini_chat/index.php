<?php
        session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OUI</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Fonctionalité <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="tchat/tchat.php">TchatOnline</a></li>
          <li><a href="#">Coming Soon</a></li>
          <li><a href="#">Comming Soon</a></li>
        </ul>
      </li>
      <li><a href="#">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="account.php"><span class="glyphicon glyphicon-user"></span> Account</a></li>
      <li><a href="login/process/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3></h3>
  <p></p>
</div>

<?php
    
       
        if (isset($_SESSION["pseudo"])) {
            echo '<h3>Connexion réussie, Bienvenue ' . $_SESSION["pseudo"] . '</h3>';
        } else {

          echo "<script type='text/javascript'>document.location.replace('accueil.php?message= conneciton fail, utilisateur inconnue');</script>";
        }
        ?>
</body>
</html>
