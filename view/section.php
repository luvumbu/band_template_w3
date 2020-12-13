<?php 
include("section.html");
  $apple = new Bdd_methode("localhost","root","root","addimage");
  $apple->set_sql('SELECT * FROM `all_picture` WHERE 1');  
  $apple->set_row_array_number("src_img"); // indeice du row a 0  
  // condition si la requette nest pas trouvé 
  $apple->execute();  
  //exemple pour obtenir des informations
  //echo $apple->get_row_array_combine("club_region"); // ecrire directement la valeur recherche avec lindice du row a 0
  //echo $apple->get_number_row_array_result(0);// indice du row a 1
  //echo $apple->get_number_row_array_result(0); 
  
  
  
  //echo $apple->row_array_all();
  //echo $apple->count_row_array_number();

 
  ?>



 
 
 