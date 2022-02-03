<?php
session_start();

$mensaje= " ";

if(isset($_POST['comprar'])){
    switch($_POST['comprar']){

  case'agregar':

     if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){

        $ID=openssl_decrypt($_POST['id'],COD,KEY);
        $mensaje.="OK... ID correcto".$ID."</br>";


     }else{
        $mensaje.="ups... ID incorrecto"."</br>".$ID; 
     }

     if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
         $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
         $mensaje.="ok nombre".$NOMBRE."</br>";

     }else{
         $mensaje.="upps.. algo pasa con el nombre"."</br>"; break;
     }
     if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){

        $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
        $mensaje.="ok cantidad".$CANTIDAD."</br>";
     }else{
         $mensaje.="upps.. algo pasa con la cantidad"."</br>"; break;
     }

     if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){

        $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
        $mensaje.="ok precio".$PRECIO."</br>";
     }else{
         $mensaje.="upps.. algo pasa con la precio"."</br>"; break;
     }






     if(!isset($_SESSION['carrito'])){
  

        $producto=array(
        
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'CANTIDAD'=>$CANTIDAD,
            'PRECIO'=>$PRECIO,




        );
        $_SESSION['carrito'][0]=$producto;
        $mensaje="Producto agregado al carrito";
     }else{
         $idProductos=array_column($_SESSION['carrito'],"ID");
         if(in_array($ID,$idProductos)){
               
            echo "<script>alert('El producto ya fue seleccionado')</script>";


         }else{
            $NumeroProductos=count($_SESSION['carrito']);
         
            $producto=array(
            
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'CANTIDAD'=>$CANTIDAD,
                'PRECIO'=>$PRECIO,
    
    
    
    
            );
            $_SESSION['carrito'][$NumeroProductos]=$producto;
            $mensaje="Producto agregado al carrito";
         }
        
     }
//$mensaje=print_r($_SESSION,true);

    break;

  case "Eliminar":

    if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
        
        $ID=openssl_decrypt($_POST['id'],COD,KEY);
        $mensaje.="ok id correcto".$ID."<br/>"; 

    foreach($_SESSION['carrito']as $indice=>$producto){
        if($producto['ID']==$ID){
            unset($_SESSION['carrito'][$indice]);
            echo "<script>
            alert('elemento borrado');</script>";

        }

    }
    }else{
        $mensaje.="upps.. id incorrecto".$ID."<br/>";
    }
    break;





    }




}





?>