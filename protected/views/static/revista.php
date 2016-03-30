<img id="logo-bago-mobile" class="hidden-lg hidden-md col-sm-12 col-xs-12" src="/webBago/img/logo-bago.png" style="opacity:0;">
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12 header-infotec-revista" >
	
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="display:inline-block;z-index:3;padding-top:3%;">
					
					<a class="volver-infotec-revista" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/home"><div></div><p>Volver</p></a>
				
				</div>
				
				
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-9 container-title-info-revista">
		
			<div class="dot-infotec-noticias" style="margin-right: 1%;"></div>
			
			<h1 class="h1-infotec-noticias">REVISTA EL MOLINO</h1>	

			<div class="dot-infotec-noticias" style="margin-left: 1%;"></div>
			
			<div class="border-infotec-noticias"></div>
			</div>
		</div>
	
	
	
		
	<div class="col-lg-12 col-md-10 col-sm-12 col-xs-12" style="text-align: left; margin: 0;padding:0 30px;">
	

				<?php 
					$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
					$notas= Revista::model()->findAllByAttributes(array('lng'=>$_SESSION["lng"]),array('order'=>'fecha DESC')); 
					if(count($notas)>0){
					foreach($notas as $nota){
						
					?>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 container-nota-revista" style="margin-top:0;height: 414px;border: 1px solid #66cced;box-shadow: 0px 0px 14px rgba(0, 0, 0, 0.45);margin-right: 1%;" >
						
						<div style="margin-top:0;padding:10px;" hid="1">
							<div style="margin: auto;text-align:center; ">
								<img style=" width: 64%;" src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/molino/img/portada-<?php echo $nota->numero; ?>.png">
							</div>
							<p  style="font-size: 12px; margin: 0;"><?php 
												$timeStamp=strtotime($nota->fecha);												
												echo date('d',$timeStamp)." de ".$meses[date('n',$timeStamp)-1]. " de ".date('Y',$timeStamp) ; ?></p>
							<h1 class="h1-noticias-rse" style="color:#66cced;">MOLINO <?php echo $nota->numero; ?></h1>
							<p style="font-size: 12px; margin: 0;">
							<?php echo $nota->titulo; ?> 
							</p>
						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12" style="padding-top: 1%;">
							<a  class="leer-infotec-noticias" style="text-align:center; background: #66CCED;padding-top: 1%;display:block;padding-left:0;" href="<?php echo Yii::app()->request->baseUrl; ?>/uploads/molino/pdf/revista-<?php echo $nota->numero; ?>.pdf" target="_blank">Leer  más</a></p>
						</div>
					</div>
					<?php } 
					} ?>
			
					

				

	</div>

	
