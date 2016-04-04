<?php if($_SESSION["lng"]!="es"){ ?>

<?php include("block.php"); ?>


<?php }else{ ?>
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div style="width:100%;position:absolute;"><h1 class="titulo-layout-aftosa" style=""><?php echo Textos::model()->GetText(18); ?></h1></div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/info-proveedores.png" style="width:100vw;" />	
			</div>
	

	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="side-title">
		<div style="display:inline-block;">
		<h2  class="h2-aftosa"><?php echo Textos::model()->GetText(347); ?></h2>	
		<div id="barra-institucional"></div>
		</div>
	</div>
	</div>
	
<div class="div-texto-aftosa col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align: left;">
	
	<div class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text" style="text-shadow:none;padding-top:0;">		

			<!--PC-->
				<ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="">
					
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 proveedores-li"><a style="font-size: 13px;" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/proveedores/Constancia-de-Inscripcion.pdf" download="Constancia de Inscripción AFIP (CUIT)"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-descarga.png"  /><?php echo Textos::model()->GetText(380); ?></a></li>
					
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 proveedores-li"><a style="font-size: 13px;"  href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/proveedores/Impuesto-sobre-los-Ingresos.pdf" download="Impuesto sobre los Ingresos Brutos"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-descarga.png"  /><?php echo Textos::model()->GetText(381); ?></a></li>
					
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 proveedores-li"><a style="font-size: 13px;" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/proveedores/Constancia-de-Inscripcion-IIBB.pdf" download="Constancia de Inscripción IIBB"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-descarga.png"  /><?php echo Textos::model()->GetText(382); ?></a></li>
					
					<li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 proveedores-li"><a style="font-size: 13px;" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/proveedores/Convenio-Multilateral.pdf" download="Convenio Multilateral"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-descarga.png"  /><?php echo Textos::model()->GetText(383); ?></a></li>
				</ul>		
	</div>
	</div>
	
</div>

<?php include('widget.php'); ?>

<?php } ?>