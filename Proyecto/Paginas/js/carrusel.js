'use strict'
const contenedor=document.querySelector('.imagenesCarrusel');
const punto=document.querySelectorAll('.punto');


//cuando hago click en un punto
//saber la posicion de ese punto
//aplicar un transfor translatex al contenedor
//quitar la clase activo a todos los puntos
//añadir la clase activo al pnto que hemos heco click
punto.forEach( ( cadaPunto, i) =>{

    punto[i].addEventListener('click',()=>{
    let posicion =i;
    let operacion=posicion * -50;
         contenedor.style.transform =`translateX(${ operacion }%)`;

       punto.forEach((cadaPunto,i)=>{
          punto[i].classList.remove('activo');

        });
        punto[i].classList.add('activo');

    });
});