<?php if($_SESSION["lng"]=="en"){ ?>
	
<h3 style="padding-top:40vh;">Sección no habilitada en su idioma</h3>


<?php }else{ ?>
<img id="logo-bago-mobile" class="hidden-lg hidden-md col-sm-12 col-xs-12" src="/webBago/img/logo-bago.png" style="opacity:0;">
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<div style="width:100%;position:absolute;"><h1 class="titulo-layout-aftosa" style=""><?php echo Textos::model()->GetText(20); ?></h1></div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/prensa.png" style="width:100vw;" />	

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
		
	<div class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: left;    margin: 0;">

		<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text container-prensa" style="text-shadow:none;padding-top:0;">		

				<?php 
				$year= date("Y");
				while($year>2000){ 
					$notas =Notas::model()->findAllByAttributes(array('seccion'=>"prensa"),"YEAR(fecha)=".$year."");
					if(count($notas)>0){
				?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate" style="margin-top:0;">
					<div class="btn">
						<div class="toggleIcon"></div>
							
							
							<div class="ttl"><?php echo $year; ?></div>
					</div>
					<?php 
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<li><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-prensa/<?php echo $nota->id; ?>"><p><?php echo $nota->fecha; ?><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-prensa/<?php echo $nota->id; ?>" style="float: right;padding-right: 7%;" style="float: right;padding-right: 7%;">Leer  más</a><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1></a></li>
						</ul>
					<?php } ?>
				</div>
				<?php } ?>
				<?php $year--; ?>
				<?php } ?>
					

				
			</div>

	</div>

	

</div>

<?php include('widget.php'); ?>

<?php } ?>