<img id="logo-bago-mobile" class="hidden-lg hidden-md col-sm-12 col-xs-12" src="/webBago/img/logo-bago.png" style="opacity:0;">
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div style="width:100%;position:absolute;"><h1 class="titulo-layout-aftosa" style=""><?php echo Textos::model()->GetText(20); ?></h1></div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/prensa.png" style="width:100vw;" />	
			</div>
	
	
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="side-title">
		<div style="display:inline-block;">
		<h2  class="h2-aftosa">Institucional</h2>	
		<div style="width:50%;height:1px;display:inline-block;border-top:1px solid black;"></div>
		</div>
		
			</div>
	</div>
	</div>

<?php
$nota = Notas::model()->findByAttributes(array("id"=>$data,"seccion"=>"prensa"));
?>

<div class="div-texto-aftosa col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align: left;">
	
	<div class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text" style="text-shadow:none;padding-top:0;">			
			<h5 style="color: #66CCED; background: whitesmoke; padding-top: 0.5vh; padding-bottom: 0.5vh; padding-left: 1vh; margin: 0;"><?php echo $nota->fecha; ?></h5>
			<h1 style="margin-left: 0;padding-bottom:6px;color: #003b5d;"><?php echo $nota->titulo; ?></h1>
			<p><?php echo $nota->texto; ?></p>
		</div>
		
</div>
</div>


<?php include('widget.php'); ?>