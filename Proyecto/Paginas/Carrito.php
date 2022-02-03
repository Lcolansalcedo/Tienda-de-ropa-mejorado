<?php
include 'php/config_Carrito.php';
include 'php/conexion_Carrito.php';



include 'php/ropa.php';
include 'php/Carrito_codigo.php';


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compra</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luxurious+Script&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/af6858df4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estiloPrincipal.css">
    <link rel="stylesheet" type="text/css" href="css/estiloCarrito.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="import" href="Principal.php">
</head>
<body>

  <header>
  <div class="Menu">
            <ul>
            <li><a href="php/cerrar_sesion.php"><i class="fas fa-user"></i> Cerrar Sesion</a> </li>
                <li><a href="#"><i class="fas fa-shopping-cart"></i> Carrito (<?php
                echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);
                ?>)</a></li>
                <li><a href="Principal.php">Volver</a></li>
            </ul>
         </div>
        <div class="filtros">
            <img src="/imagenes/R.png" alt="menu" id="icono-menu">
  
       
         </div>
         <div class="cont-menu active" id="filtro">
           <ul>
               <li><a href="http://localhost:3000/Paginas/Principal.php#Productos">Remeras</a></li>
               <li><a href="/Paginas/Principal.php#Productos">Calzas</a></li>
               <li><a href="/Paginas/Principal.php#Productos">Sombreros</a></li>
               <li><a href="/Paginas/Principal.php#Productos">Pantalon</a></li>
           </ul>

         </div>
        <div class="logo">
           <div><h1>Anaira</h1>
            </div> 
         </div>
     </header>

    <section id="compra" >
        <div id="carrito">
            <?php if(!empty($_SESSION['carrito'])){ ?>
                
               
          
            <table border="1" rules= all>
            <tbody>
            <tr>

            <th >Descripcion</th>
            <th >Cantidad</th>
            <th >Precio</th>
            <th>Total</th>
            <th >--</th>


            </tr>
           <?php $total=0; ?>
    <?php foreach($_SESSION['carrito'] as $indice=>$producto){ ?>
        
        
        
        
        <tr>
<td ><?php echo $producto['NOMBRE']?> </td>
<td  ><?php echo $producto['CANTIDAD']?> </td>
<td><?php echo $producto['PRECIO']?> </td>
<td ><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?> </td>
<td >
    <form action="" method="post">
  <input type="hidden"name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
    <button type="submit" name="comprar" value="Eliminar">Eliminar</button>
    </form>
</td>


</tr>
<?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
        <?php } ?>      
 


<tr>


 <td colspan="3" aling="right" ><h3>Total</h3></td>
 <td align="right" ><h3>$<?php echo number_format($total,2);?></h3></td>
</tr>   

<tr>
    <td colspan="5">
    <form action="php/pagar.php" method="post">
 
<div class="forma-grupo">
            <label for="my-input">Correo de contacto:</label>
            <input type="email " id="email" name="email"class="control" placeholder="escribe tu correo" required>
        </div>
<button class="boton-mail" type="submit" name="pagar" value="proceder">Proceder a pagar</button>
    </form>

        
    </td>
</tr>

         </tbody>  </table>
         <?php  }else{?>
             <div class="alert">No hay productos en el carrito</div>
        <?php } ?>
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
</body>
</html>