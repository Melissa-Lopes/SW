<?php
$vetor = [];

for($a=0; $a<5; $a++){
    $sorteio= rand(1,10);
    $vetor[$a] = $sorteio;
    echo "O número $vetor[$a] foi sorteado na posição $a do vetor. <br>";
};
?>