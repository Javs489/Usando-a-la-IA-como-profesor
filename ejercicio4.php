<html>
<body>

<form method="POST">
    Introduce una frase:
    <input type="text" name="frase">
    <input type="submit" value="Comprobar">
</form>

<?php

if (isset($_POST["frase"])) 
    {
    $frase = $_POST["frase"];
    $caracteres = strlen($frase);
    $palabras = str_word_count($frase);
    $vocales = 0;
    $letraA = 0;
    for ($i = 0; $i < strlen($frase); $i++)
         {

        if ($frase[$i] == "a" || $frase[$i] == "e" || $frase[$i] == "i" || $frase[$i] == "o" || $frase[$i] == "u") 
            {
            $vocales++;
        }

    }

    echo "Caracteres: " . $caracteres . "<br>";
    echo "Palabras: " . $palabras . "<br>";
    echo "Vocales: " . $vocales . "<br>";
    echo "A: " . $letraA;

}

?>

</body>
</html>