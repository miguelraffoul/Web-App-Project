function datosUnidad(unidad){
	


		var formulario = new FormData($('#formaAgregarUnidad')[0]); //el selector de #formaAgregarCategoria regresa un arreglo de datos, hay que indicarle que se requiere el primer elemento del arreglo.

		
		$.ajax({
			async:false,
			url:'../Model/getTablaUnidades.php',
			type: 'POST',
			success:function(data){
									//alert(data);

								var xmlDoc =  $.parseXML(data),
								$xml = $(xmlDoc),
								$recamaras = $xml.find("recamaras"),
								$banos = $xml.find("bano"),
								$superficie = $xml.find("superficie");
								

							$('input[name=recamaras]').val($recamaras.text());
							$('input[name=banos]').val($banos.text());
							$('input[name=superficie]').val($superficie.text());

					
				
				
				},
			error:function(request,status,error){
													alert(request.statusText);
			},
			data:formulario,
			cache:false, 
			contentType:false,
			processData:false
				}
			);
}

function agregarUnidad(){

	var formulario = new FormData($('#formaAgregarUnidad')[0]);
		
		$.ajax({
			async:false,
			url:'../Model/agregarUnidad.php',
			type: 'POST',
			success:function(data){
					
					alert(data);

				},
			error:function(request,status,error){
													alert(request.statusText);
			},
			data:formulario,
			cache:false, 
			contentType:false,
			processData:false
				}
			);




}

function loadContent(){
	$('#content').empty();
	$('#content').load("./View/information.html");
}

function loadSearchAppartment(){

$('#content').load("./View/searchAppartment.html");
}