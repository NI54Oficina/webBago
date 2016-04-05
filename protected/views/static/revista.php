<?php 
					$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
					$notas= Revista::model()->findAllByAttributes(array('lng'=>$_SESSION["lng"]),array('order'=>'fecha DESC')); 
					if(count($notas)>0){
						
?>
<img id="logo-bago-mobile" class="hidden-lg hidden-md col-sm-12 col-xs-12" src="/webBago/img/logo-bago.png" style="opacity:0;    ">
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12 header-infotec-revista" style="background:#359FBD;">
	
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="display:inline-block;z-index:3;padding-top:3%;">
					
					<a class="volver-infotec-revista" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/home"><div></div><p>Volver</p></a>
				
				</div>
				
				
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-9 container-title-info-revista" style="background:#359FBD;">
		
			<div class="dot-infotec-noticias" style="margin-right:1%;"></div>
			
			<h1 class="h1-infotec-noticias">REVISTA EL MOLINO</h1>	

			<div class="dot-infotec-noticias" style="margin-left:1%;"></div>
			
			<div class="border-infotec-noticias"></div>
			</div>
		</div>
	
	
	
		
	<div class="col-lg-12 col-md-10 col-sm-12 col-xs-12" style="text-align: left; ">
	

				<?php
					foreach($notas as $nota){
				
				?>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 container-nota-revista" style="margin-top:0;border: 1px solid #359FBD;box-shadow: 0px 0px 14px rgba(0, 0, 0, 0.45); "  >
						
						<div style="margin-top:0;padding:10px;" hid="1">
							<div class="container-revistas-molino">
								<img style=" width: auto;" src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/molino/img/portada-<?php echo $nota->numero; ?>.png">
							</div>
							<p  style="font-size: 12px; margin: 0;"><?php 
												$timeStamp=strtotime($nota->fecha);												
												echo date('d',$timeStamp)." de ".$meses[date('n',$timeStamp)-1]. " de ".date('Y',$timeStamp) ; ?></p>
							<h1 class="h1-noticias-rse" style="color:#359FBD;margin-top:0;">MOLINO <?php echo $nota->numero; ?></h1>
							<p style="font-size: 12px; margin: 0;line-height:20px;">
							<?php echo $nota->titulo; ?> 
							</p>
						</div>
						
							<div class="col-lg-12 col-md-12 col-sm-12" style="padding-top: 1%;background: #359FBD;">
								<a class="leer-infotec-noticias" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/molino/pdf/revista-<?php echo $nota->numero; ?>.pdf" target="_blank">Leer  más</a></p>
						</div>
					</div>
					<?php } 
					 ?>

	</div>

	
<?php
}else{
		?>
		<?php include("block.php"); ?>
		<?php
}
?>