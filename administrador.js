let listElements = document.querySelectorAll('.list__button--click');

listElements.forEach(listElement => {
    listElement.addEventListener('click', ()=>{
        
        listElement.classList.toggle('arrow');

        let height = 0;
        let menu = listElement.nextElementSibling;
        if(menu.clientHeight == "0"){
            height=menu.scrollHeight;
        }

        menu.style.height = `${height}px`;

    })
});

function cambiarcorreo(){
    document.getElementById('dialogo_cambio_correo').style.display = 'block';
    document.getElementById('fondo').style.visibility = 'visible';
}

function cerrardialogo(){
    document.getElementById('dialogo_cambio_correo').style.display = 'none';
    document.getElementById('fondo').style.visibility = 'hidden';
}



function cerrardialogoname(){
    document.getElementById('dialogo_cambio_name').style.display = 'none';
    document.getElementById('fondoOscuro').style.visibility = 'hidden';
}