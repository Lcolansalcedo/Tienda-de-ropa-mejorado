<?php

session_start();
if(isset($_SESSION['usuario']))
{

    header ("location:/Paginas/Principal.php");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Paginas/css/IniciarSesion.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="contenedor__todo">

          <div class="caja__trasera">
              <div class="caja__trasera-login">
                  <h3>ya tienes cuenta?</h3>
                  <p>inicia sesion para entrar en la pagina</p>
                  <button id="btn__iniciar-sesion">Iniciar sesion</button>
              </div>
              <div class="caja__trasera-register">
                  <h3>Aun no  tienes cuenta?</h3>
                  <p>Registrate para iniciar sesion</p>
                  <button id="btn__registrarse">Registrarse</button>
              </div>
          </div>
            <div class="contenedor__login-register">
                 <form action="/Paginas/php/login_usuario.php" method="POST" class="formulario__login">
                   <h2> Iniciar sesion</h2>
                   <input type="text "placeholder="Correo electronico" name="correo">
                   <input type="password" placeholder="contraseña" name="contrasena">
                   <button>entrar</button>


                 </form>
                 
                 <form action="/Paginas/php/registro_usuario_be.php" method="POST" class="formulario__register">
                     <h2>Registrarse</h2>
                     <input type="text"placeholder="Nombre completo" name="nombre_completo">
                     <input type="text" placeholder="correo electronico"name="correo">
                     <input type="text" placeholder="usuario"name="usuario">
                     <input type="password" placeholder="contrañseña" name="contrasena">
                     <button>Registrarse</button>
                 </form>
            </div>
        </div>

    </main>
    <script src="/Paginas/js/iniciarSesion.js"></script>
</body>
</html>