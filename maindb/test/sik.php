<?php 

$tayfa = array('hakan', 'mert', 'buğra', 'raşit');
$sikişenler = array_rand($tayfa, 3); 
echo $tayfa[$sikişenler[0]] . " " . $tayfa[$sikişenler[1]] . " sikti. " . $tayfa[$sikişenler[2]] . " sikildi";	
?>