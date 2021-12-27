$(buscarRector());
function buscarRector(rector) {
    $.ajax({
        url:'buscarRec.php',
        type:'POST',
        dataType:'html',
        data :{rector: rector},
    })
    .done(function(resultado){
        $("form_vice").html(resultado);
    })
}

$(document).on('keyup','#cedula-v',function (){
    var busqueda = $(this).val();
    if(busqueda!=""){
        buscarRector(busqueda);
    }else{
        buscarRector();
    }
    
});