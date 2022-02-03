const iconoMenu= document.querySelector('#icono-menu'),
      menu=document.querySelector('#filtro');

iconoMenu.addEventListener('click',(e)=>{

    menu.classList.toggle('active');
    document.body.classList.toggle('opacity');
    const rutaActual = e.target.getAttribute('src');

    if(rutaActual == '/imagenes/R.png'){
        e.target.setAttribute('src','/imagenes/R2.png');
    }else{
        e.target.setAttribute('src','/imagenes/R.png');
    }


});