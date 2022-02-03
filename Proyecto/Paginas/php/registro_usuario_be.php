<?php
include 'conexion_be.php';
  $nombre_completo=$_POST['nombre_completo'];
  $correo=$_POST['correo'];
  $usuario=$_POST['usuario'];
  $contrasena =$_POST['contrasena'];
  $contrasena = hash('sha512',$contrasena);

  $query="INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena) 
          VALUES('$nombre_completo','$correo','$usuario','$contrasena')";
        //verificar q el correo no se repita
      
          $verificar_correo=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo'");
          if(mysqli_num_rows($verificar_correo) > 0){
             echo '

             <script>
              alert("Este correo ya existe");
              window.location= "../iniciarSesion.php";
             </script>
             '  ;
             exit();

          }
        //verificar q el usuario no se repita
          $verificar_usuario=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");
          if(mysqli_num_rows($verificar_usuario) > 0){
             echo '

             <script>
              alert("Este usuario ya existe");
              window.location= "../iniciarSesion.php";
             </script>
             '  ;
             exit();

          }
          $ejecutar =mysqli_query($conexion,$query);
          if($ejecutar){
              echo' <script>
               alert("usuario almacenado exitosamente ");
               window.location="../iniciarSesion.php";
              </script>';
          }else{
            echo' <script>
            alert("usuario no almacenado, intente de nuevo uwu");
            window.location="../iniciarSesion.php";
           </script>';
          }
    mysqli_close($conexion);
?>