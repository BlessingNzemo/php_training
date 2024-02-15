<?php
function sum($message="Lasomme", $a,$b){
    return $message."".($a+$b);
}
echo sum("<i>La somme entre ces deux nombres est:</i>",3,5);
echo "<br>";
echo sum("<i>La somme entre ces deux nombres est:</i>",13,5);
echo "<br>";
echo sum("<i>La somme entre ces deux nombres est:</i>",45,5);
echo "<br>";
echo "<p>".sum("",2,5)
?>