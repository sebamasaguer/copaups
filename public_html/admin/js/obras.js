$(document).ready(function(){

	$("#btnNuevaNoticia").on('click', function(){
		$("#nuevaNoticia").modal('show');
	}); 
	$("#btnNuevoFlyer").on('click', function(){
		$("#nuevoFlyer").modal('show');
	}); 
	$("#contenedorNoticias > li").on('click', '#btnEditar', function(){
		var id = $(this).data('id');
		var titulo = $(this).data('titulo');
		var texto = $(this).data('texto');
		var imgn = $(this).data('min'); 
		$("#tituloEditor").val(titulo);
		$("#textoEditor").val(texto);
		$("#idNoticiaEditor").val(id);
		$("#imgNoticiaEditar").attr('src', imgn);
		$("#editarNoticia").modal('show');
		//inserto id de noticia en el modal de editar imagen
		$("#idEditarNoticia").val(id);
		$("#tituloNoticia").text(titulo);
	});
	
	// //descarga e inserta imágenes:
	// function cargarImagenes(){
 //    	var contenedor = $('#contenedorImages');
 //    	//vaciamos las fotos anteriores:
 //    	contenedor.empty();
 //    	//recargamos las imágenes:
 //    	$.ajax({
 //        	url: 'apiImagenes.php',
 //        	method: 'POST',
 //        	data: [
 //        		{
 //        			name: 'acc',
 //        			value: 'getAll',
 //        		},
 //        		{
 //        			name: 'idObra',
 //        			value: $('#idObra').val(),
 //        		}
        		
 //        	],
 //        	success: function(data){
 //        		//console.log(data);
 //        		if(data.length>0){
 //        			$.each(data, function(e, elem){
 //        				//console.log(elem);
 //        				var linea1 = '<a class="example-image-link" href="'+elem.img+'" data-lightbox="example-set" data-title="Obra: '+$('#obraId').val()+'"><img class="example-image" src="'+elem.min+'" alt=""/></a>';
 //        				var linea2 = '<a href="'+elem.img+'" class="icon fa-download" download="img_'+$('#idObra').val()+'"></a>';
 //        				contenedor.append(linea1);
 //        				contenedor.append(linea2);
 //        			});
 //        			/*$.each(data, function(i, elm){

 //        			});*/
 //        		}else{
 //        			contenedor.append('<p>No hay imágenes</p>');
 //        		}
        		
 //        	},
 //        	error: function(error){
 //        		console.log(error);
 //        		alertify.error("¡ocurrió un error!", 3);
 //        	}
 //        });
 //    }

	//$('#').click();//aqui
	//var url = 'server/php/';
	var url = 'images/obras/';
	var uploadButton = $('<button/>')
	    .addClass('btn btn-primary style1')
	    .prop('disabled', true)
	    .text('Procesando...')
	    .on('click', function () {
	        var $this = $(this),
	            data = $this.data();
	        $this
	            .off('click')
	            .text('Abortar')
	            .on('click', function () {
	                //$this.remove();
	                data.abort();
	            });
	        data.submit().always(function () {
	            $this.remove();
	        });
	    });
	    console.log("cargado");
	$('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 999000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Subir')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
    	console.log(data);
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);

                $.ajax({
		        	url: 'apiImagenes.php',
		        	method: 'POST',
		        	data: [
		        		{
		        			name: 'acc',
		        			value: 'add',
		        		},
		        		{
		        			name: 'idObra',
		        			value: $('#idObra').val(),
		        		},
		        		{
		        			name: 'urlImgFull',
		        			value: data.result.files[0].url,
		        		},
		        		{
		        			name: 'urlImgThumb',
		        			value: data.result.files[0].thumbnailUrl,
		        		}
		        		
		        	],
		        	success: function(data){
		        		console.log(data);
		        		if(data.add){
		        			alertify.success("¡almacenado correctamente!", 3);
		        			//$('#files').empty();
		        			//cargarImagenes();
		        		}else{
		        			alertify.error("¡ocurrió un error!", 3);
		        		}
		        	},
		        	error: function(error){
		        		console.log(error);
		        		alertify.error("¡ocurrió un error!", 3);
		        	}
		        });

            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });

        //data.result.files
        
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('Error al subir las imágenes.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');




}); //fin ready