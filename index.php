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
		<div class="nav-wrapper red darken-4">
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
	  <li><a href="#">Sass</a></li>
	  <li><a href="#">Components</a></li>
	  <li><a href="#">Javascript</a></li>
	  <li><a href="#">Mobile</a></li>
	</ul><!-- FIN UL SIDENAV -->
</header><!-- FIN HEADER -->

	<!-- SECTION SLIDER.Fullscreen -->
	<section>
		<div class="fullscreen">
			<div class="slider">
			    <ul class="slides">
				    <li>
				    	<img src="../PracticasMaterialize/public/img/img1.jpg"> <!-- random image -->
				    	<div class="caption center-align">
				    		<h3 class="orange-text">Otros Subtitulos!</h3>
				    		<h5 class="light orange-text text-lighten-3">Aqui el slogan.</h5>
				    	</div>
				    </li>
				    <li>
				    	<img src="../PracticasMaterialize/public/img/img2.jpg"> <!-- random image -->
				    	<div class="caption left-align">
				    		<h3>Subtitulo Alineado a la Izquierda</h3>
				    		<h5 class="light grey-text text-lighten-3">Aqui el slogan.</h5>
				    	</div>
				    </li>
				    <li>
				    	<img src="../PracticasMaterialize/public/img/img3.jpg"> <!-- random image -->
				    	<div class="caption right-align">
				    		<h3>Subtitulo Alineado a la Derecha</h3>
				    		<h5 class="light grey-text text-lighten-3">Aqui el slogan.</h5>
				    	</div>
				    </li>
				    <li>
				    	<img src="../PracticasMaterialize/public/img/6.jpg"> <!-- random image -->
				    	<div class="caption center-align">
				    		<h3>Otros Subtitulos!</h3>
				    		<h5 class="light grey-text text-lighten-3">Aqui el slogan.</h5>
				    	</div>
				    </li>
			    </ul>
			</div>
		</div>
	</section><!-- FIN SECTION SLIDER.Fullscreen -->

	<!-- DIV CONTAINER I-->
	<div class="container">
		<!-- ROW REGILLAS -->
		<div class="row indigo lighten-5 z-depth-4">
			<!-- DIV COL S12 -->
			<div class="col s12">
				<h4 class="center">
					<em>Sistemas de Regillas <b class="teal-text lighten-2">Materialize CSS.</b></em>
				</h4>
				<hr class="indigo lighten-5 z-depth-1">
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
		</div><!-- FIN DIV COL S12 -->

		<!-- ROW 'card-panel' -->
	    <div class="row indigo lighten-5 z-depth-4">
			<!-- DIV COL S12 -->
			<div class="col s12">	    	
		      <h4 class="center">
		      	<em>Clase 'card-panel' <b class="teal-text">Materialize CSS.</b></em>
		      </h4>
		      <hr class="indigo lighten-5 z-depth-1">
		      <div class="col s12 m4">
		      	<div class="card-panel hoverable z-depth-2">
		      		<div class="col s4 m6 14">
		      			<img class="responsive-img circle" alt="Foto de Perfil" src="../PracticasMaterialize/public/img/perfil.jpg">		      			
		      		</div>
		      		<span>
		      			<h5>oarodriguez</h5>
		      		</span>
		      		<p>
		      			<em>
		      				<u class="truncate">Trabajando los Medias CSS de Materialize Para Perfiles de User's</u>
		      			</em>
		      		</p>
		      	</div>
		      </div>
		      <div class="col s12 m6 19">
			    	<div class="card-panel hoverable grey darken-1 z-depth-2">
			      		<span class="white-text">
			      			<h6>'card-panel' <em>Gris</em> con Materialize CSS.</h6>
			      		</span>
			      		<p class="truncate">Haciendo Uso de la Clase "truncate", para los Puntos Suspensivos.</p>
			    	</div>
		      </div>
		      <div class="col s12 m6 19">
			    	<div class="card-panel hoverable yellow darken-4 z-depth-2">
			      		<span class="white-text">
			      			<h6>'card-panel' <em>Amarillo</em> con Materialize CSS.</h6>
			      		</span>
			      		<p class="truncate">I am convenient because I require little markup to use effectively. I am similar to what i	called a panel in other frameworks.</p>
			    	</div>
		      </div>
	        </div><!-- FIN DIV COL S12 -->
	    </div>

	    <div class="row indigo lighten-5 z-depth-4">
			<!-- DIV COL S12 -->
			<div class="col s12">	    	
		    	<h4 class="center">
		    		<em>Clase 'card-panel' <b class="teal-text">Materialize CSS.</b></em>
		    	</h4>
		    	<hr class="indigo lighten-5 z-depth-1">
			    <div class="col s12 m4 13">
			      	<div class="card-panel hoverable blue darken-3 z-depth-2">
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
			      		<div class="card-panel hoverable cyan darken-3 z-depth-2">
			      			<div class="center">
			      				<i class="fa fa-address-card fa fa-3x" aria-hidden="true"></i>
			      			</div>
			      			<p class="center">Trabajando Clase 'card-panel' con Regillas 's12 m4' dentro de Regillas 's12 m8'</p>
			      		</div>
			    	</div>
			    	<div class="col s12 m4">
			    		<div class="card-panel hoverable teal accent-1 z-depth-2">
			    			<div class="center">
			    				<i class="fa fa-address-card fa fa-3x" aria-hidden="true"></i>
			    			</div>
			    			<p class="center">Trabajando Clase 'card-panel' con Regillas 's12 m4' dentro de Regillas 's12 m8'</p>
			    		</div>
			    	</div>
			    	<div class="col s12 m4">
			    		<div class="card-panel hoverable blue accent-2 z-depth-2">
			    			<div class="center">
			    				<i class="fa fa-address-card fa fa-3x" aria-hidden="true"></i>
			    			</div>
			    			<p class="center">Trabajando Clase 'card-panel' con Regillas 's12 m4' dentro de Regillas 's12 m8'</p>
			    		</div>
			    	</div>
			    </div>
		    </div><!-- FIN DIV COL S12 -->
	    </div>
	    <!-- FIN ROW 'card-panel' -->

	    <!-- ROW FORMULARIO -->
	    <div class="row indigo lighten-5 z-depth-4">
			<!-- DIV COL S12 -->
			<div class="col s12">	    	
		    	<h4 class="center">
		    		Formularios y Tipos de 'inputs' con <em><b class="teal-text">Materializa CSS.</b></em>
		    	</h4>
		    	<hr class="indigo lighten-5 z-depth-1">
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
			</div><!-- FIN DIV COL S12 -->
		</div><!-- FIN ROW FORMULARIO -->

		<!-- DIV. Form example -->
		<div class="row indigo lighten-5 z-depth-4">
			<!-- DIV.COL S12 -->
			<div class="col s12">
				<h4 class="center">Formulario Ejemplo 
					<b class="teal-text"><em>Materialize CSS.</em></b>
				</h4>
				<hr class="indigo lighten-5 z-depth-1">
				<!-- DIV.ROW -->
				<div class="row">
					<!-- DIV.CONTAINER -->
					<div class="container">
						<!-- Form Ejemplo -->
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
						</form><!-- FIN Form Ejemplo -->
					</div><!-- FIN DIV.CONTAINER -->
				</div><!-- FIN DIV.ROW -->
			</div><!-- FIN DIV.COL S12 -->
		</div><!-- FIN DIV Form example -->

		<!--BOTON FLOTANTE I-->
		<div class="fixed-action-btn">
			<a class="btn-floating btn-large pulse red darken-4 z-depth-4">
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
		</div><!--FIN BOTON FLOTANTE I-->

<!--=======================================================================-->

		<!-- DIV Colapsables example -->
		<div class="row indigo lighten-5 z-depth-4">
			<!-- DIV.COL S12 -->
			<div class="col s12">
				<h4 class="center">Colapsables con 
					<b class="teal-text"><em>Materialize CSS.</em></b>
				</h4>
				<hr class="indigo lighten-5 z-depth-1">
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
			</div><!-- FIN DIV.COL S12 -->
		</div><!-- FIN DIV Colapsables example -->

		<!-- DIV Tables example -->
		<div class="row indigo lighten-5 z-depth-4">
			<!-- DIV COL S12 -->
			<div class="col s12">
				<h4 class="center">Tablas & ToolsTips con 
					<b class="teal-text"><em>Materialize CSS.</em></b>
				</h4>
				<hr class="indigo lighten-5 z-depth-1">
				<!-- DIV.Container -->
				<div class="container">
				<br>
					<!-- TABLE -->
					<table class="highlight centered responsive-table">
						<thead>
							<tr>
							    <th>Name</th>
							    <th>Item Name</th>
							    <th>Item Price</th>
							    <th>Acciòn</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Alvin</td>
								<td>Eclair</td>
								<td>$0.87</td>							
								<td>
									<a class="tooltip_left btn-floating btn-large waves-effect cyan darken-2 btn" href="#">
										<i class="fa fa-plus-circle"></i>
									</a>
									<a class="tooltip_right btn-floating btn-large waves-effect cyan darken-2" href="#">
										<i class="fa fa-pencil"></i>
									</a>
								</td>
							</tr>
							<tr>
								<td>Alan</td>
								<td>Jellybean</td>
								<td>$3.76</td>
								<td>
									<a class="tooltip_left btn-floating btn-large waves-effect cyan darken-2" href="#">
										<i class="fa fa-plus-circle"></i>
									</a>
									<a class="tooltip_right btn-floating btn-large waves-effect cyan darken-2" href="#">
										<i class="fa fa-pencil"></i>
									</a>
								</td>
							</tr>
						    <tr>
						    	<td>Jonathan</td>
						    	<td>Lollipop</td>
						    	<td>$7.00</td>
								<td>
									<a class="tooltip_left btn-floating btn-large waves-effect cyan darken-2" href="#">
										<i class="fa fa-plus-circle"></i>
									</a>
									<a class="tooltip_right btn-floating btn-large waves-effect cyan darken-2" href="#">
										<i class="fa fa-pencil"></i>
									</a>
								</td>
						    </tr>
						</tbody>
					</table><!-- FIN TABLE -->		
				</div><!-- FIN DIV.Container -->
			</div><!-- FIN DIV COL S12 -->
		</div><!-- DIV Tables example -->

		<!-- DIV Parallax & Slider -->
		<div class="row indigo lighten-5 z-depth-4">
			<!-- DIV COL S12 -->
			<div class="col s12">
				<h4 class="center">Slider & Parallax con 
					<b class="teal-text"><em>Materialize CSS.</em></b>
				</h4>
				<hr class="indigo lighten-5 z-depth-1">
				<!-- DIV.Container slider-->
				<div class="container">
				<br>		
					<!-- Seccion Slider Example -->
					<section>
						<div class="fullscreen">
							<div class="slider">
							    <ul class="slides">
								    <li>
								    	<img src="../PracticasMaterialize/public/img/depositphotos.jpg"> <!-- random image -->
								    	<div class="caption center-align">
								    		<h3 class="orange-text">Otros Subtitulos!</h3>
								    		<h5 class="light orange-text text-lighten-3">Aqui el slogan.</h5>
								    	</div>
								    </li>
								    <li>
								    	<img src="../PracticasMaterialize/public/img/img1.jpg"> <!-- random image -->
								    	<div class="caption left-align">
								    		<h3>Subtitulo Alineado a la Izquierda</h3>
								    		<h5 class="light grey-text text-lighten-3">Aqui el slogan.</h5>
								    	</div>
								    </li>
								    <li>
								    	<img src="../PracticasMaterialize/public/img/img2.jpg"> <!-- random image -->
								    	<div class="caption right-align">
								    		<h3>Subtitulo Alineado a la Derecha</h3>
								    		<h5 class="light grey-text text-lighten-3">Aqui el slogan.</h5>
								    	</div>
								    </li>
								    <li>
								    	<img src="../PracticasMaterialize/public/img/img3.jpg"> <!-- random image -->
								    	<div class="caption center-align">
								    		<h3>Otros Subtitulos!</h3>
								    		<h5 class="light grey-text text-lighten-3">Aqui el slogan.</h5>
								    	</div>
								    </li>
							    </ul>
							</div>
						</div>
					</section>	<!-- Seccion Slider Example -->

				</div><!-- FIN DIV CONTAINER Slider-->
			</div><!-- FIN DIV COL S12 -->
		</div><!-- FIN DIV Parallax & Slider -->
	</div><!-- FIN DIV CONTAINER I-->

	<!-- PARALLAX -->
	<section>
		<div class="row">
			<!-- DIV.COL S12 -->
		 	<div class="col s12">
				<div class="section white">
					<div class="container">
						<h2 class="header">Parallax imagen 1</h2>
						<p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
					</div>
				</div>
				<div class="parallax-container">
					<div class="parallax"><img src="../PracticasMaterialize/public/img/img1.jpg"></div>
				</div>
				<div class="section white center">
					<div class="container center">
						<h2 class="header">Parallax imagen 2</h2>
						<h6>
							<p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
						</h6>
					</div>
				</div>
				<div class="parallax-container">
					<div class="parallax"><img src="../PracticasMaterialize/public/img/img2.jpg"></div>
				</div>

			</div><!-- FIN DIV.COL S12 -->
		</div><!-- FIN DIV.Row -->
	</section><!-- FIN PARALLAX -->

	<!-- DIV.Container II-->
	<div class="container">
		<!-- DIV Carousel example -->
		<div class="row indigo lighten-5 z-depth-4">
			<!-- DIV COL S12 -->
			<div class="col s12">
				<h4 class="center">Carousel de Imagenes con 
					<b class="teal-text"><em>Materialize CSS.</em></b>
				</h4>
				<hr class="indigo lighten-5 z-depth-1">
				<!-- DIV.Container carousel-->
				<div class="container">
					<div class="carousel center">
				    	<a class="carousel-item" href="#one!">
				    		<img src="../PracticasMaterialize/public/img/img1.jpg">
				    	</a>
				    	<a class="carousel-item" href="#one!">
				    		<img src="../PracticasMaterialize/public/img/img2.jpg">
				    	</a>
				    	<a class="carousel-item" href="#one!">
				    		<img src="../PracticasMaterialize/public/img/img3.jpg">
				    	</a>
				    	<a class="carousel-item" href="#one!">
				    		<img src="../PracticasMaterialize/public/img/6.jpg">
				    	</a>
				    	<a class="carousel-item" href="#one!">
				    		<img src="../PracticasMaterialize/public/img/5.jpg">
				    	</a>
				    	<a class="carousel-item" href="#one!">
				    		<img src="../PracticasMaterialize/public/img/11.jpg">
				    	</a>
				  	</div>
				</div><!-- FIN DIV.Container carousel-->
			</div><!-- FIN DIV COL S12 -->
		</div><!-- DIV Carousel example -->

		<!-- DIV Modal's example -->
		<div class="row indigo lighten-5 z-depth-4">
			<!-- DIV COL S12 -->
			<div class="col s12">
				<h4 class="center">Ventanas Modales con 
					<b class="teal-text"><em>Materialize CSS.</em></b>
				</h4>
				<hr class="indigo lighten-5 z-depth-1">
				  <!-- DIV.Container Modal-->
				  <div class="row">
					  <!-- Modal Trigger -->
					  <div class="col s6">
					  	  <div class="">Href</div>
					  	  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
					  </div>
					  <div class="sol s6">
					  	  <div class="">Buttom</div>
						  <button data-target="modal1" class="btn modal-trigger">Modal</button>
					  </div>
					  <br>
					  <div class="col s6">
					  	  <div class="">Href</div>
					  	  <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Modal</a>
					  </div>
					  <div class="sol s6">
					  	  <div class="">Buttom</div>
						  <button data-target="modal2" class="btn modal-trigger">Modal</button>
					  </div>
					  <br>
					  <div class="col s6">
					  	  <div class="">Href</div>
					  	  <a class="waves-effect waves-light btn modal-trigger" href="#modal3">Modal</a>
					  </div>
					  <div class="sol s6">
					  	  <div class="">Buttom</div>
						  <button data-target="modal3" class="btn modal-trigger">Modal</button>
					  </div>
				  </div>

				  <!-- Modal Structure I-->
				  <div id="modal1" class="modal">
				    <div class="modal-content">
				      <h4>Modal Header</h4>
				      <p>contenido del Modal</p>
				    </div>
				    <div class="modal-footer">
			      		<a href="" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
				    </div>
				  </div><!-- FIN DIV.Container Modal-->

				  <!-- Modal Structure II-->
				  <div id="modal2" class="modal modal-fixed-footer">
				    <div class="modal-content">
				      <h4>Modal Header</h4>
				      <p>contenido del Modal</p>
				    </div>
				    <div class="modal-footer">
			      		<a href="" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
				    </div>
				  </div><!-- FIN DIV.Container Modal-->

				  <!-- Modal Structure III-->
				  <div id="modal3" class="modal bottom-sheet">
				    <div class="modal-content">
				      <h4>Modal Header</h4>
				      <p>contenido del Modal</p>
				    </div>
				    <div class="modal-footer">
			      		<a href="" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
				    </div>
				  </div><!-- FIN DIV.Container Modal-->

			</div><!-- FIN DIV COL S12 -->
		</div><!-- DIV Modal's example -->

		<!-- DIV Modal's example -->
		<div class="row indigo lighten-5 z-depth-4">
			<!-- DIV COL S12 -->
			<div class="col s12">
				<div class="row">
				<h4 class="center">Nueva Sección con 
					<b class="teal-text"><em>Materialize CSS.</em></b>
				</h4>
				<hr class="indigo lighten-5 z-depth-1">

				</div>

			</div><!-- FIN DIV COL S12 -->
		</div><!-- DIV Modal's example -->

	</div><!-- FIN DIV.Container II-->

    <footer class="page-footer red darken-4">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Contacto</h5>
            <p class="grey-text text-lighten-4">Contactanos Enviando un Correo o por Nuestras Redes Sociales.</p>
            
				<div class="input-field col s8">
					<i class="fa fa-envelope-o prefix"></i>
					<input id="mail" type="email" class="validate">
					<label for="mail">Email</label>
					<button class="btn waves-effect waves-light grey darken-4" type="" name="action">Enviar
						<i class="fa fa-send right"></i>
					</button>
				</div>	
			
          	</div>
          <div class="center col l4 offset-l2 s12">
            <h5 class="white-text">Redes Sociales</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" title="facebook" href="#"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a></li>
              <li><a class="grey-text text-lighten-3" title="twiter" href="#"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a></li>
              <li><a class="grey-text text-lighten-3" title="google+" href="#"><i class="fa fa-google-plus-official fa-lg" aria-hidden="true"></i></a></li>
              <li><a class="grey-text text-lighten-3" title="instagram" href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2019 Copyright oarodriguez
        <a class="grey-text text-lighten-4 right" href="#">
        	<i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i>
        	<i class="fa fa-github-square fa-lg" aria-hidden="true"></i>
        </a>
        </div>
      </div>
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
	    /* Inicializacion del ToolsTips */
	    $('.tooltip_left').tooltip({
	    	position: 'left',
	    	html: 'Agregar!',
	    	enterDelay: 200
	    });
	    $('.tooltip_right').tooltip({
	    	position: 'right',
	    	html: 'Editar!',	    	
	    	enterDelay: 200
	    });
	    /* Inicializacion del Slider */
	    $('.slider').slider();
	    /* Inicializacion de Parallax */
	    $('.parallax-container').parallax();
	    /* Inicializacion de Carousel */
	    $('.carousel').carousel();
	    /* Inicializacion del Modal*/
	    $('.modal').modal();


	  });
	  /* Muestra el Ancho de la Ventana al Reducir el Navegador.
	  *
	  * $( window ).resize(function() {
	  * $( "body" ).prepend( "<div>" + $( window ).width() + "</div>" );
	  * });	  
	  */
	</script>
</body>
</html>