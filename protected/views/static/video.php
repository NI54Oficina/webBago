   <!-- BigVideo Dependencies -->
   
    <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/bower_components/jquery-ui/ui/jquery-ui.js"></script>
    <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/bower_components/video.js"></script>

    <!-- BigVideo -->
    <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/bower_components/BigVideo/lib/bigvideo.js"></script>

    <!-- Demo -->

    <script>
	    $(function() {
            var BV = new $.BigVideo();
			//BV.init();
			//BV.show('video/home.mp4',{ambient:true});
	    });
    </script>
	<div >
	<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 redes-home-video">
		<!--<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/1/lng/0"style="color:white;float:left;padding:10px;opacity:0.8;">Español</a>
		<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/pais/traduccion/id/2/lng/2"style="color:white;float:left;padding:10px;opacity:0.8;">Portugues</a>!-->
		<?php include('redes-sociales-home-header.php'); ?> 
	
	</div>
	<div style="min-height:100vh;" align="center">
	<!-- TEXTO -->
	<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 general-texto-home-header" >
		<h1  class="h1-home-ev bienvenidos"><?php echo Textos::model()->GetText(1); ?></h1>
		<img style="margin-top: 5%; margin-right: 1%"src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-blanco.png" alt="logo-bago"  class="logo-blanco" />
		<div  class="border-video"></div>

		<div class="content-home">
			<h1 class="h1-home-ev row" style="text-transform: uppercase;"><?php echo Textos::model()->GetText(2); ?></h1>
			<h1 class="h1-home-ev salud-animal row" style="text-transform: uppercase;"><?php echo Textos::model()->GetText(3); ?></h1>
		</div>
	</div>
	
	</div>
	<!-- TEXTO  PRIMERA SECCION-->
	<div class="general-texto-home-header div-inst">

		<h1  class="h1-inst-home"><img class="img-punto-home" src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-home.png"  style="    vertical-align: top;margin-right:8px;text-transform: uppercase;"/><?php echo Textos::model()->GetText(347); ?></h1>
		<img   class="img-punto-home" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/punto-home.png"  /><br>
		<div class="border-inst"></div><br>
		<p  class="p-inst-home"><?php echo Textos::model()->GetText(4); ?> <br /> <?php echo Textos::model()->GetText(5); ?></p>
	</div>
	</div>
	
	<div class="overlay-video">
	
	</div>
