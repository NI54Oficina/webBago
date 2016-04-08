
	<!-- VIDEO-->
		<!--JS-->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/BigVideo/css/bigvideo.css">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/modernizr/modernizr-2.5.3.min.js"></script>

</head>
   <!-- BigVideo Dependencies -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/jquery-ui/ui/jquery-ui.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/video.js"></script>

	<div style="width:100vw; height:100vh; z-index:10; position:relative;background-color:rgba(0,0,0,0.5)"> 
    <!-- BigVideo -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/BigVideo/lib/bigvideo.js"></script>

    <!-- Demo -->

     <script>
	    $(function() {
            var BV = new $.BigVideo();
			BV.init();
			BV.show('<?php echo Yii::app()->getBaseUrl(true); ?>/video/home1.mp4',{ambient:true});
	    });
    </script>

	<!-- PAÍSES -->
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-blanco.png" style="float:right; padding-right: 118px; padding-top: 29px;width:260px;"/>
	<p style="font-size: 11px;font-family: 'arialregular'; color: white; font-weight: 700; display: inline-block; padding-top: 65px;text-shadow: 0px 3px black;margin: 0;margin-left: 13px;">LA EVOLUCIÓN DE LA <span style="color:#79C8EE;text-align: center; line-height: 35px;">SALUD ANIMAL</span></p>
	
	<div class="col-lg-1"></div>
	<div id="paises-home" class="col-lg-12 col-md-12 " style="color:white;margin-top:5%;">
	
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-arg.png" /><p>Argentina</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/5/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-bol.png" /><p>Bolivia</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/pt" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-br.png" /><p>Brasil</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/10/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-cost.png" /><p>Costa Rica</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/11/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ec.png" /><p>Ecuador</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/12/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-sal.png" /><p>El Salvador</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/13/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-guat.png" /><p>Guatemala</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/14/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-hon.png" /><p>Honduras</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/6/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-mex.png" /><p>México</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/15/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-nic.png" /><p>Nicaragua</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a	href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/16/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-pan.png" /><p>Panamá</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a 	href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/17/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-par.png" /><p>Paraguay</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/18/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-per.png" /><p>Perú</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/19/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-rep.png" /><p>Rep. Dominicana</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/20/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-uru.png" /><p>Uruguay</p></a></div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 banderas-paises-principal"><a  href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/21/lng/es" class="a-paises-principal"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/band-ven.png" /><p>Venezuela</p></a></div>
			
			<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 25px; padding-left: 70px;">
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="display: block;border-top: 1px solid white;width: 3%;"></div>
				<a style="color:white;font-family:'arialregular';" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>en"><p style="display: inline-block;margin: 0;margin-top: 13px; margin-left: -40px; font-size: 15px;">English version</p></a>
	</div>
</div>
</div>	
