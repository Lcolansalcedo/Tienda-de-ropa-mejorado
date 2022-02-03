
<?php 

 session_start();
 include 'php/config_Carrito.php';
include 'php/conexion_Carrito.php';
include 'php/ropa.php';
include 'php/Carrito_codigo.php';

 if(!isset($_SESSION['usuario'])){
     echo'
     <script>
     alert("Por favor debes iniciar sesion");
    window.location="/Paginas/iniciarSesion.php";
    
    
     </script>
     ';

    
  
 }
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Luxurious+Script&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/af6858df4a.js" crossorigin="anonymous"></script>
    <link rel="import" href="Carrito.php">
    <link rel="stylesheet" type="text/css" href="css/estiloPrincipal.css">
    <link rel="stylesheet" type="text/css"href="css/carrusel.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="/Paginas/css/ropa.css">
    
    <title>Proyecto Beca</title>
</head>
<body >
    
    <header>

        <div class="Menu">
            <ul>
                <li><a href="php/cerrar_sesion.php"><i class="fas fa-user"></i> Cerrar Sesion</a> </li>
                <li><a href="Carrito.php"><i class="fas fa-shopping-cart"></i> Carrito (<?php
                echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);
                ?>) </a></li>
            </ul>
         </div>
        <div class="filtros">
            <img src="/imagenes/R.png" alt="menu" id="icono-menu">
  
       
         </div>
         <div class="cont-menu active" id="filtro">
           <ul>
               <li><a href="#Productos" onclick="mostrarContenido('remeras'),ocultarContenido('calzas'),ocultarContenido('sombreros'),ocultarContenido('pantalones')">Remeras</a></li>
               <li><a href="#Productos"onclick="mostrarContenido('calzas'),ocultarContenido('remeras'),ocultarContenido('sombreros'),ocultarContenido('pantalones')">Calzas</a></li>
               <li><a href="#Productos" onclick="mostrarContenido('sombreros'),ocultarContenido('calzas'),ocultarContenido('remeras'),ocultarContenido('pantalones')">sombreros</a></li>
               <li><a href="#Productos" onclick="mostrarContenido('pantalones'),ocultarContenido('remeras'),ocultarContenido('calzas'),ocultarContenido('sombreros')">pantalon</a></li>
           </ul>

         </div>
        <div class="logo">
           <div><h1  > Anaira</h1>
            </div> 
         </div>

     </header>

    <section id="carrusel">

     <div class="imagenesCarrusel" >
         <img src="/imagenes/verano.jpg" alt="imagen 1" class="img">
         <img src="/imagenes/portada.jpg" alt="imagen 2"class="img">
     </div>

     <ul class="puntos">
         <li class="punto activo"></li>
         <li class="punto"></li>
     </ul>
      </section>
  
    <section id="Productos">
   

  
<div id="calzas">    
    <?php foreach($CALZA1 as $producto1){?>
        <div class="ropa" id="calza1">
          <h3><?php echo $producto1['Precio']; ?></h3>
         <div class="hover">
             <form action="" method="post">
                 <input type="hidden" name="id" id="id"value="<?php echo openssl_encrypt($producto1['ID'],COD,KEY) ; ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto1['Nombre'],COD,KEY) ; ?>">
                 <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto1['Precio'],COD,KEY) ;?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ; ?>">
       <button name="comprar" value="agregar" type="submit">

        <h2>Comprar</h2>
  
       </button>

             </form>
            
         </div>

        </div>

        <?php }?>


        <?php foreach($CALZA2 as $producto2){?>
        <div class="ropa" id="calza2">
        <h3><?php echo $producto2['Precio']; ?></h3>
        <div class="hover">
             <form action="" method="post">
                 <input type="hidden" name="id" id="id"value="<?php echo openssl_encrypt($producto2['ID'],COD,KEY) ; ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto2['Nombre'],COD,KEY) ; ?>">
                 <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto2['Precio'],COD,KEY) ;?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ; ?>">
       <button name="comprar" value="agregar" type="submit">

        <h2>Comprar</h2>
  
       </button>

             </form>
            
         </div>
        </div>


        <?php }?>

        <?php foreach($CALZA3 as $producto3){?>
        <div class="ropa" id="calza3">
        <h3><?php echo $producto3['Precio']; ?></h3>
        <div class="hover">
             <form action="" method="post">
                 <input type="hidden" name="id" id="id"value="<?php echo openssl_encrypt($producto3['ID'],COD,KEY) ; ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto3['Nombre'],COD,KEY) ; ?>">
                 <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto3['Precio'],COD,KEY) ;?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ; ?>">
       <button name="comprar" value="agregar" type="submit">

        <h2>Comprar</h2>
  
       </button>

             </form>
            
         </div>
        </div>


        <?php }?>



     </div>

     <div id="remeras" style="display: none;">

     <?php foreach($REMERA1 as $producto4){?>

        <div class="ropa" id="remera1">
               <h3><?php echo $producto4['Precio']; ?></h3>
               <div class="hover">
             <form action="" method="post">
                 <input type="hidden" name="id" id="id"value="<?php echo openssl_encrypt($producto4['ID'],COD,KEY) ; ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto4['Nombre'],COD,KEY) ; ?>">
                 <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto4['Precio'],COD,KEY) ;?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ; ?>">
       <button name="comprar" value="agregar" type="submit">

        <h2>Comprar</h2>
  
       </button>

             </form>
            
         </div>

        </div>

        <?php }?>

        <?php foreach($REMERA2 as $producto5){?>

        <div class="ropa" id="remera2">
                 <h3><?php echo $producto5['Precio']; ?></h3>
                 <div class="hover">
             <form action="" method="post">
                 <input type="hidden" name="id" id="id"value="<?php echo openssl_encrypt($producto5['ID'],COD,KEY) ; ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto5['Nombre'],COD,KEY) ; ?>">
                 <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto5['Precio'],COD,KEY) ;?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ; ?>">
       <button name="comprar" value="agregar" type="submit">

        <h2>Comprar</h2>
  
       </button>

             </form>
            
         </div>

        </div>

        <?php }?>
     
     
        <?php foreach($REMERA3 as $producto6){?>

        <div class="ropa" id="remera3">
               <h3><?php echo $producto6['Precio']; ?></h3>
               <div class="hover">
             <form action="" method="post">
                 <input type="hidden" name="id" id="id"value="<?php echo openssl_encrypt($producto6['ID'],COD,KEY) ; ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto6['Nombre'],COD,KEY) ; ?>">
                 <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto6['Precio'],COD,KEY) ;?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ; ?>">
       <button name="comprar" value="agregar" type="submit">

        <h2>Comprar</h2>
  
       </button>

             </form>
            
         </div>

        </div>
        <?php }?>


     </div>
   
     <div id="sombreros" style="display: none;"> 
     
     
     <?php foreach($SOMBRERO1 as $producto7){?>

        <div class="ropa" id="sombrero1"> 
                   <h3><?php echo $producto7['Precio']; ?></h3>
                   <div class="hover">
             <form action="" method="post">
                 <input type="hidden" name="id" id="id"value="<?php echo openssl_encrypt($producto7['ID'],COD,KEY) ; ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto7['Nombre'],COD,KEY) ; ?>">
                 <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto7['Precio'],COD,KEY) ;?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ; ?>">
       <button name="comprar" value="agregar" type="submit">

        <h2>Comprar</h2>
  
       </button>

             </form>
            
         </div>
        </div>
        <?php }?>


     <?php foreach($SOMBRERO2 as $producto8){?>
        <div class="ropa" id="sombrero2"> 
                <h3><?php echo $producto8['Precio']; ?></h3>
                <div class="hover">
             <form action="" method="post">
                 <input type="hidden" name="id" id="id"value="<?php echo openssl_encrypt($producto8['ID'],COD,KEY) ; ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto8['Nombre'],COD,KEY) ; ?>">
                 <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto8['Precio'],COD,KEY) ;?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ; ?>">
       <button name="comprar" value="agregar" type="submit">

        <h2>Comprar</h2>
  
       </button>

             </form>
            
         </div></div>


         <?php }?>


         <?php foreach($SOMBRERO3 as $producto9){?>

        <div class="ropa" id="sombrero3">  
             <h3><?php echo $producto9['Precio']; ?></h3>
             <div class="hover">
             <form action="" method="post">
                 <input type="hidden" name="id" id="id"value="<?php echo openssl_encrypt($producto9['ID'],COD,KEY) ; ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto9['Nombre'],COD,KEY) ; ?>">
                 <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto9['Precio'],COD,KEY) ;?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ; ?>">
       <button name="comprar" value="agregar" type="submit">

        <h2>Comprar</h2>
  
       </button>

             </form>
            
         </div>
        </div>

        <?php }?>

      </div>


      <?php foreach($PANTALON1 as $producto10){?>

     <div id="pantalones" style="display: none;">
        <div class="ropa" id="pantalon1">  
            <h3><?php echo $producto10['Precio']; ?></h3>
            <div class="hover">
             <form action="" method="post">
                 <input type="hidden" name="id" id="id"value="<?php echo openssl_encrypt($producto10['ID'],COD,KEY) ; ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto10['Nombre'],COD,KEY) ; ?>">
                 <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto10['Precio'],COD,KEY) ;?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ; ?>">
       <button name="comprar" value="agregar" type="submit">

        <h2>Comprar</h2>
  
       </button>

             </form>
            
         </div>
        
        </div>
        <?php }?>


        <?php foreach($PANTALON2 as $producto11){?>
        <div class="ropa" id="pantalon2"> 
             <h3><?php echo $producto11['Precio']; ?></h3>
        
             <div class="hover">
             <form action="" method="post">
                 <input type="hidden" name="id" id="id"value="<?php echo openssl_encrypt($producto11['ID'],COD,KEY) ; ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto11['Nombre'],COD,KEY) ; ?>">
                 <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto11['Precio'],COD,KEY) ;?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ; ?>">
       <button name="comprar" value="agregar" type="submit">

        <h2>Comprar</h2>
  
       </button>

             </form>
            
         </div>
        
        </div>

        <?php }?>

        <?php foreach($PANTALON3 as $producto12){?>
        <div class="ropa" id="pantalon3">   
            <h3><?php echo $producto12['Precio']; ?></h3> 
        
            <div class="hover">
             <form action="" method="post">
                 <input type="hidden" name="id" id="id"value="<?php echo openssl_encrypt($producto12['ID'],COD,KEY) ; ?>">
                 <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto12['Nombre'],COD,KEY) ; ?>">
                 <input type="hidden" name="precio" id="precio"value="<?php echo openssl_encrypt($producto12['Precio'],COD,KEY) ;?>">
                 <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ; ?>">
       <button name="comprar" value="agregar" type="submit">

        <h2>Comprar</h2>
  
       </button>

             </form>
            
         </div>
        
        </div>
        <?php }?>
     </div>
     </section>

    <footer>
        <div id="redes">
            <ul>
                <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="https://www.instagram.com/leandro_colan2014/"><i class="fab fa-instagram" _mstvisible="2"></i></a></li>
            </ul>
        </div>
        <div id="logotipo"></div>
        <div id="informacion">
            <ul>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Politicas De</a></li>
        
              </ul>
        </div>
        
     </footer>
    <script type="text/javascript" src="/Paginas/js/menu.js"></script>
    <script type="text/javascript" src="/Paginas/js/carrusel.js"></script>
    <script type="text/javascript" src="/Paginas/js/ropa.js"></script>
</body>
</html>