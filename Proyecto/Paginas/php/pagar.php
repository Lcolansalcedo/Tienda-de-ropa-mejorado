<?php
include 'config_Carrito.php';
include 'conexion_Carrito.php';



include 'ropa.php';
include 'Carrito_codigo.php';




?>
<?php 
if($_POST){
$total=0;
$SID= session_id();
$Correo=$_POST['email'];
    foreach($_SESSION['carrito'] as $indice=>$producto){

 $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);

    }

    $sentencia=$pdo->prepare("INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) VALUES (NULL,:ClaveTransaccion, '', NOW(),:Correo, :Total, 'pendiente');");

    $sentencia->bindParam(":ClaveTransaccion",$SID);
    $sentencia->bindParam(":Correo",$Correo);
    $sentencia->bindParam(":Total",$total);
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();
    foreach($_SESSION['carrito'] as $indice=>$producto){

        $sentencia=$pdo->prepare("INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
        VALUES (NULL, :IDVENTA, :IDPRODUCTO,:PRECIOUNITARIO,:CANTIDAD, '0');");
$sentencia->bindParam(":IDVENTA",$idVenta);
$sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
$sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
$sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
$sentencia->execute();
      }
  //  echo "<h3>".$total."</h3>";
}


?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/Paginas/css/pagar.css">
  <title>Pagar</title>
</head>
<body>
  <h1>Ya casi terminamos!!</h1>
  <h3>Su monto total sera de $<?php echo $total; ?></h3>
  <h4>Te enviaremos un mail con la factura y nos pondremos en contacto para finalizar tu comprar</h4>
 <a href="/Paginas/Principal.php">Cancelar</a>
 <a href="/Paginas/Principal.php">Seguir</a>
</body>
</html>