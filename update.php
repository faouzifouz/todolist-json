

<?php
if(isset($_POST['ajout']) && !empty($_POST['ajout'])){
$in = filter_var ($_POST['ajout'], FILTER_SANITIZE_STRING);

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

?>



