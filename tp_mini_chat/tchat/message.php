<?php
require_once '../pdo.php';

   $reponse = $pdo->query(
       'SELECT message.*, login.pseudo, login.id, login.color
       FROM message, login
       WHERE message.pseudo = login.id
       ORDER BY message.created_at Asc
       
       ');
   
   while ($donnees = $reponse->fetch())
   {

   echo '<p><strong><span style="color:'.$donnees['color'].';">' . htmlspecialchars($donnees['pseudo']) . 
   '</span></strong> ' . htmlspecialchars($donnees['message']) . '</p>';


   }
   
   $reponse->closeCursor();
   ?>

   

