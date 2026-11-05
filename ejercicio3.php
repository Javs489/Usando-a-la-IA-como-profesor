<html>
<body>

<form method="POST">
    Introduce una contraseña:
    <input type="text" name="contrasena">
    <input type="submit" value="Comprobar">
</form>

<?php

function comprobar($contrasena) {

if (strlen($contrasena) >= 8 &&
        preg_match('/[0-9]/', $contrasena)
         &&
        preg_match('/[A-Z]/', $contrasena)
    ) 
        {

     echo "Contraseña válida";
    } 
    else 
    {
        echo "Contraseña inválida";

    }

}

if (isset($_POST["contrasena"])) 
    {
    comprobar($_POST["contrasena"]);
}

?>

</body>
</html>