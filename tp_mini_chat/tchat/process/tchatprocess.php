<?php
 session_start();
require_once(__DIR__."../../../pdo.php");






if (empty($_POST['message'])){ 
    
    die('paramètre manquant');
}

$insertStatement = $pdo->prepare("
SELECT * FROM login WHERE pseudo = ?
");

$insertStatement ->execute([
    $_SESSION["pseudo"],
]);
$resultUser = $insertStatement->fetch(PDO::FETCH_ASSOC);
var_dump($resultUser['id']);

$insertStatement = $pdo->prepare("

    INSERT INTO message
    (pseudo, message)
    values
    (?, ?)
    ");

$insertStatement->execute([
    $resultUser["id"],
    $_POST["message"],
    

]);

//header('Location: ../tchat.php');
echo "<script type='text/javascript'>document.location.replace('../tchat.php');</script>";
