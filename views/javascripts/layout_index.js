$(function(){

// Login
$('#formLoginAgencia').validate({
	  errorLabelContainer: "#messageBox ul",
	  wrapper:'li',
      submitHandler: function(){

        var formData = $('#formLoginAgencia').serialize();
        var action = $('#formLoginAgencia').attr('action');

        var datosPost = formData + "&" + action;
        
        $.ajax({
        	url: 'controllers/controller_index.inc.php',
          	type: 'POST',
          	dataType: 'json',
          	data: datosPost,
          	beforeSend: function(){ 
            	$('#btnLogin').attr('disabled','disabled');
          	},
          	cache:false
        })
        .done(function(response) {
        	if(response.result == true){
        		window.location.reload();
        	}
        	else{
        		alert(response.mensaje);
        	}
        	
        })
        .fail(function() {
        	console.log("error");
        })
        .always(function() {
        	$('#btnLogin').removeAttr('disabled');
        });
        
        return false;
      }
  });
  

  // Logout
	$('body').on('click', '#goLogout', function(event) {
		event.preventDefault();
		
		var action = $('#goLogout').attr('href');

		$.ajax({
			url: 'controllers/controller_index.inc.php',
          	type: 'POST',
          	dataType: 'json',
          	data: action,
          	cache:false
		})
		.done(function(response) {
			if(response.result == true){
				window.location.reload();
			}else{
				alert(response.mensaje);
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});

	});

  // Ocultamos la página inicial y mostramos formulario de búsqueda
  $('#btn-reservar').click(function(event) {
    $(this).addClass('hide');
    $('#carousel-example-captions').addClass('hide');
    $('#searchForm').removeClass('hide');
  });

  // botones de fecha
  $('#search_fecha_inicial').datepicker();
  $('#search_fecha_final').datepicker();

});





