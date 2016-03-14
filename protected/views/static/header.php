
<!---------------------------------------------------------------------------------------------      HEADER     --------------------------------------------------------------------------------------------->


<header class="main col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="width:100%;overflow-x:hidden;">

	<!--<span class="glyphicon glyphicon-menu-hamburger"></span>!-->
	<!-- ////////////////BARA DE NAVEGACIÓN //////////////////-->
	<nav  id="overview"  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		
		<!-- +++++ PAÍSES +++++ -->
		<div id="boxes" style="">
			
			<div class="box">
  
				<!-- CERRAR-->
				<p>
				<a class="closelink" href="javascript:void(0);">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-close.png" style="padding-top: 1.5%;" />
				</a>
				</p>
				
				
				<!-- LISTA DE PAÍSES-->
				<div style="margin-top:-2 %;">
					<ul class="ul-paises" >
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-arg.png" />Argentina</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-bol.png" />Bolivia</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-br.png" />Brasil</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-cost.png" />Costa Rica</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ec.png" />Ecuador</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-sal.png" />El Salvador</a></li>
					</ul>
					<ul class="ul-paises" style="margin-top:1%;" >
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-guat.png" />Guatemala</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-hon.png" />Honduras</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-mex.png" />México</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-nic.png" />Nicaragua</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-pan.png" />Panamá</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-par.png" />Paraguay</a></li>
					</ul>
					
					<ul class="ul-paises" style="margin-top:1%;" >
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-per.png" />Perú</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-rep.png" />Rep. Dominicana</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-uru.png" />Uruguay</a></li>
						<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ven.png" />Venezuela</a></li>
					</ul>
				</div>
			
			</div>
		
		</div> <!-- termina países -->
	

		<!--+++++ LOGO BAGÓ +++++ -->
		<img id="logo-bago" class="col-lg-2 col-md-2 col-sm-12 col-xs-12" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-bago.png" />		
		
		<!--<div style="float:right;">
		<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/0"style="color:black;float:left;padding:10px;">Español</a>
		<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/2"style="color:black;float:left;padding:10px;">Portugues</a>
		</div>-->
		<!-- +++++ LISTA VERSIONES +++++ -->
		<ul class=" col-lg-2 col-md-2 col-sm-2 col-xs-12" id="ul-nav-2" style="color:#0C6594;float:right;">
			

				<li class="li-nav-2"><div id="links"><a class="openlink" href="javascript:void(0);"  style="float:left;padding: 10px 0px;color: #337ab7;">Otros países</a></div></li>
				<li class="li-nav-2"><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/0"style="float:left;padding: 10px 0px;color: #337ab7;">Versión español</a></li>
				<li class="li-nav-2"><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/2"style="float:left;padding: 10px 0px;color: #337ab7;">Versión portugués</a></li>
				<li class="li-nav-2"><a href="" style="float:left;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/fronteras-50x50-01.png" /></a></li>
		</ul> <!-- termina lista versiones -->
	
	
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarSecciones" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
		<!-- +++++++++++ BOTONERA +++++++++++ -->
		<ul class="ul-nav col-lg-11 col-md-11 col-sm-9 col-xs-9" style="">
			
			
			<!-- INSTITUCIONAL -->
			<li class="li-nav"><a class="a-nav" href="#">Institucional <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-menu.png" /> </a>
				
				<ul>
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-submenu.png" />
							<li><a class="a-sub" href="">Quiénes somos</a></li>
							<li><a class="a-sub" href="">Misión, Visión, Valores</a></li>
							<li><a class="a-sub" href="">Lucha contra aftosa</a></li>
							<li><a class="a-sub" href="">Trayectoria</a></li>
							<li><a class="a-sub" href="">Nuestras plantas</a></li>
							<li><a class="a-sub" href="">Rse</a></li>
							<li><a class="a-sub" href="">Info para proveedores</a></li>
				</ul>
				
			</li>
			
			<!-- FILIALES -->
			<li class="li-nav"><a class="a-nav" href="">Filiales y rep. comerciales</a></li>
			
			
			<!-- INFO TÉCNICA -->
			<li class="li-nav"><a class="a-nav" href="#">info técnica <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-menu.png" /></a>
				
				<ul>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-submenu.png" />
								<li><a href="">Planes sanitarios</a></li>
								<li><a href="">Planillas de trabajo</a></li>
								<li><a href="">Trabajos técnicos</a></li>
					</ul>
					
			</li>
			
			
			<!-- VADEMÉCUM -->
			<li class="li-nav"><a class="a-nav" href="#">vademécum <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-menu.png" /></a>
				
				<ul>
					
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-submenu.png" />
						
						<li><a href="">Aftosa</a></li>
						<li><a href="">Antibióticos</a></li>
						<li><a href="">Antiparasitarios externos</a></li>
						<li><a href="">Antiparasitarios internos</a></li>
						<li><a href="">Biológicos</a></li>
						<li><a href="">Endectocidas</a></li>
						<li><a href="">Farmacéuticos</a></li>
						<li><a href="">Nutrición</a></li>
						<li><a href="">Reproductivos</a></li>
						<li><a href="">Salud ambiental</a></li>	
						<li><a href="">Vitaminas y minerales</a></li>
						
				</ul>
				
			</li>
			
			
			<!-- REVISTA EL MOLINO  -->
			<li class="li-nav"><a class="a-nav" href="">revista el molino</a></li>
		
		
			<!-- RRHH -->
			<li class="li-nav"><a class="a-nav" href="">rrhh</a></li>
			
			
			<!-- CONTACTO -->
			<li class="li-nav"><a class="a-nav" href="">contacto</a></li>
			
		</ul> <!-- termina botonera -->

	</nav> <!-- TERMINA BARRA NAVEGACIÓN-->
	
</header> <!-- TERMINA HEADER -->
