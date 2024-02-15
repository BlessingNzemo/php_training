<?php

if (isset($_POST['nom'])&isset($_POST['age'])){

    $nom = trim($_POST['nom']);        
    $age = trim($_POST['age']); 
           
    echo"<p>Nom :".$_POST['nom']."</p>";
    echo"<p>Age :".$_POST['age']."</p>";


}

?>
