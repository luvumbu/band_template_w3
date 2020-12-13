<?php 
include("Mybdd.php");


$filename = 'model/class/php/connexion.php';
if (!file_exists($filename)) {
   // echo "Le fichier $filename existe pas";
    include("config.php"); // demande un tableau des valeurs
    
} else {
  //  echo "Le fichier $filename n'existe pas.";
}
?>