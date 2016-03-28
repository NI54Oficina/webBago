<img id="logo-bago-mobile" class="hidden-lg hidden-md col-sm-12 col-xs-12" src="/webBago/img/logo-bago.png" style="opacity:0;">
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12" style="    background: #66CCED;margin-top: 13vh;padding-bottom: 4%;margin-bottom: 5vh;">
	
			<div class="dot-infotec-noticias" style="margin-right: 1%;"></div>
			
			<h1 class="h1-infotec-noticias">INFORMACIÓN TÉCNICA</h1>	

			<div class="dot-infotec-noticias" style="margin-left: 1%;"></div>
			
			<div class="border-infotec-noticias"></div>
			</div>
	
	
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0 5%;">
<?php
$nota =Notas::model()->findByPk($data);
if($nota && $nota->seccion=="tecnica"){
?>

<div class="div-texto-aftosa col-lg-9 col-md-9 col-sm-12 col-xs-12" style="text-align: left;">
	
	<div class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text" style="text-shadow:none;padding-top:0;">			
			<h5 style="color: #6D6D6D; padding-top: 0.5vh; padding-bottom: 0.5vh; padding-left: 1vh; margin: 0;"><?php $timeStamp=strtotime($nota->fecha); echo date('Y',$timeStamp) ; ?></h5>
			<div class="line2-infotec-noticias"></div>
			<h1 style="margin-left: 0;padding-bottom:6px;color: #66CCED;font-size: 22px;line-height: 30px;"><?php echo $nota->titulo; ?></h1>
			<p style="font-size: 14px;"><?php echo $nota->texto; ?></p>
		</div>
		
	</div>
</div>
<div class="div-texto-aftosa col-lg-3 col-md-3 col-sm-12 col-xs-12" style="text-align: left; padding-top: 130px;">
<p class="pinside-infotec-noticias" style="font-size: 13px; line-height: 20px;padding-top: 3%;padding-bottom: 3%;"><?php echo $nota->extra; ?></p>
</div>
<?php 
}
?>
</div>
