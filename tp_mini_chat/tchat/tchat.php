<?php
        session_start();

require_once(__DIR__."../../pdo.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="tchatcss.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body style="margin-right: 15px;"> 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OUI</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Fonctionalité <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="tchat.php">TchatOnline</a></li>
          <li><a href="#">Coming Soon</a></li>
          <li><a href="#">Comming Soon</a></li>
        </ul>
      </li>
      <li><a href="#">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../account.php"><span class="glyphicon glyphicon-user"></span> Account</a></li>
      <li><a href="../login/process/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3></h3>
  <p></p>
</div>


 <div class="online">
               <h2>Online :</h2>
                   <?php echo $_SESSION['pseudo'];?>
        </div>


   <div class="container message" id="chat">
   <?
     include 'message.php'
     ?>


   </div>
   <div class="row">
          <!-- <form method="POST" action="process/tchatprocess.php"> -->
         Message <input type="text" name="message" id="msg" >
        <input type="submit" name="submit" onclick="sendMessage()" >
        <!-- </form> -->
       </div>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="js/ajax.js"></script>
</body>
</html>