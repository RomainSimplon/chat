<?php


require_once(__DIR__."../../../pdo.php");

include '../../RandomColor.php';
use \Colors\RandomColor;
$color = RandomColor::one(array('format'=>'hex'));

$data = $_POST;

if (empty($data['pseudo']) ||
    empty($data['password']) ||
    empty($data['mail']) ||
    empty($data['password_confirm'])) {
    
    die('paramètre manquant');
}

if ($data['password'] !== $data['password_confirm']) {
    die('Password and Confirm password should match!');   
 }

function getIp(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$pseudo = $_POST['pseudo'];
$stmt = $pdo->prepare("SELECT * FROM login WHERE pseudo=?");
$stmt->execute([$pseudo]); 
$user = $stmt->fetch();
if ($user) {
    // le nom d'utilisateur existe déjà
    header("Location: ../../accueil.php?message=le nom d'utilisateur existe déjà");
    
    
} else {
    // le nom d'utilisateur n'existe pas
    $insertStatement = $pdo->prepare("

    INSERT INTO login
    (pseudo, mail, password, ip, color)
    values
    (?, ?, ?, ?, ?)
    ");

$insertStatement->execute([
    $_POST["pseudo"],
    $_POST["mail"],
    $_POST["password"],
    getIp(),
    $color
   
]);
header('Location: ../../accueil.php?message=Votre compte a bien été Créé');
}

 

 







