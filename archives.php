<?php
    if(isset($_POST['verifier']) ){

        $task = $_POST['test'];
        $data = file_get_contents("todo.json");
        //--Récupérer le fichier JSON
        $json_arr = json_decode($data, true);
        //--Décoder le fichier JSON en PHP
        $json_arr[] = array("tache" => $task, "bool" => false);

        file_put_contents("todo.json", json_encode($json_arr));
    }
       
?>
 