<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Practicas Materialize Css</title>
	<!-- Materialize CSS v -->
	<link rel="stylesheet" href="public/css/materialize.css">
	<!-- Iconos con Font-awesome v-4.7.0 -->
	<link rel="stylesheet" href="public/icons/font-awesome-4.7.0/css/font-awesome.css">
	<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons"> -->
	<link rel="stylesheet" href="public/css/inputs.css">
</head>
<body>

<!-- HEADER -->
<header>
	<!-- NAV -->
	<nav class="z-depth-3">
		<!-- NAV-WRAPPER -->
		<div class="nav-wrapper red darken-4 ">
			<a href="#" class="brand-logo black-text text-lighten-1">
				<i class="fa fa-ravelry fa-lg" aria-hidden="true"></i>
			</a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger">
				<i class="fa fa-bars fa-2x"></i>
			</a>
		    <ul class="right hide-on-med-and-down">
		      <li>
		      	<a class="black-text text-lighten-1" href="#">
		      		Inicio
		      		<i class="fa fa-home fa-2x left"></i>
		      	</a>
		      </li>
		      <li>
		      	<a class="black-text text-lighten-1" href="#">
		      		Acerca
		      		<i class="fa fa-address-book-o fa-2x left"></i>
		      	</a>
		      </li>
		      <li>
		      	<a class="black-text text-lighten-1" href="#">
		      		Contacto
		      		<i class="fa fa-envelope fa-2x left"></i>
		      	</a>
		      </li>
		    </ul>
	  	</div><!-- FIN NAV-WRAPPER -->
	</nav><!-- FIN NAV -->
	<!-- UL SIDENAV -->
	<ul class="sidenav" id="mobile-demo">
	  <li><a href="sass.html">Sass</a></li>
	  <li><a href="badges.html">Components</a></li>
	  <li><a href="collapsible.html">Javascript</a></li>
	  <li><a href="mobile.html">Mobile</a></li>
	</ul><!-- FIN UL SIDENAV -->
</header><!-- FIN HEADER -->

	<!-- DIV CONTAINER -->
	<div class="container">
		<!-- ROW REGILLAS -->
		<div class="row indigo lighten-5 z-depth-4">
			<h4 class="center"><em>Sistemas de Regillas <b class="teal-text lighten-2">Materialize CSS.</b></em></h4>
			<div class="col m12">
				<div class="card-panel teal z-depth-3">
					<span class="white-text">
						Sistema de Rejillas con Materialize "col m12"
					</span>
				</div>
			</div>
			
			<div class="col m6 offset-m6">
				<div class="card-panel teal z-depth-3">
					<span class="white-text">
						Rejillas con Materialize CSS "col m6 offset-m6"
					</span>					
				</div>
			</div>
			<div class="col m6">
				<div class="card-panel teal z-depth-3">
					<span class="white-text">
						Sistema de Rejillas con Materialize "col m6"
					</span>					
				</div>
			</div>
		</div><!-- FIN ROW REGILLAS -->

		<!-- ROW 'card-panel' -->
	    <div class="row indigo lighten-5 z-depth-4">
	    	<h4 class="center"><em>Clase 'card-panel' <b class="teal-text">Materialize CSS.</b></em></h4>
	      <div class="col s12 m6 19">
		    	<div class="card-panel grey darken-1 z-depth-2">
		      		<span class="white-text">
		      			<h6>'card-panel' <em>Gris</em> con Materialize CSS.</h6>
		      		</span>
		      		<p>I am convenient because I require little markup to use effectively. I am similar to what i	called a panel in other frameworks.</p>
		    	</div>
	      </div>
	      <div class="col s12 m6 19">
		    	<div class="card-panel yellow darken-4 z-depth-2">
		      		<span class="white-text">
		      			<h6>'card-panel' <em>Amarillo</em> con Materialize CSS.</h6>
		      		</span>
		      		<p>I am convenient because I require little markup to use effectively. I am similar to what i	called a panel in other frameworks.</p>
		    	</div>
	      </div>
	    </div>

	    <div class="row indigo lighten-5 z-depth-4">
	    	<h4 class="center"><em>Clase 'card-panel' <b class="teal-text">Materialize CSS.</b></em></h4>
		    <div class="col s12 m4 13">
		      	<div class="card-panel blue darken-3 z-depth-2">
		      		<div class="center">
		      			<i class="fa fa-address-card fa fa-3x" aria-hidden="true"></i>
		      		</div>
		        	<span class="white-text">
		        		<h6>'card-panel' <em>Azul</em> con Materialize CSS.</h6>
		        	</span>
		        	<p>Trabajando Clase 'card-panel' con Regillas 's12 m4' de Materialize CSS</p>
		      </div>
		    </div>
		    <div class="col s12 m8 13">
		    	<div class="col s12 m4">
		      		<div class="card-panel cyan darken-3 z-depth-2">
		      			<div class="center">
		      				<i class="fa fa-address-card fa fa-3x" aria-hidden="true"></i>
		      			</div>
		      			<p class="center">Trabajando Clase 'card-panel' con Regillas 's12 m4' dentro de Regillas 's12 m8'</p>
		      		</div>
		    	</div>
		    	<div class="col s12 m4">
		    		<div class="card-panel teal accent-1 z-depth-2">
		    			<div class="center">
		    				<i class="fa fa-address-card fa fa-3x" aria-hidden="true"></i>
		    			</div>
		    			<p class="center">Trabajando Clase 'card-panel' con Regillas 's12 m4' dentro de Regillas 's12 m8'</p>
		    		</div>
		    	</div>
		    	<div class="col s12 m4">
		    		<div class="card-panel blue accent-2 z-depth-2">
		    			<div class="center">
		    				<i class="fa fa-address-card fa fa-3x" aria-hidden="true"></i>
		    			</div>
		    			<p class="center">Trabajando Clase 'card-panel' con Regillas 's12 m4' dentro de Regillas 's12 m8'</p>
		    		</div>
		    	</div>
		    </div>
	    </div>
	    <!-- FIN ROW 'card-panel' -->

	    <!-- ROW FORMULARIO -->
	    <div class="row indigo lighten-5 z-depth-4">
	    	<h4 class="center">
	    		Formularios y Tipos de 'inputs' con <em><b class="teal-text">Materializa CSS.</b></em>
	    	</h4>
	    	<!-- ROW -->
			<div class="row">
				<!-- DIV.CONTAINER -->
				<div class="container">
				  <!-- FORM EXAMPLE -->	
				  <form class="col s12 z-depth-1">
				    <div class="row">
				      <div class="input-field col s4">
				        <i class="fa fa-user prefix"></i>
				        <input id="icon_prefix" type="text" class="validate">
				        <label for="icon_prefix">First Name</label>
				      </div>
				      <div class="input-field col s4">
				        <i class="fa fa-phone prefix"></i>
				        <input id="icon_telephone" type="tel" class="validate">
				        <label for="icon_telephone">Telephone</label>
				      </div>
				      <div class="input-field col s4">
				        <i class="fa fa-envelope prefix"></i>
				        <input id="icon_env" type="tel" class="validate">
				        <label for="icon_env">Email</label>			        
				      </div>			      
				    </div>

					<div class="row">
						<div class="input-field col s12">
							<div class="input-field col s6">
								<input id="email" type="email" class="validate">
								<label for="email">Email</label>
								<span class="helper-text" data-error="Email Invalido" data-success="">Trabajando <b>"textarea"</b> Con mensajes de Validación</span>
							</div>
							<div class="input-field col s6">
								<i class="fa fa-pencil prefix"></i>
								<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
								<label for="icon_prefix2">First Name</label>
								<span class="helper-text" data-error="Email Invalido" data-success="">Trabajando <b>"textarea"</b> con Icono</span>
							</div>						
						</div>
						<!-- TEXTAREA -->
						<div class="input-field col s12">
							<input disabled value="Campo 'input' Deshabilitado" id="disabled" type="text" class="validate">
							<label for="disabled">Disabled</label>
						</div><!-- FIN TEXTAREA -->

						<!-- INPUT FILE -->
						<div class="file-field input-field col s12 m6">
						  <div class="btn">
						    <span>Archivo</span>
						    <input type="file">
						  </div>
						  <div class="file-path-wrapper">
						    <input class="file-path validate" type="text">
						  </div>
						</div>

						<!-- INPUT FILE MULTIPLE -->
						<div class="file-field input-field col s12 m6">
						  <div class="btn">
						    <span>Archivos</span>
						    <input type="file" multiple>
						  </div>
						  <div class="file-path-wrapper">
						    <input class="file-path validate" type="text" placeholder="Carga uno o más Archivos">
						  </div>
						</div><!-- FIN INPUTS FILE -->

						<!-- INPUTS TEXTAREA -->						
						<div class="input-field col s6">
						  <input id="input_text" type="text" data-length="10">
						  <label for="input_text">Input text</label>
						</div>
						<div class="input-field col s6">
						  <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
						  <label for="textarea2">Textarea</label>
						</div><!-- FIN INPUTS TEXTAREA -->
					</div>		    
				  </form><!-- FIN FORM EXAMPLE -->
				</div><!-- FIN DIV.CONTAINER -->
			</div><!-- FIN ROW -->	    	
		</div><!-- FIN ROW FORMULARIO -->

		<div class="row indigo lighten-5 z-depth-4">
			<div class="col s12">
				<h4 class="center">Formulario Ejemplo 
					<b class="teal-text"><em>Materialize CSS.</em></b>
				</h4>

				<div class="row">
					<!-- DIV.CONTAINER -->
					<div class="container">
						<form class="col s12 z-depth-1" name="ejemplo" method="POST" action="">
							<div class="row">
								<div class="input-field col s4">
									<i class="fa fa-user prefix"></i>
									<input id="nam" type="text" class="validate">
									<label for="nam">Nombre</label>
								</div>
								<div class="input-field col s4">
									<i class="fa fa-user prefix"></i>
									<input id="ape" type="text" class="validate">
									<label for="ape">Apellido</label>
								</div>							
								<div class="input-field col s4">
									<i class="fa fa-envelope prefix"></i>
									<input id="corr" type="email" class="validate">
									<label for="corr">Correo</label>			        
								</div>							
							</div>
							<div class="row">
								<div class="input-field col s3">
									<i class="fa fa-id-badge prefix"></i>
									<input id="edad" type="text" class="validate">
									<label for="edad">Edad</label>			        
								</div>
								<div class="input-field col s3">
									<i class="fa fa-mobile-phone prefix"></i>
									<input id="telef" type="tel" class="validate">
									<label for="telef">Tlf Movil</label>
								</div>
								<div class="input-field col s3">
									<i class="fa fa-calendar prefix"></i>
									<input id="fn" type="text" class="datepicker">
									<label for="fn">Fecha Nac.</label>
								</div>
								<div class="input-field col s3">
									<i class="fa fa-clock-o prefix"></i>
									<input id="hn" type="text" class="timepicker">
									<label for="hn">Hora Nac.</label>
								</div>
							</div>
							<!-- ROW RADIO BUTTON -->
							<div class="row">
								<div class="input-field col s3">
									<p><i class="fa fa-venus-mars prefix"></i></p>
								</div>
								<!-- RADIO BUTTON -->
								<div class="col s12">
									<div class="col s12 m2">										
										<label>
											<input class="with-gap" id="gen" name="gen" type="radio">
											<span>M</span>											
										</label>
										<label>
											<input class="with-gap" id="gen" name="gen" type="radio">
											<span>F</span>
										</label>
									</div>

									<!-- SELECT IN FORM -->
									<div class="input-field col s12 m4">
										<select>
											<option value="" disabled selected>Tipo de Vivienda</option>
											<option value="1">Propia</option>
											<option value="2">Alquilada</option>								
										</select>
										<label>Tipo de Vivienda</label>
									</div><!-- FIN SELECT IN FORM -->

									<!-- INPUT FILE -->
									<div class="file-field input-field col s12 m6">
										<div class="btn light-blue accent-1">
											<span>Foto</span>
											<input type="file">
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text">
										</div>
									</div><!-- FIN INPUT FILE -->
								</div><!-- FIN ROW RADIO BUTTON -->
							</div>

							<footer class="center">
								<button class="btn waves-effect waves-light red darken-4" type="" name="action">Enviar
									<i class="fa fa-send right"></i>
								</button>
							</footer><br>							
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="fixed-action-btn">
			<a class="btn-floating btn-large red darken-4 z-depth-4">
				<i class="large fa fa-plus-circle"></i>
			</a>
			<ul>
				<li>
					<a class="btn-floating red">
						<i class="fa fa-group"></i>
					</a>
				</li>
				<li>
					<a class="btn-floating yellow darken-1">
						<i class="fa fa-snowflake-o"></i>
					</a>
				</li>
				<li>
					<a class="btn-floating green">
						<i class="fa fa-handshake-o"></i>
					</a>
				</li>
				<li>
					<a class="btn-floating blue">
						<i class="fa fa-envelope-open-o"></i>
					</a>
				</li>
			</ul>
		</div>

		<div class="row indigo lighten-5 z-depth-4">
			<div class="col s12">
				<h4 class="center">Colapsables con 
					<b class="teal-text"><em>Materialize CSS.</em></b>
				</h4>
				<div class="row">
					<div class="container">
						<ul class="collapsible popout">
							<li>
								<div class="collapsible-header">
									<i class="fa fa-minus-square"></i>Clases ->
									'collapsible' y 'popout'
								</div>
								<div class="collapsible-body">
									<span>
										<code>
											<p>
												Etiqueta: 'ul' Con Clases agregadas: 
												"ul.collapsible popout"
											</p>
											<p>/* Inicializacion con JQuery */</p>
											<p>$('.collapsible').collapsible();</p>
										</code>
									</span>
								</div>
							</li>
							<li>
								<div class="collapsible-header">
									<i class="fa fa-list-alt"></i>Colecciones ->
									Clases 'collection' y 'with-header'
								</div>
								<div class="collapsible-body teal lighten-1">
									<span>
										<div class=" teal">
											<ul class="collection with-header z-depth-2">
												<li class="collection-header grey lighten-2"><h4 class="center">Colecciones</h4></li>
												<li class="collection-item">1</li>
												<li class="collection-item">2</li>
												<li class="collection-item">3</li>
												<li class="collection-item">4</li>
											</ul>											
										</div>
									</span>
								</div>
							</li>
							<li>
								<div class="collapsible-header">
									<i class="fa fa-opera"></i>Opera
									
								</div>
								<div class="collapsible-body">
									<span>Lorem ipsum dolor sit amet.</span>
								</div>
							</li>
						</ul>					
					</div>
				</div>
			</div>
		</div>

	</div><!-- FIN DIV CONTAINER -->

	<footer class="">
	</footer>

	<!-- JQuery JS v-2.2.3 -->
	<script src="public/js/jQuery/jquery-2.2.3.min.js"></script>
	<!-- Materialize JS v -->
	<script src="public/js/materialize.js"></script>
	<!-- script para inicializar el boton menu. -->
	<script>
	  $(document).ready(function(){
	    $('.sidenav').sidenav(); // inicializa el menu en el navbar.

	    /* Inicializa el Contador de Caracteres en los inputs */
	    $('input#input_text, textarea#textarea2').characterCounter();

	    /* Inicializo el Calendario */
	    $('.datepicker').datepicker();
	    /* Inicializo el Calendario para Horas */
	    $('.timepicker').timepicker();
	    /* Inicializo los Select's */
	    $('select').formSelect();
	    /* Inicializo el Boton Flotante */
	    $('.fixed-action-btn').floatingActionButton();
	    /* Inicializo los Colapsibles */
	    $('.collapsible').collapsible();
	  });		
	</script>
</body>
</html>