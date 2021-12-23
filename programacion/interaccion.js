$(document).ready(function(){

    /*MENÚ*/
    $('.icon').click(function(){
        $('.container__opciones').toggleClass('show');
    });


    /*IMÁGEN */
    document.querySelector('#img-rector').onchange=function(e){
        let reader = new FileReader();
        reader.readAsDataURL(e.target.files[0]);
        reader.onload = function(){
            let preview  = document.getElementById('preview');
            image = document.createElement('img');

            image.src = reader.result;
            preview.innerHTML = '';
            preview.append(image);
        }
    }
    document.querySelector('#img-vice').onchange=function(e){
        let reader1 = new FileReader();
        reader1.readAsDataURL(e.target.files[0]);
        reader1.onload = function(){
            let preview1  = document.getElementById('preview1');
            image = document.createElement('img');

            image.src = reader1.result;
            preview1.innerHTML = '';
            preview1.append(image);
        }
    }


    /*SELECCIONAR OPCIONES */

    var botonRegistrar = document.getElementById('registrar');
    var contenidoRegistrar = document.getElementById('registrar-contenido');
    botonRegistrar.addEventListener('click', function(){
        mostrarRegistrar();
    });

    var botonEditar = document.getElementById('editar');
    var contenidoEditar = document.getElementById('editar-registro');
    botonEditar.addEventListener('click',function(){
        mostrarEditar();
    });
    function mostrarRegistrar(){
        var mostrarRegistro = document.getElementById('registrar-contenido');
        if (contenidoEditar.style.display=="none") {
            mostrarRegistro.style.display="block";
        }else{
            contenidoEditar.style.display="none"
            mostrarRegistro.style.display="block";
            
        }
    }
    function mostrarEditar(){
        var mostrarEditar = document.getElementById('editar-registro');
        if (contenidoRegistrar.style.display=="none") {
            mostrarEditar.style.display="block";
        }else{
            contenidoRegistrar.style.display="none";
            mostrarEditar.style.display="block";
            
        }
    }





    

})