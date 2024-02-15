<?php
$a = 5;
$b = 'blessing';
$nom = "Marc";
/*if ($a >= $b) {
    echo "Vrai";
}
elseif (is_int($a)) {
    echo "Numérique";
}
else{
    echo "Faux";
}

switch ($a) {
    case 1:
        echo"A égal 1";
        break;
    case 3: 
        echo "A égal 3";
        break;
    case 5:
        echo "A égal 5";
        break;
    default:

    }
    

$age=19;
$acces=($age>=18) ?"Accès autorisé":"Accès refusé";
echo $acces;

if($age > 18){
    $message = "Adulte";
}
else if($age === 18){
    $message = "Majeur";

    }
else{
    $message = "Mineur";
}
$message = ($age > 18)?"Majeur":(($age === 18)?"Vous etes devenu majeur":"Mineur");

$i = 1;
 while ($i < 7){
    echo"<h$i>".$i."</h$i>";
    $i++;
 }

$i = 1;
do {
    echo"<h$i>".$i."</h$i>"; 
    $i++;
}
while ($i < 7);

    $tab = ["Namibie","Niger", "Soudan"];
    
for ( $i = 1; $i<count($tab) ; $i++ ){
    echo "<h$i>".$tab[$i]."</h$i>";
}
*/
$tab = ["Namibie","Niger", "Soudan"];
foreach( $tab as $pays => $capital ) {
    echo "<h3>$pays:$capital</h3>";

}
?>