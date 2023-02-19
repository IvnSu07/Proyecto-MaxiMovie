<?php

include 'conexion_be.php';

$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//Encriptamiento de contraseña
//$contrasena = hash('sha512', $contrasena);


$query = "INSERT INTO usuarios(correo, usuario, contrasena) 
VALUES('$correo', '$usuario', '$contrasena')";

//verificar que el correo no se repita en la BS

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("este correo ya esta registrado, intenta con otro diferente");
            window.location = "../index.php";
        </script>
    ';
    exit();
};

//verificar que el usuario no se repita en la BS

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
            alert("este usuario ya esta registrado, intenta con otro diferente");
            window.location = "../index.php";
        </script>
    ';
    exit();
};

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../index.php";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Intentelo de nuevo, usuario no almacenado");
        window.location = "../index.php";
    </script>
    ';
};


mysqli_close($conexion);
