<?php
require 'contenu.php';
require 'archives.php';
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
    
    <section>
    <?php
        
    ?>
<form action="index.php" method="post">
  <input class="bt2" type="submit"  name="fait" value="Check" id="bouton"/>

</form>
</section>
<section class="cat1">

<form action="index.php" method="post"> 
    <div class="btbas"><input class="bt1" type="submit" name='ajout' value="+"/></div>
    <input type="text" name="ajout" placeholder="Ajout" class="ajouter"/>       
</form>


</section>
</body>
</html>