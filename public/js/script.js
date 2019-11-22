$(document).ready(function(){

     $('.alert-info').hide();

     $('.delete').click(function(e){
        e.preventDefault();
        if(!confirm('esta seguro que desea eliminar!!')){

            return false;
        }

        var row  = $(this).parents('tr');
        var form = $(this).parents('form');
        var url  = form.attr('action');

        $('.alert-info').show();

        $.post(url, form.serialize(), function(resul){
          row.fadeOut();
          $('#total').html(resul.total);
          $('.alert-info').html(resul.message());

        }).fail(function(){
            $('.alert-info').html('algo salio mal');
        })
     });
});