<?php
include './update.php';
include './archives.php';

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles.css"/>
    <title>Document</title>
</head>
<body>
    
    
    <h1>TO DO FOUZ</h1>
    <form action="index.php" method="post"> 
        <h2>Tâches</h2>
        <div id="task">
        
        </div> 
        <input class="bt1" type="submit" name='ajout' value="+"/>
        <input type="text" name="ajout" placeholder="Ajout" class="ajouter"/>
        <input type="submit" value="check" name="verifier">       
        <h2>Archives</h2>
        <div id="archive">
      
        </div>
    </form>
    
<script src="./apps.js"></script>
</body>
</html>