<?php

session_start();

if (isset($_SESSION['usuario'])) {
    header("location: /maximovie.php");
    session_destroy();
}
session_destroy();
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Entrada a MaxiMovie</title>
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>

    <body>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar a la pagina</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Registrate para que puedas iniciar sesión</p>
                        <button id="btn__register">Registrarse</button>
                    </div>
                </div>

                <div class="contenedor__login-register">
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Usuario" name="usuario" />
                        <input type="password" placeholder="Contraseña" name="contrasena" />
                        <button>Entrar</button>
                    </form>

                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo" />
                        <input type="text" placeholder="Usuario" name="usuario" />
                        <input type="password" placeholder="Contraseña" name="contrasena" />
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>
        </main>
        <script src="assets/js/main.js"></script>
    </body>

    </html>