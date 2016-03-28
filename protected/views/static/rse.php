<img id="logo-bago-mobile" class="hidden-lg hidden-md col-sm-12 col-xs-12" src="/webBago/img/logo-bago.png" style="opacity:0;">
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div style="width:100%;position:absolute;"><h1 class="titulo-layout-aftosa" style="">RSE</h1></div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse.png" style="width:100vw;" />	
			</div>
	
	
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="side-title">
		<div style="display:inline-block;">
		<h2  class="h2-aftosa"><?php echo Textos::model()->GetText(347); ?></h2>	
		<div style="width:50%;height:1px;display:inline-block;border-top:1px solid black;"></div>
		</div>
		<p class="fundaciones" ><?php echo Textos::model()->GetText(458); ?></p>
				<div><img class="img-fundaciones-1" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-prosaia.png"  /></div>
				<div><img class="img-fundaciones-2" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-garrahan.png"  /></div>
				<div><img class="img-fundaciones-3" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-mundo-sano.png"  /></div>
				<div><img class="img-fundaciones-4" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-misiones-rurales.png"  /></div>
				<div><img class="img-fundaciones-5" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-solidagro.png"  /></div>
				<div><img class="img-fundaciones-6" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rse-fernandez.png"  /></div>
			</div>
	</div>
	</div>
	
	
<div class="div-texto-aftosa col-lg-5 col-md-5 col-sm-12 col-xs-12" style="text-align: left;">
	
	<div class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text" style="text-shadow:none;padding-top:0;margin: 0;">			
				<h2 class="h2-aftosa hidden-md hidden-lg h2-titulo" ><?php echo Textos::model()->GetText(347); ?><br /></h2>
					<h3 class="h3-rse" style="margin-bottom: 0%"><?php echo Textos::model()->GetText(63); ?></h3>
						<p style="margin-top:2% ;margin-bottom:3.5%;"><?php echo Textos::model()->GetText(64); ?> </p>
				
					
				<h4  class="h3-rse" style="display:inline-block; margin-bottom: 0%;"><?php echo Textos::model()->GetText(65); ?></h4>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm linea-rse" style="margin-top:2%;" > </div>

				<h4  class="h2-rse" style="display:inline-block;"><?php echo Textos::model()->GetText(455); ?></h4>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm linea-rse"> </div>
				<p style="margin-top:2%;"><?php echo Textos::model()->GetText(66); ?> </p>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm linea-rse" style="margin-top:2%;" > </div>
				
				<h4  class="h2-rse" style="display:inline-block;"><?php echo Textos::model()->GetText(456); ?></h4>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm linea-rse"> </div>

                <p style="margin-top:2% ;margin-bottom:3.5%;"><?php echo Textos::model()->GetText(67); ?></p>

				<h4  class="h3-rse" style="display:inline-block; margin-bottom: 0%;"><?php echo Textos::model()->GetText(68); ?></h4>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm linea-rse" style="margin-top:2%;" > </div>
				<h4  class="h2-rse" style="display:inline-block;"><?php echo Textos::model()->GetText(457); ?></h4>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm linea-rse"> </div>
				<p style="margin-top:2%;"><?php echo Textos::model()->GetText(69); ?><?php echo Textos::model()->GetText(70); ?></p>

				
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm linea-rse" style="margin-top:2%;" > </div>
				<h4  class="h2-rse" style="display:inline-block;"><?php echo Textos::model()->GetText(71); ?></h4>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm linea-rse"> </div>
				<p style="margin-top:0%;">
                
                <p style="margin-top:2% ;margin-bottom:3.5%;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-bullet.png"  style="display:inline-block;" /> <?php echo Textos::model()->GetText(72); ?></p>
                
                <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-bullet.png"  style="display:inline-block;" /> <?php echo Textos::model()->GetText(73); ?></p>
                
                <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-bullet.png"  style="display:inline-block;" /> <?php echo Textos::model()->GetText(74); ?></p>
             
                
                 </p>
				
				

				
				
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2016");?> 2016</div>
							<div></div>
					</div>
					<?php
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-rse/13"><li><p><?php echo $nota->fecha; ?> <a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-rse/13" style="float: right;padding-right: 7%;">Leer  más</a> <div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1> </li></a>
						</ul>
					<?php } ?>
					</div>
					
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2012");?>  2012</div>
					</div>
					<?php
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<li><a hfref=""><p><?php echo $nota->fecha; ?>   <a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-rse/15" style="float: right;padding-right: 7%;">Leer  más</a><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1></a></li>
						</ul>
					<?php } ?>
					</div>
					

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2010");?>2010</div>
					</div>
					<?php
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<li><a hfref=""><p><?php echo $nota->fecha; ?> <a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-rse/17" style="float: right;padding-right: 7%;">Leer  más</a><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1></a></li>
						</ul>
					<?php } ?>
					</div>
					
					

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2009");?>2009</div>
					</div>
					<?php
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<li><a hfref=""><p><?php echo $nota->fecha; ?> <a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-rse/19" style="float: right;padding-right: 7%;">Leer  más</a><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1></a></li>
						</ul>
					<?php } ?>
					</div>
					
						
	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2008");?>2008</div>
					</div>
					<?php
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<li><a hfref=""><p><?php echo $nota->fecha; ?> <a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/nota-rse/23" style="float: right;padding-right: 7%;">Leer  más</a><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1></a></li>
						</ul>
					<?php } ?>
					</div>

	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2007");?>2007</div>
					</div>
					<?php
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?> <a href="" style="float: right;padding-right: 7%;">Leer  más</a><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1></a></li>
						</ul>
					<?php } ?>
					</div>
					


				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2006");?>2006</div>
					</div>
					<?php
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?> <a href="" style="float: right;padding-right: 7%;">Leer  más</a><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1></a></li>
						</ul>
					<?php } ?>
					</div>
					


				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2005");?>2005</div>
					</div>
					<?php
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?> <a href="" style="float: right;padding-right: 7%;">Leer  más</a><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1></a></li>
						</ul>
					<?php } ?>
					</div>
					



				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2004");?>2004</div>
					</div>
					<?php
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?> <a href="" style="float: right;padding-right: 7%;">Leer  más</a><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1></a></li>
						</ul>
					<?php } ?>
					</div>
					
					
					

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2003");?>2003</div>
					</div>
					<?php
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?> <a href="" style="float: right;padding-right: 7%;">Leer  más</a><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1></a></li>
						</ul>
					<?php } ?>
					</div>
			

			

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animate">
					<div class="btn">
						<div class="toggleIcon"></div>
							<div class="ttl"><?php $notas =Notas::model()->findAllByAttributes(array('seccion'=>"rse"),"YEAR(fecha)=2002");?>2002</div>
					</div>
					<?php
					foreach($notas as $nota){
					?>
						<ul style="padding:0;">
							<li class="ripple" data-ripple-color="#38BFBF"><a hfref=""><p><?php echo $nota->fecha; ?> <a href="" style="float: right;padding-right: 7%;">Leer  más</a><div class="linea-rse-not"></div></p><h1 class="h1-noticias-rse"><?php echo $nota->titulo; ?> </h1></a></li>
						</ul>
					<?php } ?>
					</div>
					
					
				<!--PC-->
				
				
			</div>
		</div>
	</div>
	
	
<?php include('widget.php'); ?>