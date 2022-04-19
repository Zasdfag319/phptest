<?php 
/*
$tayfa = array('hakan', 'mert', 'buğra', 'raşit');
$sikişenler = array_rand($tayfa, 3); 
echo $tayfa[$sikişenler[0]] . " " . $tayfa[$sikişenler[1]] . " sikti. " . $tayfa[$sikişenler[2]] . " sikildi";	
*/?>

<?php 
$tayfa = array('hakan', 'mert', 'buğra', 'raşit');

$a = rand(0, 3);
$siken = $tayfa[$a];
echo $siken . " ";

unset($tayfa[$a]);
$tayfa = array_values($tayfa);

$b = rand(0, 2);
$sikilen = $tayfa[$b];
echo $sikilen . " sikti. ";

unset($tayfa[$b]);
$tayfa = array_values($tayfa);

$c = rand(0, 1);
$kaynayan = $tayfa[$c];
echo $kaynayan . " sikildi";

?>
<?php/*
//patlak
$tayfa = array('hakan', 'mert', 'buğra', 'raşit');
$a = rand(0, 3);
$b = rand(0, 2);
$c = rand(0, 1);
do{
	$siken = $tayfa[$a];
	$sikilen = $tayfa[$b];
	$kaynayan = $tayfa[$c];
} while ($siken == $sikilen or $sikilen == $kaynayan or $siken == $kaynayan);


echo $siken . " " . $sikilen . " sikti. " . $kaynayan . " sikildi";
*/?>