<!-- -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 div-meio">

  	<!-- -->
	<div class="container container-meio">

		<!-- -->
    	<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 div-prototipo">
	      <h1 class="titulo-meio">Teste Nosso Protótipo:</h1>

	      <form id="" class="form-prototipo" name="" method="POST" action="" role="form">

	      	<!-- -->
	        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 zerar-padding-all">
		      <label id="label_arquivo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 zerar-padding-all" for="arquivo">ADICIONAR ARQUIVO *: <a id="" class="btn btn-danger btn-padrao btn-sm" type="button">BUSCAR</a></label>
		      <input id="arquivo" class="form-control hidden" type="file" name="arquivo" required onchange="$('#valor').val($(this).val());">
		      <input id="valor" type="text" class="form-control" disabled>
		      <!--[if IE 7]>
		        <input id="arquivo" class="form-control" type="file" name="arquivo" required>
		      <![endif]-->
	          <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 b-compacta zerar-padding-all">
	          	<a class="btn btn-Cinza btn-padrao btn-compacta" type="button" data-element="#div-eft">COMPACTAR</a>
      		  </div>
	        </div>
	        
	        <!-- -->
	        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 div-pro-res div-pro-eft zerar-padding-all" id="div-eft">
	        	<form id="" class="form-prototipo" name="" method="POST" action="" role="form">
    				<label id="label_arquivo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 zerar-padding-all" for="arquivoZK">ARQUIVO COMPACTADO:</label>
		      		<input id="arquivoZK" class="form-control hidden" type="file" name="arquivoZK" required onchange="$('#valor').val($(this).val());">
		      		<input id="valorZK" type="text" class="form-control" disabled>
		      		<a class="btn btn-Cinza btn-padrao pull-right" type="button" onclick="compacta('$('#valorZK').val($(this).val());')">BAIXAR</a>
	        	</form>
	        </div>

	      </form>
	      
	    </div>
	</div>

</div>