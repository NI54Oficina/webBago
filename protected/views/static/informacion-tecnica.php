<img id="logo-bago-mobile" class="hidden-lg hidden-md col-sm-12 col-xs-12" src="/webBago/img/logo-bago.png" style="opacity:0;">
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12" style="    background: #66CCED;margin-top: 13vh;padding-bottom: 4%;margin-bottom: 5vh;">
	
			<div class="dot-infotec-noticias" style="margin-right: 1%;"></div>
			
			<h1 class="h1-infotec-noticias">INFORMACIÓN TÉCNICA</h1>	

			<div class="dot-infotec-noticias" style="margin-left: 1%;"></div>
			
			<div class="border-infotec-noticias"></div>
			</div>
	
	
	
		
	<div class="col-lg-12 col-md-10 col-sm-12 col-xs-12" style="text-align: left; margin: 0;padding:0 30px;">
	

				<?php 
				
					$notas =Notas::model()->findAllByAttributes(array('seccion'=>"tecnica"));
					if(count($notas)>0){
					foreach($notas as $nota){
						
					?>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 container-infotec-noticias">
						
						<div style="margin-top:0;padding:10px;"  hid="1">
								<p><?php $timeStamp=strtotime($nota->fecha); echo date('Y',$timeStamp) ; ?></p>
								<div class="line-infotec-noticias"></div>
								<h1 class="h1-noticias-rse" id="titulo-infotec-noticias"><?php echo $nota->titulo; ?> </h1>
								<p style="line-height: 19px;"><?php echo $nota->bajada; ?></p>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12" style="background:#66CCED;padding-top: 1%;">
							<a class="leer-infotec-noticias" href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-tecnica/<?php echo $nota->id; ?>">Leer  más</a></p>
							</div>
							
					</div>
					<?php } 
					} ?>
			
					

				

	</div>

	
