<?php
/*$pays = array("RDC", "Israel","France", "Canada");
$pays[5] ="Italie";
unset($pays[2]);
print_r($pays);
*/
$pays = array();
//Tableau multidimensionnel
/*$pays = "Senegal";
$pays = "Egypte";
$pays = "Gambie";
print_r($pays);

$capital["RDC"] = "Kinshasa";
$capital["Angola"] = "Luanda";
$capital["Nigeria"] = "Abuja";

print_r($capital);
*/

//Tableau multidimensionnel
/*$continent = [
    "Afrique"=>["Congo","Gabon", "Mali"],
    "Europe"=>["France","Portugal","Suisse"],
    "Amerique"=>["Canada","Mexique","Panama"],
            ];



echo $continent["Europe"][3];

#$continent["Afrique"][4]="Malawi";

$continent["Asie"]=["Israel","Inde", "Chine"];
print_r($continent);
*/
/*$pays = array("Zambie","Congo", "France", "Chine");
print_r($pays);
asort($pays);
echo "<br>";
print_r($pays);
echo"<br>";
arsort($pays);
print_r($pays);
echo"<br>";
sort($pays);
print_r($pays);
*/
$capitals = ["Congo"=>"Kinshasa","Gabon"=>"Libreville","Canada"=>"Ottawa"];
$tab = array_values($capitals);
//print_r($tab);
echo sizeof($capitals);

?>