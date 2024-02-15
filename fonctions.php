<?php
function hello($message="Hello", $nom="Inconnu") {
    return $message.":". $nom; 
    }
  #Une fonction peut avoir des paramètres
echo "<p>".hello("Bonjour", "Sarah")."</p>";
echo "<p>".hello("Comment vas-tu","Jean")."</p>";
echo "<p>".hello("Comment vas-tu", "Hervé")."</p>";
echo "<p>".hello( "Hervé")."</p>";
?>