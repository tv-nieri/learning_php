<?php
echo "Hoje é dia: " . date('d, m, Y');
echo " agora são: " . date('H:i:s');
echo "<br>";

$data = date('Y-m-d');
$diasemana_numero = date('w', strtotime($data));
if ($diasemana_numero < 6) {
	$num = 6 - $diasemana_numero;
	echo "Faltam " . $num . " para sábado.";
}elseif ($diasemana_numero == 6) {
	echo "Hoje é sábado!";
}else {
	echo "Hoje é domingo!";
}
?>
