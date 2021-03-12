<?php
//Fichier PHP pour gérer côté server, le traitement du login
require_once(__DIR__."../../../pdo.php");

$data = $_POST;

if (empty($data['pseudo']) ||
    empty($data['password'])) {
    
    die('paramètre manquant');
}

 

 
 
session_start();//démarrage de la session
$pdo = new PDO('mysql:host=127.0.0.1;dbname=minichat;charset=utf8', 'root', '');
// print_r($pdo);
$message = "";
 
if(isset($_POST["pseudo"]))
{//Si le formulaire est vide
    if(empty($_POST["pseudo"]) || empty($_POST["password"]))
    {
        $_SESSION['$message'] = '<label>Veuillez remplir les champs!</label>';
        header("location:../login.php");
    }
    else//sinon, requête préparée
    {
        $sql = "SELECT * FROM login WHERE pseudo = :pseudo AND password = :password";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':pseudo' => $_POST["pseudo"], ':password' => $_POST["password"]));
            $count = $stmt->rowCount();
            if($count > 0)
            {
                $_SESSION["pseudo"] = $_POST['pseudo'];
                header('Location: ../../index.php');
            }
            else
            {
                $message = '<label>Mauvaises données</label>';
            }
        } catch (Exception $e) {
            print "Erreur de lecture! " . $e->getMessage() . "<br/>";
        }
    }

}
header('Location: ../../index.php');
?>