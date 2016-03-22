<img id="logo-bago-mobile" class="hidden-lg hidden-md col-sm-12 col-xs-12" src="/webBago/img/logo-bago.png" style="opacity:0;">
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div style="width:100%;position:absolute;"><h1 class="titulo-layout-aftosa" style="">RSE</h1></div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse.png" style="width:100vw;" />	
			</div>
	
	
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="side-title">
		<div style="display:inline-block;">
		<h2  class="h2-aftosa">Institucional</h2>	
		<div style="width:50%;height:1px;display:inline-block;border-top:1px solid black;"></div>
		</div>
		<!--<p class="fundaciones" >Fundaciones con  las que colaboramos:</p>
				<div><img class="img-fundaciones-1" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-prosaia.png"  /></div>
				<div><img class="img-fundaciones-2" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-garrahan.png"  /></div>
				<div><img class="img-fundaciones-3" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-mundo-sano.png"  /></div>
				<div><img class="img-fundaciones-4" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-misiones-rurales.png"  /></div>
				<div><img class="img-fundaciones-5" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-solidagro.png"  /></div>
				<div><img class="img-fundaciones-6" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-fernandez.png"  /></div>-->
			</div>
	</div>
	</div>

<?php
$nota =Notas::model()->findByPk($data);
?>

<div class="div-texto-aftosa col-lg-5 col-md-5 col-sm-12 col-xs-12" style="text-align: left;">
	
	<div class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text" style="text-shadow:none;padding-top:0;">			
			<h5 style="color: #66CCED; background: whitesmoke; padding-top: 0.5vh; padding-bottom: 0.5vh; padding-left: 1vh; margin: 0;"><?php echo $nota->fecha; ?></h5>
			<h1 style="margin-left: 0;padding-bottom:6px;color: #003b5d;"><?php echo $nota->titulo; ?></h1>
			<p><?php echo $nota->texto; ?></p>
		</div>
		
</div>
</div>


<?php include('widget.php'); ?>