<?php
if(isset($_POST['fait'])){
  //parcourir et afficher le tableau

//   $i = 0;
//   $task = foreach ($json_arr as $key => $value) {
  
//   echo '<div class="content'.$i.' contenant">
//    <input type="checkbox" disabled checked name="check[]'.$i.'" /> - Tache N° ' . $i . ": " . $key["tache"] .
//    '</div>' ;
//    $i++;
// };
  
  
  //charger mon json
  $data = file_get_contents('todo.json');
  
  //decoder json
  $json_arr = json_decode($data, true);
  
  //ajouter les données récoltée dans le contenu de mon json initial        
  $json_arr[] = array("archive" => $task);
  
  //enregistrer les modification
  file_put_contents('todo.json', json_encode($json_arr));
  
  
  }
  //charger mon json
  $data = file_get_contents('todo.json');
  
  //decoder json
  $json_arr = json_decode($data, true);
  
  //mise en forme
  echo'
  <div class="container-fluid">
      <h2>FAIT</h2>
      
  </div>';




?>