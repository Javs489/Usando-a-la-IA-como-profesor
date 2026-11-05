<html>
<body>

<form method="POST">
    Introduce un número:
    <input type="number" name="numero">
    <input type="submit" value="Buscar">
</form>

<?php

$numeros = [5, 7, 3, 8, 10];

if (isset($_POST["numero"]))
     {

 $buscar = $_POST["numero"];
     $encontrado = false;

    foreach ($numeros as $posicion => $numero)
         {

        if ($numero == $buscar) 
            {
            echo "El número está en la posición " . $posicion;
            $encontrado = true;
        }

    }

    if ($encontrado == false) 
        {
        echo "No encontrado";
    }

}

?>

</body>
</html>