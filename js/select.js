
$(document).ready(function(){
    //$('#lista').val(2);
    recargarLista();
  
    $('#codigo').change(function(){
        recargarLista();
    });
})

function recargarLista(){
    $.ajax({
        type:"POST",
        url:"../conexion/select.php",
        data:"producto=" + $('#codigo').val(),
        success:function(r){
            $('#seleclist').html(r);
        }
    });
}
