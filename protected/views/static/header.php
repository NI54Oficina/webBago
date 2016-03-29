
<!---------------------------------------------------------------------------------------------      HEADER     --------------------------------------------------------------------------------------------->


<header class="main col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="width:100%;padding-bottom: 10px;background: -webkit-linear-gradient(left, rgba(255,255,255,1) 17%,rgba(255,255,255,1) 18%,rgba(255,255,255,0.89) 48%,rgba(255,255,255,0.7) 100%);
    background: linear-gradient(to right, rgba(255,255,255,1) 17%,rgba(255,255,255,1) 18%,rgba(255,255,255,0.89) 48%,rgba(255,255,255,0.7) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#b3ffffff',GradientType=1 );">
		<!--+++++ LOGO BAGÓ MOBILE +++++ -->
		<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>"><img id="logo-bago-mobile" class="col-lg-2 col-md-2 col-sm-12 col-xs-12" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-bago.png" /></a>		
		
	<span  class=" glyphicon glyphicon-menu-hamburger navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarSecciones" aria-expanded="false" aria-controls="navbar" ></span>
	
	<div class="div-nav-2"><a href="" style="float:left;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/fronteras-50x50-01.png" /></a></div>
	<!-- ////////////////BARA DE NAVEGACIÓN //////////////////-->
	<nav  id="navbarSecciones" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 collapse navbar-collapse" data-toggle="collapse">
		<div class="container-fluid">
		
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
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-arg.png" /><?php echo Textos::model()->GetText(410); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-bol.png" /><?php echo Textos::model()->GetText(411); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-br.png" /><?php echo Textos::model()->GetText(412); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-cost.png" /><?php echo Textos::model()->GetText(413); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ec.png" /><?php echo Textos::model()->GetText(414); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-sal.png" /><?php echo Textos::model()->GetText(415); ?></a></li>
						</ul>
						<ul class="ul-paises" style="margin-top:1%;" >
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-guat.png" /><?php echo Textos::model()->GetText(416); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-hon.png" /><?php echo Textos::model()->GetText(417); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-mex.png" /><?php echo Textos::model()->GetText(418); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-nic.png" /><?php echo Textos::model()->GetText(419); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-pan.png" /><?php echo Textos::model()->GetText(420); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-par.png" /><?php echo Textos::model()->GetText(421); ?></a></li>
						</ul>
						
						<ul class="ul-paises" style="margin-top:1%;" >
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-per.png" /><?php echo Textos::model()->GetText(422); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-rep.png" /><?php echo Textos::model()->GetText(423); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-uru.png" /><?php echo Textos::model()->GetText(424); ?></a></li>
							<li class="li-paises"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ven.png" /><?php echo Textos::model()->GetText(425); ?></a></li>
						</ul>
					</div>
				
				</div>
			
			</div> <!-- termina países -->
	

		<!--+++++ LOGO BAGÓ +++++ -->
		<a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>"><img id="logo-bago" class="col-lg-2 col-md-2 col-sm-12 col-xs-12" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-bago.png" /></a>
		
		<!--<div style="float:right;">
		<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/0"style="color:black;float:left;padding:10px;">Español</a>
		<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/2"style="color:black;float:left;padding:10px;">Portugues</a>
		</div>-->
		
		<!-- +++++ LISTA VERSIONES MOBILE+++++ -->
		<ul class=" col-lg-2 col-md-2 col-sm-10 col-xs-12" id="ul-nav-2-mobile" style="color:#0C6594;">
				<li class="li-nav-2"><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/0"style="float:left;padding: 10px 0px;color: #337ab7;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-arg.png" /></a></li>
				<li class="li-nav-2"><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/2"style="float:left;padding: 10px 0px;color: #337ab7;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-br.png" /></a></li>
				<li class="li-nav-2 dropdown" data-toggle="collapse"><a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  style="float:left;padding: 10px 0px;color: #337ab7;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mas-paises.png"  /></a>
				
					<ul class="dropdown-menu dropdown-menu-right lista-menu collapse" id="ul-paises-nav">
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-arg.png" /><?php echo Textos::model()->GetText(410); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-bol.png" /><?php echo Textos::model()->GetText(411); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-br.png" /><?php echo Textos::model()->GetText(412); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-cost.png" /><?php echo Textos::model()->GetText(413); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ec.png" /><?php echo Textos::model()->GetText(414); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-sal.png" /><?php echo Textos::model()->GetText(415); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-guat.png" /><?php echo Textos::model()->GetText(416); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-hon.png" /><?php echo Textos::model()->GetText(417); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-mex.png" /><?php echo Textos::model()->GetText(418); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-nic.png" /><?php echo Textos::model()->GetText(419); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-pan.png" /><?php echo Textos::model()->GetText(420); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-par.png" /><?php echo Textos::model()->GetText(421); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-per.png" /><?php echo Textos::model()->GetText(422); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-rep.png" /><?php echo Textos::model()->GetText(423); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-uru.png" /><?php echo Textos::model()->GetText(424); ?></a></li>
								<li class="li-paises-nav" ><a href="" class="a-otros-paises-mobile"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ven.png" /><?php echo Textos::model()->GetText(425); ?></a></li>
					</ul>
					
				</li>
		</ul> <!-- termina lista versiones -->			
	

			
		<!-- +++++ LISTA VERSIONES +++++ -->
		<ul class=" col-lg-6 col-md-6 col-sm-4 col-xs-12" id="ul-nav-2" style="color:#0C6594;float:right;    text-align: right;">
				<li class="li-nav-2"><div id="links"><a class="openlink" href="javascript:void(0);"  style="float:left;padding: 10px 0px;color: #337ab7;"><?php echo Textos::model()->GetText(426); ?></a></div></li>
				<li class="li-nav-2"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/es"style="float:left;padding: 10px 0px;color: #337ab7;"><?php echo Textos::model()->GetText(427); ?></a></li>
				<li class="li-nav-2"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/pt"style="float:left;padding: 10px 0px;color: #337ab7;"><?php echo Textos::model()->GetText(428); ?></a></li>
				<!--<li class="li-nav-2"><a class="link-menu" href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/en"style="float:left;padding: 10px 0px;color: #337ab7;">Versión Ingles</a></li>!-->
				<li class="li-nav-2"><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/proveedores" style="float:left;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/fronteras-50x50-01.png" /></a></li>
		</ul> <!-- termina lista versiones -->
	
		<!-- +++++++++++ BOTONERA +++++++++++ -->
		<div id="container-ul-nav-header">
			<ul class="ul-nav col-lg-11 col-md-12 col-sm-11 col-xs-9" id="ul-nav-principal" style="">
			
			
			<!-- INSTITUCIONAL -->
			<li class="li-nav dropdown"><a  href="#" class="a-nav dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo Textos::model()->GetText(347); ?><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-menu.png" /> </a>
				
				<ul class="dropdown-menu dropdown-menu-right">
						<img  id="flecha-submenu" src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-submenu.png" />
							<li style="margin-top:-5px;"><a class="a-sub link-menu"  href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/quienes-somos"><?php echo Textos::model()->GetText(6); ?></a></li>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/mision-vision"><?php echo Textos::model()->GetText(8); ?></a></li>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/lucha-contra-aftosa"><?php echo Textos::model()->GetText(10); ?></a></li>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/trayectoria-hitos"><?php echo Textos::model()->GetText(429); ?></a></li>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nuestras-plantas"><?php echo Textos::model()->GetText(14); ?></a></li>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/rse"><?php echo Textos::model()->GetText(431); ?></a></li>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/proveedores"><?php echo Textos::model()->GetText(430); ?></a></li>
							<li><a class="a-sub link-menu"	href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/prensa"><?php echo Textos::model()->GetText(20); ?></a></li>
				</ul>
				
			</li>
			
			<!-- FILIALES -->
			<li class="li-nav"><a class="a-nav link-menu" href=""><?php echo Textos::model()->GetText(432); ?></a></li>
			
			
			<!-- INFO TÉCNICA -->
			<li class="li-nav  dropdown"><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/informacion-tecnica" class="a-nav dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo Textos::model()->GetText(433); ?> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-menu.png" /></a>
				
				<ul class="dropdown-menu dropdown-menu-right">
							<img id="flecha-submenu" src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-submenu.png" />
								<li style="margin-top:-5px;"><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/informacion-tecnica"><?php echo Textos::model()->GetText(434); ?></a></li>
								<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/informacion-tecnica"><?php echo Textos::model()->GetText(435); ?></a></li>
								<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/informacion-tecnica"><?php echo Textos::model()->GetText(436); ?></a></li>
					</ul>
					
			</li>
			
			
			<!-- VADEMÉCUM -->
			<li class="li-nav  dropdown"><a href="#" class="a-nav dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo Textos::model()->GetText(348); ?> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-menu.png" /></a>
				
				<ul class="dropdown-menu dropdown-menu-right">
					
					<img id="flecha-submenu" src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-submenu.png" />
						
						<li style="margin-top:-5px;"><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id1"><?php echo Yii::app()->paisChecker->getSeccion(1); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id6"><?php echo Yii::app()->paisChecker->getSeccion(6); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id4"><?php echo Yii::app()->paisChecker->getSeccion(4); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id3"><?php echo Yii::app()->paisChecker->getSeccion(3); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id2"><?php echo Yii::app()->paisChecker->getSeccion(2); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id5"><?php echo Yii::app()->paisChecker->getSeccion(5); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id9"><?php echo Yii::app()->paisChecker->getSeccion(9); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id11"><?php echo Yii::app()->paisChecker->getSeccion(11); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id7"><?php echo Yii::app()->paisChecker->getSeccion(7); ?></a></li>
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id10"><?php echo Yii::app()->paisChecker->getSeccion(10); ?></a></li>	
						<li><a class="link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id8"><?php echo Yii::app()->paisChecker->getSeccion(8); ?></a></li>
						
				</ul>
				
			</li>
			
			
			<!-- REVISTA EL MOLINO  -->
			<li class="li-nav"><a class="a-nav link-menu" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/revista"><?php echo Textos::model()->GetText(451); ?></a></li>
		
		
			<!-- RRHH -->
			<li class="li-nav"><a class="a-nav link-menu" href=""><?php echo Textos::model()->GetText(449); ?></a></li>
			
			
			<!-- CONTACTO -->
			<li class="li-nav"><a class="a-nav link-menu" href="<?php echo Yii::app()->request->baseUrl; ?>/home"><?php echo Textos::model()->GetText(450); ?></a></li>
			
		</ul> <!-- termina botonera -->
		
		</div>
		
		</div>
	</nav> <!-- TERMINA BARRA NAVEGACIÓN-->
	
</header> <!-- TERMINA HEADER -->
