<?php
header("Access-Control-Allow-Origin: *");
$dbname= $_POST["dbname"];
$username= $_POST["username"];
$password= $_POST["password"];
//bokonzi_all
$servername = "localhost";
$n="\n";
$debut="<?php".$n;
$fin="?>".$n;
$nom_file = "connexion.php";


try {
  $conn = new PDO("mysql:host=$servername;dbname=".$dbname, $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $texte=   $debut.$n.'$dbname="'.$dbname.'";'.$n.'$username="'.$username.'";'.$n.'$password="'.$password.'";'.$n.'$servername="'.$servername.'";'.$n.$n.$fin;

  // création du fichier
  $f = fopen($nom_file, "x+");
  // écriture
  fputs($f, $texte );
  // fermeture
  fclose($f);


} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

 

?>