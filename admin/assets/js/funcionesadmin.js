$( document ).ready(function() {

  
});
 function lista_prop(){
    $.ajax({
            url: '../admin/scripts/listaprop.php',
            type:'GET',
            dataType: 'json',
            success: function(output_string){
                    $('#prop').html('')
                    $('#prop').append(output_string);
                    $("#prop").fadeIn();
                    $("#prop").fadeIn("slow");
                    $("#prop").fadeIn(3000);
                    $("#prop").addClass("animated zoomIn");
             } 
            }); 
}
 function lista_propi(){
    $.ajax({
            url: '../admin/scripts/listapropi.php',
            type:'GET',
            dataType: 'json',
            success: function(output_string){
                    $('#prop').html('')
                    $('#prop').append(output_string);
                    $("#prop").fadeIn();
                    $("#prop").fadeIn("slow");
                    $("#prop").fadeIn(3000);
                    $("#prop").addClass("animated zoomIn");
             } 
            }); 
}
 function lista_usuario(){
    $.ajax({
            url: '../admin/scripts/listausuario.php',
            type:'GET',
            dataType: 'json',
            success: function(output_string){
                    $('#prop').html('')
                    $('#prop').append(output_string);
                    $("#prop").fadeIn();
                    $("#prop").fadeIn("slow");
                    $("#prop").fadeIn(3000);
                    $("#prop").addClass("animated zoomIn");
             } 
            }); 
}