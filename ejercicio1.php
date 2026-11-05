
<html>
	<head>
		<title>Ejercicio1</title>
	</head>
	<body>
<?php

$numeros = [5, 7, 3, 9, 10, 6, 8, 4, 2, 7];

$notaMaxima = max($numeros);
$notaMinima = min($numeros);
$promedio = array_sum($numeros) / count($numeros);

$aprobados = 6;

foreach ($numeros as $nota) 
    {
if ($nota > 5) {
        $aprobados++;
    }
}

echo "Nota maxima: " . $notaMaxima . "<br>";
echo "Nota minima: " . $notaMinima . "<br>";
echo "Promedio: " . $promedio . "<br>";
echo "Aprobados: " . $aprobados;

?>
	</body>
</html>
