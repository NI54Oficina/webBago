<img id="logo-bago-mobile" class="hidden-lg hidden-md col-sm-12 col-xs-12" src="/webBago/img/logo-bago.png" style="opacity:0;">
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<div style="width:100%;position:absolute;"><h1 class="titulo-layout-aftosa" style=""><?php echo Textos::model()->GetText(20); ?></h1></div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/nuestras-plantas.png" style="width:100vw;" />	

			</div>
			
			
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="side-title">
		<div style="display:inline-block;">
		<h2  class="h2-aftosa"><?php echo Textos::model()->GetText(347); ?></h2>	
		<div style="width:50%;height:1px;display:inline-block;border-top:1px solid black;"></div>
		</div>
	</div>
	</div>
	
	
<div class="div-texto-aftosa col-lg-5 col-md-5 col-sm-12 col-xs-12" style="text-align: left;">
		
	<div class="tabla-aftosa col-lg-10 col-md-10 col-sm-12 col-xs-12" style="text-align: left;">

		<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text" style="text-shadow:none;padding-top:0;">		


				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2016");?>2016</div>
					</div>
					<?php echo count($notas); 
					foreach($notas as $nota){
					?>
						<ul>
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1><p><?php echo $nota->bajada; ?></p></a></li>
						</ul>
					<?php } ?>
					</div>
					

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"prensa"),"YEAR(fecha)=2015");?>2015</div>
					</div>
					<?php echo count($notas); 
					foreach($notas as $nota){
					?>
						<ul>
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1><p><?php echo $nota->bajada; ?></p></a></li>
						</ul>
					<?php } ?>
					</div>
					
					

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2014");?>2014</div>
					</div>
					<?php echo count($notas); 
					foreach($notas as $nota){
					?>
						<ul>
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1><p><?php echo $nota->bajada; ?></p></a></li>
						</ul>
					<?php } ?>
					</div>
					
					

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2013");?>2013</div>
					</div>
					<?php echo count($notas); 
					foreach($notas as $nota){
					?>
						<ul>
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1><p><?php echo $nota->bajada; ?></p></a></li>
						</ul>
					<?php } ?>
					</div>
					

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2012");?>2012</div>
					</div>
					<?php echo count($notas); 
					foreach($notas as $nota){
					?>
						<ul>
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1><p><?php echo $nota->bajada; ?></p></a></li>
						</ul>
					<?php } ?>
					</div>
		


				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2011");?>2011</div>
					</div>
					<?php echo count($notas); 
					foreach($notas as $nota){
					?>
						<ul>
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1><p><?php echo $nota->bajada; ?></p></a></li>
						</ul>
					<?php } ?>
					</div>
					


				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2010");?>2010</div>
					</div>
					<?php echo count($notas); 
					foreach($notas as $nota){
					?>
						<ul>
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1><p><?php echo $nota->bajada; ?></p></a></li>
						</ul>
					<?php } ?>
					</div>
					


				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2009");?>2009</div>
					</div>
					<?php echo count($notas); 
					foreach($notas as $nota){
					?>
						<ul>
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1><p><?php echo $nota->bajada; ?></p></a></li>
						</ul>
					<?php } ?>
					</div>
					



				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2008");?>2008</div>
					</div>
					<?php echo count($notas); 
					foreach($notas as $nota){
					?>
						<ul>
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1><p><?php echo $nota->bajada; ?></p></a></li>
						</ul>
					<?php } ?>
					</div>
					
					
					

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2007");?>2007</div>
					</div>
					<?php echo count($notas); 
					foreach($notas as $nota){
					?>
						<ul>
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1><p><?php echo $nota->bajada; ?></p></a></li>
						</ul>
					<?php } ?>
					</div>
					
					
					

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2006");?>2006</div>
					</div>
					<?php echo count($notas); 
					foreach($notas as $nota){
					?>
						<ul>
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1><p><?php echo $nota->bajada; ?></p></a></li>
						</ul>
					<?php } ?>
					</div>
					

				
			</div>

	</div>

	

</div>

<?php include('widget.php'); ?>
