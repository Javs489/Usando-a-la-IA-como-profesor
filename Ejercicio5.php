<html>
<body>

<form method="POST">

    <h3>AGENDA</h3>

    1. Buscar contacto<br>
    2. Mostrar todos<br>
    3. Añadir contacto<br>
    4. Salir<br>

    Elige una opción:
    <input type="number" name="opcion">
    <input type="submit" value="Enviar">

    <br>

</form>

<?php

$agenda = [
    "Juan" => "600111111",
    "Ana" => "600222222",
    "Luis" => "600333333"
];

if (isset($_POST["opcion"])) 
    {

    switch ($_POST["opcion"]) 
    {
     case 1:
           echo "Nombre";
            ?>

            <form method="POST">
                <input type="hidden" name="opcion" value="1">
                <input type="text" name="nombre">
                <input type="submit" value="Buscar">
            </form>

            <?php

            if (isset($_POST["nombre"])) 
                {

                if (isset($agenda[$_POST["nombre"]])) 
                    {
                    echo "Teléfono: " . $agenda[$_POST["nombre"]];
                } 
                else 
                {
                    echo "Contacto no encontrado";
                }

            }

        case 2:

            foreach ($agenda as $nombre => $telefono) 
                {
                echo $nombre . ": " . $telefono . "<br>";
            }

        case 3:
            ?>
            <form method="POST">
                <input type="hidden" name="opcion" value="3">
                Nombre: <input type="text" name="nombre"><br>
                Teléfono: <input type="text" name="telefono"><br>
                <input type="submit" value="Añadir">
            </form>
            <?php
            if (isset($_POST["nombre"]) && isset($_POST["telefono"])) 
                {

                $agenda[$_POST["nombre"]] = $_POST["telefono"];

                echo "Contacto añadido";

            }

        case 4:

            echo "Saliendo de la agenda";

            break;

        default:

            echo "Opción incorrecta";

            break;

    }

}

?>

</body>
</html>