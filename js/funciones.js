$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html, body').animate({
					scrollTop: target.offset().top
					}, 1000);
				return false;
				}
			}  
		});
		

function mostrar(arg){$('#'+arg).attr('style','display:inline;');}
function ocultar(arg){$('#'+arg).attr('style','display:none;');}

function zonasel(arg){
	
	 $.ajax({
            url: 'PHP/zona.php',
            type:'POST',
            data: {id:arg},
            dataType: 'json',
            success: function(output_string){
                    $('#lista').html('')
                    $('#lista').append(output_string);
                    $("#lista").fadeIn();
                    $("#lista").fadeIn("slow");
                    $("#lista").fadeIn(3000);
                    $("#lista").addClass("animated zoomIn");
             } 
            }); 
}

function zonaseli(arg){
	
	 $.ajax({
            url: 'PHP/zonai.php',
            type:'POST',
            data: {id:arg},
            dataType: 'json',
            success: function(output_string){
                    $('#lista').html('')
                    $('#lista').append(output_string);
                    $("#lista").fadeIn();
                    $("#lista").fadeIn("slow");
                    $("#lista").fadeIn(3000);
                    $("#lista").addClass("animated zoomIn");
             } 
            }); 
}

function listapremier(){
     $.ajax({
            url: 'PHP/premier.php',
            type:'GET',
            dataType: 'json',
            success: function(output_string){
                    $('#premier').html('')
                    $('#premier').append(output_string);
                    $("#premier").fadeIn();
                    $("#premier").fadeIn("slow");
                    $("#premier").fadeIn(3000);
                    $("#premier").addClass("animated zoomIn");
             } 
            }); 
}

function listapremieri(){
     $.ajax({
            url: 'PHP/premieri.php',
            type:'GET',
            dataType: 'json',
            success: function(output_string){
                    $('#premier').html('')
                    $('#premier').append(output_string);
                    $("#premier").fadeIn();
                    $("#premier").fadeIn("slow");
                    $("#premier").fadeIn(3000);
                    $("#premier").addClass("animated zoomIn");
             } 
            }); 
}

function listapropv(){
     $('#propiedadr').empty();
     $.ajax({
            url: 'PHP/propv.php',
            type:'GET',
            dataType: 'json',
            success: function(output_string){
                    $('#propiedadv').html('')
                    $('#propiedadv').append(output_string);
                    $("#propiedadv").fadeIn();
                    $("#propiedadv").fadeIn("slow");
                    $("#propiedadv").fadeIn(3000);
                    $("#propiedadv").addClass("animated zoomIn");
             } 
            }); 
}

function listapropr(){
     $('#propiedadv').empty();
     $.ajax({
            url: 'PHP/propr.php',
            type:'GET',
            dataType: 'json',
            success: function(output_string){
                    $('#propiedadr').html('')
                    $('#propiedadr').append(output_string);
                    $("#propiedadr").fadeIn();
                    $("#propiedadr").fadeIn("slow");
                    $("#propiedadr").fadeIn(3000);
                    $("#propiedadr").addClass("animated zoomIn");
             } 
            }); 
}

function listapropvi(){
     $('#propiedadr').empty();
     $.ajax({
            url: 'PHP/propvi.php',
            type:'GET',
            dataType: 'json',
            success: function(output_string){
                    $('#propiedadv').html('')
                    $('#propiedadv').append(output_string);
                    $("#propiedadv").fadeIn();
                    $("#propiedadv").fadeIn("slow");
                    $("#propiedadv").fadeIn(3000);
                    $("#propiedadv").addClass("animated zoomIn");
             } 
            }); 
}

function listapropri(){
     $('#propiedadv').empty();
     $.ajax({
            url: 'PHP/propri.php',
            type:'GET',
            dataType: 'json',
            success: function(output_string){
                    $('#propiedadr').html('')
                    $('#propiedadr').append(output_string);
                    $("#propiedadr").fadeIn();
                    $("#propiedadr").fadeIn("slow");
                    $("#propiedadr").fadeIn(3000);
                    $("#propiedadr").addClass("animated zoomIn");
             } 
            }); 
}

function prop(arg){
	 $.ajax({
            url: 'PHP/target.php',
            type:'POST',
            data: {id:arg},
            dataType: 'json',
            success: function(output_string){
                    $('#propiedad').html('');
                    $('#propiedad').attr('style','position:fixed; border:solid 1px #fff; top:22px; overflow:auto; visibility:inline; z-index:1000; width:100%; background: rgba(0,0,0,0.8); margin-top:80px;');
                    $('#propiedad').append(output_string);
                    $("#propiedad").fadeIn();
                    $("#propiedad").fadeIn("slow");
                    $("#propiedad").fadeIn(3000);
                    $("#propiedad").addClass("animated zoomIn");
             } 
            }); 
}
function cerrarm(){

 $('#propiedad').attr('style','visibility:hidden;');
 $('#propiedad').html('');

}

function cerrari(){

 $('#propiedadesi').attr('style','visibility:hidden;');
 $('#propiedadesi').html('');

}

function confiaprop(){

 $('#confia').attr('style','position:fixed; border:solid 1px #fff; top:40px; padding:40px; overflow:auto; visibility:inline; z-index:1000; width:90%; background: rgba(0,0,0,0.8); margin:80px;');

}

function inverr(arg){
	 $.ajax({
            url: 'PHP/targeti.php',
            type:'POST',
            data: {id:arg},
            dataType: 'json',
            success: function(output_string){
                    $('#propiedadesi').html('');
                    $('#propiedadesi').attr('style','position:fixed; border:solid 1px #fff; top:22px; overflow:auto; visibility:inline; z-index:1000; width:100%; background: rgba(0,0,0,0.8); margin-top:80px;');
                    $('#propiedadesi').append(output_string);
                    $("#propiedadesi").fadeIn();
                    $("#propiedadesi").fadeIn("slow");
                    $("#propiedadesi").fadeIn(3000);
                    $("#propiedadesi").addClass("animated zoomIn");
             } 
            }); 
}