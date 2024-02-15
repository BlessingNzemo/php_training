<?php
function somme(...$nums){
    return array_sum($nums)/count($nums);
    
}
echo somme("<i>La somme entre ces deux nombres est:</i>",45,5);
?>