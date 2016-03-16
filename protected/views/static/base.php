<?php include('head-index.php'); ?>


<body id="skrollable" style="width:100%;overflow-x:hidden;">


	<!-- VIDEO DE FONDO -->
	<?php include('video.php'); ?>

	
		<div style="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

		<!--CURVA-->
		
		<img style="  width: 100%;margin-bottom:-1px;" src="img/curva-arriba-home.png" alt="" /><section class="special" data-scrollax-parent="true" style="background:white;min-height:100vh;width:100%;text-align:center;"><div class="" style="display:inline-block;background:white;width:98%;">
					
					<!-- CUATRO ICONOS -->
						
								<!-- 	QUIÉNES SOMOS -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional">
									<img src="img/home-quienes.png" />
									<h1 class="h1-1-home"><?php echo Textos::model()->GetText(6); ?></h1>
									<p class="p-in-h"><?php echo Textos::model()->GetText(7); ?></p>
								</div>
								
								<!--	MISIÓN, VISIÓN Y VALORES -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional" >
									<img src="img/home-mision.png" />		
									<h1 class="h1-1-home mis"><?php echo Textos::model()->GetText(8); ?></h1>			
									<p class="p-in-h"><?php echo Textos::model()->GetText(9); ?></p>									
								</div>
								
								<!--	LUCHA CONTRA AFTOSA -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional">
									<img src="img/home-aftosa.png" />
									<h1 class="h1-1-home mis"><?php echo Textos::model()->GetText(10); ?></h1>
									<p class="p-in-h"> <?php echo Textos::model()->GetText(11); ?></p>											
								</div>
								
								<!--	TRAYECTORIA - HITOS -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional">
									<img src="img/home-trayectoria.png" />
									<h1 class="h1-1-home tray"><?php echo Textos::model()->GetText(12); ?></h1>		
									<p class="p-in-h"><?php echo Textos::model()->GetText(13); ?></p>		
								</div>
						
						
						<!-- CUATRO ICONOS -->
						
						
								<!--	NUESTRAS PLANTAS -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional">
									<img src="img/home-plantas.png" />
									<h1 class="h1-1-home"><?php echo Textos::model()->GetText(14); ?></h1>
									<p class="p-in-h"><?php echo Textos::model()->GetText(15); ?></p>
								</div>
								
								<!--	RSE - SUSTENTABILIDAD -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional" >
									<img src="img/home-rse.png" />		
									<h1 class="h1-1-home mis"><?php echo Textos::model()->GetText(16); ?></h1>			
									<p class="p-in-h"><?php echo Textos::model()->GetText(17); ?></p>									
								</div>
								
								<!-- 	INFO PARA PROVEEDORES -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional" >
									<img src="img/home-proveedores.png" />		
									<h1 class="h1-1-home mis"><?php echo Textos::model()->GetText(18); ?></h1>			
									<p class="p-in-h"><?php echo Textos::model()->GetText(19); ?></p>									
								</div>
								
								<!--	PRENSA -->
								<div  class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item-institucional">
									<img src="img/home-prensa.png" />		
									<h1 class="h1-1-home mis pren"><?php echo Textos::model()->GetText(20); ?></h1>			
									<p class="p-in-h"><?php echo Textos::model()->GetText(21); ?></p>									
								</div>
						
				
				</div>

		</section>
		
		
		</div>
		
		<!--CURVA-->
		<img style=" width: 100%;position:relative;margin-top:-2px;" src="img/curva-home-abajo.png" alt="" style="" />	

		<section class="special" data-scrollax-parent="true" style="background:transparent;min-height:100vh;width:100%;overflow-x:hidden;display:none;">
		<!------------------------------------------------------------------ SECCION 2: FILIALES ------------------------------------------------------------------>			
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom:30px;">
    	
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="mapa-total">
    	 
							<!----- TITULO MAPA --->
							<div id="titulo-mapa">
         		
								<h1> <span class="border-celeste">FI</span>LIALES Y REP. COMERCIALES </h1>
                
							</div> <!-- Termina titulo-mapa -->
 
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="mapa" style="position:relative;z-index:5;">
						
							<img src="img/mapa-png.png" usemap="#img-mapaMap" id="img-mapa" />
						
							<!------- MAPA ----------->
							<map name="img-mapaMap">
								<!--<area class="btn-mapa" idInfo="infoCanada" shape="rect" coords="102,106,165,128" href="#">
								<area class="btn-mapa" idInfo="infoEEUU" shape="rect" coords="99,145,202,166" href="#"> -->
								<area class="btn-mapa" idInfo="infoMexico" shape="rect" coords="88,190,154,209" href="javascript:void(0);">
								<area class="btn-mapa" idInfo="infoCenAm" shape="rect" coords="173,200,275,223" href="javascript:void(0);">
								<area class="btn-mapa" idInfo="infoBrasil" shape="rect" coords="228,253,275,271" href="javascript:void(0);">
								<area class="btn-mapa" idInfo="infoBolivia" shape="rect" coords="166,276,224,293" href="javascript:void(0);">
								<area class="btn-mapa" idInfo="infoUruguay" shape="rect" coords="237,304,302,327" href="javascript:void(0);">
								<area class="btn-mapa" idInfo="infoArgentina" shape="rect" coords="212,326,312,344" href="javascript:void(0);">
							<!--  <area class="btn-mapa" idInfo="infoChina" shape="rect" coords="546,151,594,175" href="#"> -->
							</map>
						
						</div> 
              
						<!------ SCRIPT MAPA ----->
						<?php include('script-mapa.php');?>
             
					<!-- Termina mapa -->
            
			
			<!---------- REFERENCIAS ------------------>
				<div id="referencias" class="col-lg-3 col-md-3 col-sm-3 col-xs-5" style="cursor:default;position:relative;z-index:1;">
					
				
					<!--- REFERENCIA -->			  
						<div id="ref-unica">
					
							<img id="icn-ubicacion" src="img/icn-casa-matriz.png">
					
						<p id="nom-ref"> Casa Matriz </p>
						
					</div> <!-- Termina cada referencia -->
					
					
					<!--- REFERENCIA -->
					<div id="ref-unica">
					
							<img id="icn-ubicacion" src="img/icn-filiales.png">
					
						<p id="nom-ref"> Filiales </p>
						
					</div> <!-- Termina cada referencia -->
					
					
					
					<!--- REFERENCIA -->				
					<div id="ref-unica">
					
							<img id="icn-ubicacion" src="img/icn-vacunas.png">
					
						<p style="margin-bottom:0;" id="nom-ref"> NAFMDVD </p>
						<h6 style="margin:0; margin-left:14px;">  Banco de vacuna </h6>
						<h6 style="display:inline-block; margin-top:3px; margin-left:14px;"> Antiaftosa de Norteamérica </h6>
						
					</div> <!-- Termina cada referencia -->
					
					
					<!--- REFERENCIA -->				
					<div id="ref-unica">
					
							<img style="margin-top:-38px;" id="icn-ubicacion" src="img/icn-janh.png">
					
						<p style="width:81%;" id="nom-ref"> Jinhai Biotechnology Co., Ltd. </p>
						
					</div> <!-- Termina cada referencia -->
					
					
				</div> <!-- Termina total referencias -->
            
			</div> <!-- Termina mapa-total -->
        
        
		
		<!--------------------------- INFORMACIÓN PAÍSES -------------------------------->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="info-mapa">
			
			
				<!--********** MÉXICO **********-->
				<div id="infoMexico" class="info-mapa" style="">
				
					<h2 id="titulo-info-mapa"><img class="band-filiales" src="img/banderitas-09.png"/> México </h2>
			
						<p id="sub-filiales"  class="h4-fil bio" >Biogénesis Bagó de México S.A. de C.V.</p>
						<p  id="sub-filiales" class="h4-fil">Av. Periférico Sur 6677 Piso 5, Delegación Xochimilco, Colonia Ejidos de Tepepan, México DF.</p>
					
						<!-- LINEA SEPARADORA-->
						<div id="separador"></div>
					
						<h3  id="titulo-cont">  TEL </h3> 
						
						<p>(52) (55) 5555 8223 / 5555 8216 <br/>(Llamada sin costo desde el interior del país) 01-800-999-2240</p>
				
				
				
						<h3 id="titulo-dist" class="dist">Distribuidoras: </h3>
			
							<h4> <span id="sub-filiales" class="bold-fil"> México </h4>
							
							<p id="sub-filiales"  class="bold-fil mar"> ELANCO: Eli Lilly y Cía de México S.A. de C.V. </p>
							<p class="mar">Calzada de Tlalpan #2024, Colonia Campestre Churubusco, C.P. 04200, México, D.F. </p>
					
						<!-- LINEA SEPARADORA-->					
						<div id="separador"></div>
					
						<h3  id="titulo-cont">  TEL </h3> 
				
						<p>+52 (33) 3819-5552</p>
						
						<!-- LINEA SEPARADORA-->					
						<div id="separador"></div>
				
						<h3  id="titulo-cont">  CONTACTO </h3> 
						<p>ALONDRA PARTIDA</p>
					
						<!-- LINEA SEPARADORA-->					
						<div id="separador"></div>
				
						<h3  id="titulo-cont">  E-MAIL </h3> 
						<p>mx_servicio_elanco@lilly.com</p>
				
				</div> <!-- Termina info-México-->
		
		
	
				<!--********** CENTRO AMÉRICA **********-->
				
				<div class="info-mapa" id="infoCenAm"> 
					
					<h2 id="titulo-info-mapa">Centro América</h2>
					
						<p id="sub-filiales"  class="h4-fil bio" >Filial Centro América</p>
						
						<p id="sub-filiales"  class="h4-fil bio" >Filial Biogénesis Bagó de Panamá S.A.</p>
	
						<p>Beatriz M. de Cabal y 51. Ciudad de Panamá</p>
			
						<!-- LINEA SEPARADORA-->	
						<div id="separador"></div>
			
						<h3  id="titulo-cont">  TEL </h3> 
						<p>507-4337600/ 212 5513</p>

			
			
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>
			
						<h3  id="titulo-cont"> CONTACTO</h3> 			
						<p>Rocío Ortega</p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>
			

						<h3  id="titulo-cont"> E-MAIL</h3> 			
						<p> crocio.ortega@reimar.net </p>
			
			
			
						<h3 id="titulo-dist" class="dist">Distribuidoras: </h3>
							
							<h4> <span id="sub-filiales" class="bold-fil"> Panamá </h4>
							
							<p id="sub-filiales"  class="bold-fil mar">  Importaciones El Universo. </p>
							
							<p class="mar">Calle Ppal Llano Bonito, Juan Díaz - Edificio Imp. El Universo. Apartado Postal 0838-02057 Zona 12, Panamá. </p>	
			
				</div> <!-- Termina info-Centro América-->
		
		
		
		
				<!--********** BRASIL**********-->
				
				<div class="info-mapa" id="infoBrasil">
					
					<h2 id="titulo-info-mapa"><img class="band-filiales" src="img/banderitas-03.png"/> Brasil </h2>
	
							<p id="sub-filiales"  class="h4-fil bio" >BIOGÉNESIS BAGÓ SAÚDE ANIMAL LTDA.</p>
							<p  id="sub-filiales" class="h4-fil">Av. Manoel Ribas 985 Conj 58 5° Andar <br /> Bairro Mercês <br /> Curitiba. Paraná. Brasil </p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>

						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p> vendas@biogenesisbago.com</p>						
				
				</div> <!-- Termina info-brasil-->
			
			
			
				<!--********** BOLIVIA**********-->		
				
				<div class="info-mapa" id="infoBolivia">
			
					<h2 id="titulo-info-mapa"><img class="band-filiales" src="img/banderitas-10.png"/> Bolivia </h2>
					
						<p id="sub-filiales"  class="h4-fil bio" >Biogénesis Bagó Bolivia S.A.</p>
	
						<p  id="sub-filiales" class="h4-fil">Barrio Equipetrol, Calle 8 Este La Plata nº 3. Santa Cruz de la Sierra – Bolivia. </p>

			
						<!-- LINEA SEPARADORA-->							
						<div id="separador"></div>
						
						<h3  id="titulo-cont">  TEL </h3> 
						<p>591 33453017 – 33419806</p>
			
						
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>
			
						<h3  id="titulo-cont"> CONTACTO</h3> 			
						<p>Maritza Cespedes</p>
						
			
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>
			
			
						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p> maritza.cespedes@biogenesisbago.com</p>								
		
				</div> <!-- Termina info-bolivia-->
		
		
		
				<!--********** URUGUAY**********-->		
				
				<div class="info-mapa" id="infoUruguay"> 
					
					<h2 id="titulo-info-mapa"><img class="band-filiales" src="img/banderitas-17.png"/> Uruguay</h2>
	
						<p id="sub-filiales"  class="h4-fil bio" >Biogénesis Bagó Uruguay S.A.</p>	
						
						<p  id="sub-filiales" class="h4-fil">Francisco Acuña de Figueroa 2119 (detras del Anexo del Palacio Legislativo), Montevideo, Uruguay. </p>
			
			
						<!-- LINEA SEPARADORA-->						
						<div id="separador"></div>
			
						
						<h3  id="titulo-cont">  TEL </h3> 
						<p>(59) (82) 924 - 9878 / 0800 8263</p>			
			
			
						<!-- LINEA SEPARADORA-->		
						<div id="separador"></div>
			
			
						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p> infouruguay@biogenesisbago.com </p>									
		
				</div> <!-- Termina info-uruguay-->
		
		
		
				<!--********** ARGENTINA **********-->		
			
				<div class="info-mapa" id="infoArgentina">
			
					<h2 id="titulo-info-mapa"><img class="band-filiales" src="img/banderitas-01.png"/> Argentina </h2>
	
						<p id="sub-filiales"  class="h4-fil bio" >Casa Matriz Argentina</p>	
						
						<p  id="sub-filiales" class="h4-fil">Ruta Panamericana Km 38,5, Garín - Prov. de Bs. As. Argentina.</p>
						
						
						
						<!-- LINEA SEPARADORA-->	 
						<div id="separador"></div>
			
						
						<h3  id="titulo-cont">  TEL </h3> 
						<p>03327-448300 | 0800-555-5678</p>			
			
						
						<!-- LINEA SEPARADORA-->	        
						<div id="separador"></div>
			
			
						<h3  id="titulo-cont">   E-MAIL  </h3> 	
						<p> info@biogenesisbago.com  </p>								
				
				</div> <!-- Termina info-argentina-->
		
		
				</div> <!-- Termina info-mapa -->
			
			</div>       
	</section>
	
	<img style="width: 100%;position:relative;margin-bottom:-1px;display:none;" src="img/curva-celeste.png" alt="" />	
	
	<section class="special" data-scrollax-parent="true" style="background: rgb(129, 206, 231); min-height:100vh;width:100%;overflow-x:hidden;position:relative;display:none;" >

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  id="info-tec" style="overflow:hidden;padding-bottom:30px;">

				<!--////// TITULO /////-->
				<div id="titulo-info" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
					<h2 id="titulo"><img class="icono-menu right" src="img/icono-rrhh.png">INFORMACIÓN TÉCNICA<img src="img/icono-rrhh.png" class="icono-menu left"></h2>
					<div class="border"></div>
				
				</div> <!--Termina titulo-info -->
        
		
				<!--////// MENÚ /////-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="menu">
					
					<ul id="list-menu">

						<li class="col-lg-2 col-md-3 col-sm-4 col-xs-4"><a  id="opcion1" href="javascript:void(0)"> Trabajos técnicos </a></li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-xs-4"><a  id="opcion2" href="javascript:void(0)"> Planes Sanitarios </a></li>
						<li class="col-lg-2 col-md-3 col-sm-4 col-xs-4" ><a id="opcion3" href="javascript:void(0)"> Planillas de trabajo </a></li>             
					
					</ul> 
					
					<!-- borde-->
					<div> <img src="img/linea-info-tecnica.png" alt=""  class="b-l"/> </div>
				
				</div> <!--Termina menú --> 
				
				
				<!-- /////////////////++++++  CONTENEDOR ++++++ /////////////////  -->
      			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="noticias">
        
		
					<!-- ///////////////// TRABAJOS TÉCNICOS /////////////////  -->
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="noticias-trabajos">
            	
						<!-- ***** NOTICIA ***** -->
						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" id="texto">
                
							<h4 id="fecha-info-tec"> 2015 </h4>
                    
							<h2 id="titulo-info-tec"> Octubre </h2>
                    
							<h5 id="protocolo-info-tec"> Uso de vacunas bioabortogen h y bioleptogen reduce la perdida de preñez entre 30 y 60 dias en vaquillonas de carne</h5>
                    
							<p id="resumen-noticias"> El objetivo del estudio fue validar el efecto del uso de las vacunas reproductivas Bioabortogen H® y Bioleptogen® (protección contra IBR, BVD... </p>
                    
							<h3><a href="#" id="leer-mas"> Leer más </a></h3>
                
						</div> <!-- Termina noticia -->      
                 
				 
				 
						<!-- ***** NOTICIA ***** -->
						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" id="texto">
                
							<h4 id="fecha-info-tec"> 2015 </h4>
                    
							<h2 id="titulo-info-tec"> Julio </h2>
                    
							<h5 id="protocolo-info-tec"> Vacunación estratégica contra Diarrea Viral Bovina (BVD), Rinotraqueitis infecciosa Bovina (IBR) y Leptospirosis mejora la tasa de preñez en protocolos de IATF en vacas raza Nelore  </h5>
                    
							<p id="resumen-noticias"> El impacto negativo de algunas enfermedades como BVD, IBR y... </p>
                    
							<h3 style="margin-top: 17%;"><a href="#" id="leer-mas"> Leer más </a></h3>
                
						</div> <!-- Termina noticia --> 
                 
				 
				 
						<!-- ***** NOTICIA ***** -->			 
						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" id="texto">
                
							<h4 id="fecha-info-tec"> 2015 </h4>
                    
							<h2 id="titulo-info-tec"> Octubre </h2>
                    
							<h5 id="protocolo-info-tec"> Utilización de vacuna Escherichia coli J5 en la inmunización de vacas lecheras contra mastitis causada por E. coli¹   </h5>
                    
							<p id="resumen-noticias"> Se evaluó la utilización de una  vacuna de Escherichia coli J5, en la inmunización de vacas lecheras, para la prevención y control de la mastitis causada... </p>
                    
							<h3><a href="#" id="leer-mas"> Leer más </a></h3>
                
						</div> <!-- Termina noticia --> 
                 
                 
   
					</div> <!-- Termina texto-completo -->  
            
			
			
			
			
					<!-- ///////////////// PLANES SANITARIOS /////////////////  -->
				    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="noticias-planes">
        			
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="archivos-descargas">
							
							<!--***** DESCARGA ***** -->
							<div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-4 col-md-4 col-sm-4 col-xs-3" id="titulo-archivo"> TAMBO </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="#" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                   
                       
							<!--***** DESCARGA ***** -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-4 col-md-4 col-sm-4 col-xs-3" id="titulo-archivo"> CRÍA </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="#" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
					   
							<!--***** DESCARGA ***** -->					   
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-4 col-md-4 col-sm-4 col-xs-3" id="titulo-archivo"> RECRÍA </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="#" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
					   </div>
					   <div>
							<!--***** DESCARGA ***** -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-7 col-md-7 col-sm-7 col-xs-3" id="titulo-archivo"> FEED-LOT </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="#" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
					   
					   
							<!--***** DESCARGA ***** -->					   
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-7 col-md-7 col-sm-7 col-xs-3" id="titulo-archivo"> Ovino Central y Norte </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="#" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
							
							<!--***** DESCARGA ***** -->					   
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-7 col-md-7 col-sm-7 col-xs-3" id="titulo-archivo"> Ovino Central y Norte </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="#" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
							
                       </div>
                    
						</div>
  
					</div> <!-- Termina texto-completo -->  
					
					
        
				<!-- ///////////////// PLANILLAS DE TRABAJO /////////////////  -->
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="noticias-planillas">
     
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="archivos-descargas">
							
							<!--***** DESCARGA ***** -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-4 col-md-4 col-sm-4 col-xs-3" id="titulo-archivo"> TAMBO </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="#" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                   
                       
							<!--***** DESCARGA ***** -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-4 col-md-4 col-sm-4 col-xs-3" id="titulo-archivo"> CRÍA </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="#" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
					   
							<!--***** DESCARGA ***** -->					   
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-4 col-md-4 col-sm-4 col-xs-3" id="titulo-archivo"> RECRÍA </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="#" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
					   
							<!--***** DESCARGA ***** -->
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-7 col-md-7 col-sm-7 col-xs-3" id="titulo-archivo"> FEED-LOT </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="#" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
					   
					   
							<!--***** DESCARGA ***** -->					   
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" id="descarga-margin">
                        
								<img class="col-lg-5 col-md-5 col-sm-5 col-xs-3 img-d" src="img/descarga-archivos.png"/>
                            
								<h3 class="col-lg-7 col-md-7 col-sm-7 col-xs-3" id="titulo-archivo"> Ovino Central y Norte </h3>
                            
								<p><a  class="col-lg-4 col-md-4 col-sm-4 col-xs-3" href="#" id="descarga-link"> Descargar </a></p>
                            
							</div> <!-- Termina cada descarga-->
                       
                    
						</div>
  
					</div> <!-- Termina texto-completo -->  
			
			
			
			
					<!-------- SECCION MÁS DE TRABAJOS TÉCNICOS -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="seccion-mas">
					
						<div id="btn-mas" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
							<img id="img-btn-mas" src="img/btn-mas.png"/>
							<p id="texto-btn-mas"> Trabajos técnicos </p>
							
							<div id="img-slide">
							
								<img src="img/slide-info-tec.png"/>
								<img src="img/slide-info-tec.png"/>
								<img src="img/slide-info-tec.png"/>
							
							</div> <!-- Termina imagen slide -->
					
						</div> <!-- Termina btn-mas -->
					
					</div> <!-- Termina seccion-mas -->      
        
				</div> <!-- Termina noticias -->

			</div> <!-- Termina contenido -->


		</section>

		<!--CURVA-->	
		<img style="width: 100%;position:relative;margin-top:-1px;display:none;" src="img/curva-celeste-abajo.png" alt="" />		
		<section class="special col-lg-12 col-md-12 col-sm-12 col-xs-12" data-scrollax-parent="true" style="min-height:100vh;width:100%;">
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
			
			<div id="contenido-vad" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
					
					<!-- /////// TITULO  /////// -->
					<div id="vade" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<img class="icono-menu" src="img/icono-rrhh.png"><h2 id="titulo-vad">VADEMÉCUM</h2><img src="img/icono-rrhh.png" class="icono-menu">
							<div class="border-vad"></div>
					</div> <!--Termina título vademécum-->
					
					
					<!-- /////// VADEMÉCUM  /////// -->
					<div class="col-lg-10 col-md-11 col-sm-12 col-xs-12" id="botones" >
				
						<!-- ******* AFTOSA ******** -->
						<div id="botonera-af" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id1">
				
									<div class="botonVademecum-Af"style=""> 
		
											<div class="outerLine-Af"style="">
											<p id="nom-btn">AFTOSA</p>
									</div>
		
									</div>
					
								</a>          
				
						</div> <!-- Termina botonera-af-->
		
		
						<!-- ******* ANTIBIÓTICOS ******** -->		
						<div id="botonera-ant" class="col-lg-3 col-md-3 col-sm-3 col-xs-6"> 
							
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id6">
							
								<div class="botonVademecum-Ant"style=""> 
			
									<div class="outerLine-Ant"style="">
										<p id="nom-btn">ANTIBIÓTICOS</p>
									</div>
			
								</div>
								
							</a>  
							
						</div> <!-- Termina botonera-ant-->
		
		
						<!-- ******* ANTIPARASITÁRIOS EXTERNOS ******** -->	
						<div id="botonera-int" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id4">
							
								<div class="botonVademecum-Int"style=""> 
			
									<div class="outerLine-Int"style="">
										<p id="nom-btn">ANTIPARASITÁRIOS INTERNOS</p>
									</div>
			
								</div>
								
							</a>  
			
						</div> <!-- Termina botonera-int -->
		
		
						<!-- ******* ANTIPARASITÁRIOS INTERNOS ******** -->	
						<div id="botonera-ext" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id3">
							
								<div class="botonVademecum-Ext"style=""> 
			
									<div class="outerLine-Ext"style="">
										<p id="nom-btn">ANTIPARASITÁRIOS EXTERNOS</p>
									</div>
			
								</div>
								
							</a>  
							
						</div> <!-- Termina botonera-ext -->
		
		
						<!-- ******* BIOLÓGICOS ******** -->	
						<div id="botonera-bio" class="col-lg-3 col-md-3 col-sm-3 col-xs-6"> 
						
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id2">
								
								<div class="botonVademecum-Bio"style=""> 
			
									<div class="outerLine-Bio"style="">
										<p id="nom-btn">BIOLÓGICOS</p>
									</div>
			
								</div>
							
							</a>  
	
						</div> <!-- Termina botonera-bio -->
		
		
						<!-- ******* ENDECTOCIDAS ******** -->	
						<div id="botonera-ende" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id5">
								
								<div class="botonVademecum-Ende"style=""> 
			
									<div class="outerLine-Ende"style="">
										<p id="nom-btn">ENDECTOCIDAS</p>
									</div>
			
								</div>
								
							</a>  
							
						</div> <!-- Termina botonera-ende -->
		
		
						<!-- ******* FARMACÉUTICOS ******** -->	
						<div id="botonera-farma" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id9">
								
								<div class="botonVademecum-Farma"style=""> 
			
									<div class="outerLine-Farma"style="">
										<p id="nom-btn">FARMACÉUTICOS</p>
									</div>
			
								</div>
										
							</a>    
							
						</div> <!-- Termina botonera-farma -->
		
		
						<!-- ******* NUTRICIÓN ******** -->	
						<div id="botonera-nutri" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
						
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id11">
								
								<div class="botonVademecum-Nutri"style=""> 
			
									<div class="outerLine-Nutri"style="">
										<p id="nom-btn">NUTRICIÓN</p>
									</div>
			
								</div>
								
							</a>     
	
						</div> <!-- Termina botonera-nutri -->
		
		
						<!-- ******* REPRODUCTIVOS ******** -->	
						<div id="botonera-repro" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id7">
								
								<div class="botonVademecum-Repro"style=""> 
			
									<div class="outerLine-Repro"style="">
										<p id="nom-btn">REPRODUCTIVOS</p>
									</div>
			
								</div>
							
							</a>  
	
						</div> <!-- Termina botonera-repro -->
		
		
						<!-- ******* SALUD AMBIENTAL ******** -->	
						<div id="botonera-amb" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
							
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id10">
							
								<div class="botonVademecum-Sal-Amb"style=""> 
				
									<div class="outerLine-Sal-Amb"style="">
										<p id="nom-btn">SALUD AMBIENTAL</p>
									</div>
				
								</div>
								
							</a> 
	
						</div> <!-- Termina botonera-amb -->
		
		
						<!-- ******* VITAMINAS Y MINERALES ******** -->	
						<div id="botonera-vit-min" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
						
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/vademecum/id8">
							
								<div class="botonVademecum-Vit-Min"style=""> 
			
									<div class="outerLine-Vit-Min"style="">
										<p id="nom-btn">VITAMINAS Y <BR/> MINERALES</p>
									</div>
			
								</div>
								
							</a>
					
						</div> <!-- Termina botonera-vit-min -->
		
		
					<!-- ///////  BUSCADOR /////// -->	
						<div id="buscar" style="display:none;">
							<div id="botonera-buscar" class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
								<div class="input-group">
									<span>
										<input class="input-vad" type="text" placeholder="">
									</span>
							
									<span class="input-group-btn">
										<button class="btn btn-default" id="btn-buscar" type="button"> </button>
									</span>
								</div><!-- /input-group -->
							</div><!-- /.col-lg-6 -->
						</div><!-- /.row -->

					</div> <!-- Termina buscar -->

			</div> <!--Termina botones-->
			
		</div><!--Termina el row-->    
		</section>
		
		
		<!-- SCRIPT CARROUSEL -->
	
		<?php include('carrousel.php'); ?>
		
		<!--CURVA-->			
		<img style="width: 100%;position:relative;margin-bottom:-2px;display:none;" src="img/curva-home.png" alt="" />
	
	
		<!------------------------------------------------------------------ SECCION 5: REVISTA EL MOLINO ------------------------------------------------------------------>	
		<section class="special col-lg-12 col-md-12 col-sm-12 col-xs-12" data-scrollax-parent="true" style="min-height:100vh;background: rgba(0, 0, 0, 0.62);width:100%;overflow-x:hidden;padding-bottom:30px;display:none;">

			
	
				<div class="col-lg-12 col-md-12">
					
					<!-- /////////// REVISTA EN TOTAL ///////// -->
					<div id="ver-revista" class="col-lg-12 col-md-12"  style="background:white; padding-bottom: 4%;">	
						
						<!-- IMAGEN REVISTA-->
						<img class="col-lg-6 col-md-6"  id="img-rev" src="img/30-478x620.png"/>
		
						<!-- INFORMACIÓN REVISTA -->
						<div id="info-revista" class="col-lg-6 col-md-6">
	
							<h1><span class="border-tit">R</span>EVISTA EL MOLINO</h1>
		
							<p id="p-1"> Información calificada sobre escenarios productivos, avances tecnológicos y protagonistas destacados en el desarrollo de América Latina.</p>
		
							<p id="p-2">08 de Octubre de 2015</p>
		
							<h2 id="h2-1">Fronteras Productivas </h2>
		
							<p id="p-3">Conozca las últimas novedades y tendencias en nuestro especial "Fronteras Productivas"</p>
		
							<div class="btn-">
								<a href="#"><button type="button" id="btn-rev">Leer revista</button></a>
							</div> <!--Termina btn-->
		
						</div> <!--Temrina info revista -->
	
					</div> <!--Termina la vista de la revista-->
					
					<script src="js/jquery.boxloader.min.js"></script>	
						<script type="text/javascript">
							
							$("#img-rev").boxLoader({
								direction:"x",
								position: "-50%",
								effect: "fadeIn",
								duration: "2s",
								windowarea: "50%"
							}); 
						
							
							$("#info-revista").boxLoader({
								direction:"x",
								position: "50%",
								effect: "fadeIn",
								duration: "2s",
								windowarea: "50%"
							}); 
							
						</script>
	
					<!-- //////// CARROUSEL //////// -->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div id="slider1" class="row col-lg-12 col-xs-12"> 
							
						<!-- BOTON ANTES / IZQUIERDA /PREV -->
						<a class="buttons prev" href="#">&#60;</a>
						
						
						<!--******* CONTENEDOR ****** -->
						<div class="viewport">
						
							<!-- LISTA REVISTAS -->
							<ul class="overview">
								
								<!-- ITEM REVISTA-->
								<li>
								
									<!-- img -->
									<div class="rev-30"> </div> 
								
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">22 de D</span>iciembre de 2015</p>
										<h3 class="tit-rev">MOLINO 30: Dieta y alimentación. Nos vamos para arriba </h3>
										<p class="desc-rev">Un plan recomendado por especialistas para evitar o dismunuir pérdidas cuando las lluvias intensas llegan al campo. Guías y ...</p>
									</section>
									
								</li><!-- termina item -->
							
							
								<!-- ITEM REVISTA-->							
								<li>
								
									<!-- img -->
									<div class="rev-29"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">19 de N</span>oviembre de 2015</p>
										<h3 class="tit-rev">MOLINO 29: Protagonistas del cambio </h3>
										<p class="desc-rev">En este número especial conozca el rol que asumen los veterinarios frente a las oportunidades de mejorar los índices ...</p>
									</section>
									
								</li><!-- termina item -->
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-28"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">01 de O</span>ctubre de 2015</p>
										<h3 class="tit-rev">MOLINO 28: El desafío de llegar a la Frontera Productiva </h3>
										<p class="desc-rev">Conozca las últimas novedades y tendencias en nuestro especial "Fronteras Productivas"</p>
									</section>
									
								</li> <!-- termina item -->
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-27"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">15 de D</span>iciembre de 2014</p>
										<h3 class="tit-rev">MOLINO 27 </h3>
										<p class="desc-rev">El desafío Chino</p>
									</section>
									
								</li><!-- termina item -->
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-26"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">26 de A</span>gosto de 2014</p>
										<h3 class="tit-rev">MOLINO 26 - Cría Bovina</h3>
										<p class="desc-rev">El primer eslabón de la cadena ganadera tiene mucho que mejorar en cuestión de eficiencia productiva. Los países del Cono ...</p>
									</section>
									
								</li><!-- termina item -->
								
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-25"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">01 de M</span>arzo de 2014</p>
										<h3 class="tit-rev">MOLINO 25: Las razas del futuro</h3>
										<p class="desc-rev">Brangus y Braford se afianzan en el norte argentino y crecen exponencialmente en Paraguay, Uruguay y Brasil por sus...</p>
									</section>
									
								</li><!-- termina item -->
								
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-24"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">01 de J</span>unio de 2013</p>
										<h3 class="tit-rev">MOLINO 24: Combustible para la Carne </h3>
										<p class="desc-rev">El auge de los biocombustibles generó inversiones para lograr etanol a partir de maíz. En este proceso también se obtiene ...</p>
									</section>
									
								</li><!-- termina item -->
								
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-23"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">01 de D</span>iciembre de 2012</p>
										<h3 class="tit-rev">MOLINO 23: Un escenario heterogeneo </h3>
										<p class="desc-rev">La lechería en el Mercosur atraviesa un buen momento,aunque con diferencias en el resultado para los productores ...</p>
									</section>
									
								</li><!-- termina item -->
				
								
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-22"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">01 de J</span>unio de 2012</p>
										<h3 class="tit-rev"> MOLINO 22: GANADERÍA Buen tiempo para invertir </h3>
										<p class="desc-rev">Momento ideal para proyectar el futuro y prepararse para el despegue...</p>
									</section>
									
								</li><!-- termina item -->
								
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-21"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">26 de D</span>iciembre de 2011</p>
										<h3 class="tit-rev">MOLINO 21: GANADERÍA. La potencia de la región </h3>
										<p class="desc-rev">Productores ganaderos del Mercosur apuestan por una producción sustentable para responder a ...</p>
									</section>
									
								</li><!-- termina item -->
								
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-20"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">07 de J</span>unio de 2011</p>
										<h3 class="tit-rev">MOLINO 20: GANADERÍA. El pulmón de todo un pueblo</h3>
										<p class="desc-rev">En la ciudad bonaerense de Rauch, esta actividad es la columna vertebral que..</p>
									</section>
									
								</li><!-- termina item -->
								
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-19"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">28 de D</span>iciembre de 2010</p>
										<h3 class="tit-rev">MOLINO 19: Dieta y alimentación. Nos vamos para arriba</h3>
										<p class="desc-rev">No se puede faenar animales de menos de 300 kilos. Habrá que diseñar nuevas estrategias para lograrlo de una manera ...</p>
									</section>
									
								</li><!-- termina item -->
								
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-18"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">20 de J</span>ulio de 2010</p>
										<h3 class="tit-rev">MOLINO 18: Terneros. La cría resentida  </h3>
										<p class="desc-rev">Luego de tres años de sequía, los productores buscan las alternativas para lograr más terneros y aumentar la oferta de ...</p>
									</section>
									
								</li><!-- termina item -->
								
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-17"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">15 de A</span>bril de 2010</p>
										<h3 class="tit-rev">MOLINO 17: Pensar en verde. Producción agropecuaria, sociedad y ambiente  </h3>
										<p class="desc-rev">Conceptos básicos para diseñar un desarrollo sustenteble. Porque lo que es malo para la producción también lo es para el ...</p>
									</section>
									
								</li><!-- termina item -->
								
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-16"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">27 de D</span>iciembre de 2009</p>
										<h3 class="tit-rev">MOLINO 16: Estrés calórico. Escapándole al rayo de sol </h3>
										<p class="desc-rev">Llegan las temperaturas altas y el tambo puede empezar a perder productividad. Aquí ofrecemos recomendaciones para ...</p>
									</section>
									
								</li><!-- termina item -->
								
								
								
								<!-- ITEM REVISTA-->								
								<li>
								
									<!-- img -->
									<div class="col-lg-4 col-sm-4 rev-15"> </div> 
									
									<!-- texto -->
									<section class="info-rev">
										<p class="fech-rev"><span class="border-2">27 de S</span>eptiembre de 2009</p>
										<h3 class="tit-rev">MOLINO 15: Ante el avance de la agricultura. Ganaderia por ambientes </h3>
										<p class="desc-rev">Los productores de punta ya ponen en práctica este manejo que les permite diferenciar cargas y prever la producción ...</p>
									</section>
									
								</li><!-- termina item -->
								
							</ul> <!-- termina listado revista -->
							
						</div> <!-- termina contenedor revista -->
						
						<!-- BOTON DESPUÉS / DERECHA /NEXT -->
						<a class="buttons next" href="#">&#62;</a>
						
					</div><!--termina Carousel-->
				</div>
						
				</div> <!--Termina contenido-->
				
				
			
		</section>
		
		
		<!------------------------------------------------------------------ SECCION 6: RRHH ------------------------------------------------------------------>
		
		<section class="special col-lg-12 col-md-12 col-sm-12 col-xs-12" data-scrollax-parent="true" style="min-height:100vh;width:100%;background-color: white;overflow:hidden;height:auto;display:none;"  id="back-rrhh">
	
			<!--*************  CONTENEDOR PRINCIPAL *********** -->
		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  "  id="header-rrhh" style="z-index:10;text-align:center;height:auto;">     	
				<img src="img/fondo-obelisco.png" style="position:absolute;height:100vh;z-index:-2;display:inline-block;">
				<!-- ////////////// HEADER //////////// -->
				<div id="titulo-info" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-rrhh-home" style="height:25vh;position:relative;z-index:10;">
					
					
						
						<!-- TITULO-->
						<img class="icono-menu right" src="img/icono-rrhh.png"><h2 id="titulo-vad"><span class="border-vad-2">RRHH</span> </h2><img src="img/icono-rrhh.png" class="icono-menu left">
	
							<!-- TEXTO HEADER-->
							<h3 class="tr">TRABAJA CON NOSOTROS</h3>
							<h4 class="tr-2">Queremos que seas parte de este gran equipo</h4>
							<a href="" style="display:inline-block;"><div class="send-rrhh" style="color:white;">Envianos tu CV</div></a>

						
				</div>  <!-- termina header -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:0;">
				<img id="curva-rrhh" src="img/rrhh-01.png" style="display:inline-block;width:100%;position:relative;z-index:3;">
				</div>
				
				<div style="width:100%;display:inline-block;text-align:center;padding-bottom:10vh;margin-top:-2px;padding-top:40vh;position:relative;">
				<!-- TEXTO-->
				<div id="whiteFiller"style="background-color:white;position:absolute;width:100%;height:400px;z-index:2;top:226px;"></div>
				<div style="width:100%;position:relative;z-index:4">
				<p class="p-rrhh-home" style="width:50%;display:inline-block;margin:0;padding:0;" >Apostamos al compromiso y la pasión de nuestros empleados como pilares indispensables para un sólido crecimiento de toda la compañía.</p>
				</div>
				
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:15vh;background-color:white;"></div>
			</div> <!-- termina contenedor principal -->
			<!-- //////////////  IMG  DE ABAJO ////////////// -->
				<!--<img id="rrhh-img"  src="img/rrhh-01.png" />!-->
				

</section>


		<!------------------------------------------------------------------ SECCION 7: CONTACTO ------------------------------------------------------------------>
		<section class="special" data-scrollax-parent="true" style="min-height:100vh;width:100%;text-align:center;padding-bottom:30px;display:none;"   id="back-rrhh" >
	
			<div id="contenido" style="display:inline-block;text-align:center;">
				
				<!-- ////////// TITULO ////////////// -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:inline-block;">
					<h1 id="contacto" style="margin:0;"><img src="img/icono-bullet--.png"/> CONTACTO <img src="img/icono-bullet--.png" /></h1>
					<!--<img style="width: 100%;position:relative;" class="hidden-lg hidden-md" src="img/curva-home-abajo.png" alt="" />!-->
					<img style="width: 100%;position:relative;" class="" src="img/curva-home-abajo.png" alt="" />
				</div>
      
      
			
    
					<!--********** DESCRIPCIÓN / UBICACIÓN **********  -->
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" id="descripcion" style="display:inline-block;float:initial;padding-bottom:20px;">
                        
						<p class="ubicacion"><img class="ico-ubi" src="img/icono-ubicacion.png"/>UBICACIÓN</p>
                        
                        <p>Ruta Panamericana Km 38,5 Garín</p>
                       
					
						<!-- MAPA -->
						<div class="mapa"></div>
						
						<iframe class="" style="width:89%;height:50vh;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.321995531876!2d-58.47311858426047!3d-34.79784007530322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd1838f6768bf%3A0x1fe233fc9fc7b0d0!2sBiogenesis+-+Bago!5e0!3m2!1ses!2sar!4v1454509545701" width="600" height="450" frameborder="0" style="border:0" allowfullscreen ></iframe>
                       
					   <!-- termina mapa-->
					   
					</div><!--termina descripcion-->
                  
				
					<!-- ////////// INFORMACIÓN ////////////// -->        
					<div id="infodcha" class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="display:inline-block;float:initial;text-align:center;" >        
					
						<div id="form1" class="col-lg-12 col-md-12 col-xs-12" style="float:initial;display:inline-block;text-align:center;">
						
							<!-- ******** NOMBRE ******** -->
							<div class="col-lg-6  col-md-6 col-sm-6 col-xs-12">
								<div class="input-contacto">
								<label for="exampleInputName2">NOMBRE</label>
									<input class="form-inline" name="nombre" type="text" value="">
								</div>
							</div>
				
				
							<!-- ******** APELLIDO ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
									<label for="exampleInputName2">APELLIDO</label>
									<input class="form-inline" name="email" type="email" value="">
								</div>
							</div>
						
						
							<!-- ******** EMAIL ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
								<label for="exampleInputName2">EMAIL</label>
									<input class="form-inline" name="empresa" type="text" value="">
									</div>
							</div>
						
						
							<!-- ******** TELÉFONO ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
								<label for="exampleInputName2">TELÉFONO</label>
									<input class="form-inline" name="direccion" type="text" value="">
									</div>
							</div>
					
					
							<!-- ******** EMPRESA ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
							<div class="input-contacto">
								<label for="exampleInputName2">EMPRESA</label>
									<input class="form-inline" name="apellido" type="text" value="">
									</div>
							</div>
			
			
							<!-- ******** CARGO ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
							<div class="input-contacto">
								<label for="exampleInputName2">CARGO</label>
									<input class="form-inline" name="telefono" type="text" value="">
									</div>
							</div>
			
						
							<!-- ******** DIRECCIÓN ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
									<label for="exampleInputName2">DIRECCIÓN</label>
									<input class="form-inline" name="cargo" type="text" value="">
								</div>
							</div>
					
					
							<!-- ******** DEPARTAMENTO ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
							<div class="input-contacto">
									<label for="exampleInputName2">DEPARTAMENTO</label>
										<input class="form-inline" name="departamento" type="text" value="">
										</div>
							</div>
			
			
							<!-- ******** MENSAJE ******** -->
							<div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
								<div class="textarea-contacto">
								<label id="textarea-label" for="exampleInputName2">MENSAJE</label> 
									<textarea rows="4" id="textarea"></textarea>
									</div>
							</div>  <!--termina form textarea-->
					
					
							<!-- ******** BOTÓN ENVIAR ******** -->
							<div class="col-lg-12 col-md-12 col-xs-12" > 
									<div class="input-contacto" style="text-align:right;">
									<input id="enviar" name="ENVIAR" type="submit" class="pull-right">
									</div>
							</div>  <!--termina form btn enviar-->
	
						</div> <!--termina info dcha-->
			
					</div> <!--termina info-->
			
			
					<!-- /////////////// REDES SOCIALES  ///////////////  -->
					
				
			</div>
		
		</section>
			<div style="text-align:center;" class="hidden-lg hidden-md">
						
						<?php include('redes-sociales-home-mobile.php');?>
					
					</div>

				
				<!-- /////////////// REDES SOCIALES  ///////////////  -->
				<div style="text-align:center;" class="hidden-sm hidden-xs">
					<?php include('redes-sociales-home-pc.php');?>
				</div>	
				


<div >

</div>
		
	
	<!-- SCRIPT PARALLAX -->
	<?php include('parallax.php'); ?>
	<!-- FOOTER-->
	<?php  include('footer-home.php');?>
	<script>
	$(document).ready(function(){
		console.log("ready para arreglo rrhh");
		$("#curva-rrhh").height();
		$("#whiteFiller").css("top",$("#curva-rrhh").height());
		
	});
	</script>
</body>

	<!-- FOOT -->
	<?php include ('foot.php'); ?>

</html>