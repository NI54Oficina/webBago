<img id="logo-bago-mobile" class="hidden-lg hidden-md col-sm-12 col-xs-12" src="/webBago/img/logo-bago.png" style="opacity:0;">
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<div style="width:100%;position:absolute;"><h1 class="titulo-layout-aftosa" style=""><?php echo Textos::model()->GetText(20); ?></h1></div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/prensa.png" style="width:100vw;" />	

			</div>
	
	
	
		
	<div class="col-lg-12 col-md-10 col-sm-12 col-xs-12" style="text-align: left;    margin: 0;padding:0 30px;">
	

				<?php 
				
					$notas =Notas::model()->findAllByAttributes(array('seccion'=>"tecnica"));
					if(count($notas)>0){
					foreach($notas as $nota){
						
					?>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 " style="margin-top:0;padding:10px;	" hid="1">
							<p><?php $timeStamp=strtotime($nota->fecha); echo date('Y',$timeStamp) ; ?></p>
							<h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1>
							<p>
							<?php echo $nota->bajada; ?>
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-tecnica/<?php echo $nota->id; ?>">Leer  más</a></p>
							
					</div>
					<?php } 
					} ?>
			
					

				

	</div>

	
