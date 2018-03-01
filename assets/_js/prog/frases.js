	//$(document).ready(function() {
		var save_method;
		var base_url = 'http://127.0.0.1/blade/index.php';
		
		$(".btnform").click(function(e){
			//e.preventDefault();
			$('#form')[0].reset(); // reset form on modals
			$('#modal_form').modal('show');
			save_method = 'add';
		});//função abre form
		
	    $(".btn-submit").click(function(e){
	    	//e.preventDefault();
			var formm = $('#form').serialize()
			
			var uri;
			if(save_method == 'add')
			{
			    uri = base_url+'sistema/fraseNova';
			}
			else
			{
				uri = base_url+'sistema/fraseEdt';
			}
			
	        $.ajax({

	            url: uri,//"<?php echo site_url('sistema/fraseNova')?>",
	            type:'POST',
	            dataType: "json",
	            data: formm,
	            success: function(data) {
	                if($.isEmptyObject(data.error)){
	                	$(".print-error-msg").css('display','none');
	                	alert(data.success);
						$("#main" ).load("http://127.0.0.1/blade/sistema/frases #main" );
	                }else{
						$(".print-error-msg").css('display','block');
	                	$(".print-error-msg").html(data.error);
	                }
	            }
	        });

	    });//função salvar 
		
	    $(".btn-edt").click(function(e){
	    	//e.preventDefault();		
			var id = $(this).attr('id');
			save_method = 'update';	
			
			$('#form')[0].reset(); // reset form on modals

			  // Ajax Load data from ajax
			  $.ajax({
				url : base_url+'sistema/fraseId/'+ id,
				type: "GET",
				dataType: "JSON",
				success: function(data)
				{						
					$('[name="idd"]').val(data.a);           
					$('[name="frase"]').val(data.b);           
					$('[name="autor"]').val(data.c);
					$('[name="tag"]').val(data.d);

					$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
					$('.modal-title').text('Editar Frase'); // Set title to Bootstrap modal title
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Ocorreu um erro!');
				}
			});
		});//função carrega dados para edição
		
		$(".btn-del").click(function(e){    
			//e.preventDefault();
			var id = $(this).attr('id');
			
			if(confirm('Tem certeza que deseja excluir esta Frase?'))
			{
				//ajax delete data from database
				  $.ajax({
					url : base_url+'sistema/fraseDel/'+id,
					type: "POST",
					dataType: "JSON",
					success: function(data)
					{              
					   location.reload();
					},
					error: function (jqXHR, textStatus, errorThrown)
					{
						alert('Erro ao deletar dados!');
					}
				});

			}
		});//função deletar

//	});//Fim dcumento