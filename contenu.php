

<?php
if(isset($_POST['ajout'])){
$in = filter_var ($_POST['ajout'], FILTER_SANITIZE_STRING);

//charger mon json
$data = file_get_contents('todo.json');

//decoder json
$json_arr = json_decode($data, true);

//ajouter les données récoltée dans le contenu de mon json initial        
$json_arr[] = array("tache" => $in);

//enregistrer les modification
file_put_contents('todo.json', json_encode($json_arr));


}
//charger mon json
$data = file_get_contents('todo.json');

//decoder json
$json_arr = json_decode($data, true);

//mise en forme
echo'<h1>TO DO FOUZ</h1>';

echo'
<div class="container">
    <h2>A FAIRE</h2>
    
</div>
';


//définir une variable pour le n°de mes tâches
 $i = 0;
//parcourir et afficher le tableau
 foreach ($json_arr as $key => $value) {

     echo '<div class="content'.$i.' contenant">
      <input type="checkbox" name="check[]" /> - Tache N° ' . $i . ": " . $key["tache"] . 
      ' </div>' ;

      $i++;
  };


 //header('Location: index.php');
?>



