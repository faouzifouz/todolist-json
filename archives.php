<?php
if(isset($_POST['fait'])){
  // parcourir et afficher le tableau

  
  $in=$_POST['fait'];
  //charger mon json
  $data = file_get_contents('todo.json');
  
  //decoder json
  $json_arr = json_decode($data, true);
  
  //ajouter les données récoltée dans le contenu de mon json initial        
  $json_arr[] = array("tache" => $in,
  "bool" => true);
  
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
$task="bool";
if ($task===true){
  $i = 0;
  foreach ($json_arr as $key => $value)) {
 
  echo '<div class="content'.$i.' contenant">
   <input type="checkbox" disabled checked name="fait[]'.$i.'" /> - Tache N° ' . $i . ": " . $value["tache"] .
  '</div>' ;
  $j++;
};
};


?>