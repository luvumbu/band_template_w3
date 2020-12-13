<?php
class Bdd_methode {

private $servername ;
private $username ;
private $password ;
private $dbname ; 
private $check=false;
private $row_array_number= array();
private $row_array_name= array();
private $row_array_result= array();
private $row_array_combine= array(); 
private $row_array_all= array();
private $insert_sql;

function set_row_array_all($set){
  array_push($this->row_array_all,$set);
 }
 function get_row_array_all($set){
  return $this->row_array_all[$set];
 }
 function row_array_all(){  
  return count($this->row_array_all);
 }

 function set_row_array_number($set){
  array_push($this->row_array_number,$set);
 }
 function get_number_row_array_number($set){ 
  return $this->row_array_number[$set];
 }
 function count_row_array_number(){  
  return count($this->row_array_number);
 }
 function set_row_array_name($set){
  array_push($this->row_array_name,$set);
 }
 function get_number_row_array_name($set){ 
  return $this->row_array_name[$set];
 }
 function count_row_array_name(){  
  return count($this->row_array_name);
 }

 function set_row_array_result($set){
  array_push($this->row_array_result,$set);
 }
 function get_number_row_array_result($set){ 
  return $this->row_array_result[$set];
 }

 function set_row_array_combine(){
  $this->row_array_combine=array_combine($this->row_array_name,$this->row_array_result);   
 }

 function get_row_array_combine($number){
  return  $this->row_array_combine[$number]; 
}

  function __construct($servername,$username,$password,$dbname) {
    $this->servername= $servername;
    $this->username= $username;
    $this->password= $password;
    $this->dbname= $dbname;
  }
  function get_servername(){
    return $this->servername;
  }
  function get_username(){
    return $this->username;
  }
  function get_password(){
    return $this->password;
  }
  function get_dbname(){
    return $this->dbname;
  }
  function set_ckeck_array(){    
  }

  function set_row(){

  }
  function set_servername($servername){
     $this->servername=$servername;
  }
  function set_username($username){
     $this->username=$username;
  }
  function set_password($password){
     $this->password=$password;
  }
  function set_dbname($dbname){
     $this->dbname=$dbname;
  }
  function set_sql($set_sql){
    $this->set_sql = $set_sql;
  }
  function get_sql(){    
    return $this->set_sql ; 
  }
  function set_bdd_check($bdd_check){
    $this->bdd_check=$bdd_check;
  }
  function set_insert_sql($value){
    $this->insert_sql=$value;
  }
  function get_insert_sql(){
    return $this->insert_sql;
  }

 
  function check_exe(){
    
    try {
 
      $conn = new PDO("mysql:host=$this->servername;dbname=".$this->dbname."", $this->username, $this->password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";      
     $this->check=true;
      $this->alors=9;
    
    
      $this->conn= new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    } catch(PDOException $e) {
     // echo "Connection failed: " . $e->getMessage();
    }
  }
  function execute(){

// verification



// finde la verification
 $this->check_exe(); // test si il ya pas d'erreur
 
 
if($this->check==true){
  $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = $this->get_sql();
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {   //   echo "id: " . $row["club_nom"];      
       
      for($i=0;$i<$this->count_row_array_number();$i++){
  
        $this->set_row_array_name($this->get_number_row_array_number($i));       
        $this->set_row_array_result($row[$this->get_number_row_array_number($i)]);
        $this->set_row_array_all($row[$this->get_number_row_array_number($i)]);
        
      }
      $this->count_row_array_number();
    }
    $this->set_row_array_combine();
  } else {
    
    



    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    $sql = $this->get_insert_sql();

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
// test ici 



// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!xx

$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = $this->get_sql();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {   //   echo "id: " . $row["club_nom"];      
     
    for($i=0;$i<$this->count_row_array_number();$i++){

      $this->set_row_array_name($this->get_number_row_array_number($i));
     
      $this->set_row_array_result($row[$this->get_number_row_array_number($i)]);
      
    }
    $this->count_row_array_number();
  }
  $this->set_row_array_combine();
}
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!xx



} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  }
  $conn->close();
}
else{
 //
}


  }
 
}

// exemple d'utilisation de la class avec la clas à importer

 
/*
$apple = new Bdd_methode("localhost","root","root","bokonzi_all");
$apple->set_sql('SELECT * FROM `club` WHERE 1');

$apple->set_row_array_number("club_id"); // indeice du row a 0 
$apple->set_row_array_number("club_nom"); // indeice du row a 0 
$apple->set_row_array_number("club_region");// indice du row a 1
 
$apple->set_insert_sql("INSERT INTO club (club_nom,club_region,club_departement) 
VALUES ('LMA4','NORD','59000')");
// condition si la requette nest pas trouvé 
$apple->execute();  
//exemple pour obtenir des informations
//echo $apple->get_row_array_combine("club_region"); // ecrire directement la valeur recherche avec lindice du row a 0
//echo $apple->get_number_row_array_result(0);// indice du row a 1
echo $apple->get_number_row_array_result(5);// indice du row a 1



echo $apple->row_array_all();
//echo $apple->count_row_array_number();

*/

 
?>