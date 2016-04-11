
			<div class="header-layout-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div style="width:100%;position:absolute;"><h1 class="titulo-layout-aftosa" style=""><?php echo Textos::model()->GetText(8); ?></h1></div>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mision-vision-oscura-01.png" style="width:100vw;" />	
			</div>
	</section>
	<script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/jquery.boxloader.min.js"></script>	

<div class="mision-transicion">
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="side-title">
		<div style="display:inline-block;">
		<h2  class="h2-aftosa"><?php echo Textos::model()->GetText(347); ?></h2>
			
		<div id="barra-institucional"></div>
		</div>
	</div>
	</div>
</div>	
	
<div class="div-texto-aftosa col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align: left;">
		
	<div class="tabla-aftosa col-lg-10 col-md-10 col-sm-12 col-xs-12" style="text-align: left;">

		<div  class="tr  col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text" style="text-shadow:none;padding-top:0;">		

		<div class="mision-transicion">
				<h2 style="color:#00255B;  text-shadow: none;margin-bottom:20; margin-top: 0%; font-size:20px;"><?php echo Textos::model()->GetText(385); ?></h2>
				<p><?php echo Textos::model()->GetText(386); ?></p>

				<h2 style="margin-top:12%;color:#00255B;text-shadow: none; font-size: 20px;"><?php echo Textos::model()->GetText(387); ?></h2>
				<p><?php echo Textos::model()->GetText(388); ?></p>
				
				<h2 style="margin-top:12%;color:#00255B; font-size: 20px;"><?php echo Textos::model()->GetText(389); ?></h2>
		</div>	
				<!--PC-->
				<div style="color:#8C8C8C">
				<ul class="col-lg-12 col-md-12 col-sm-12 col-s-12" style="margin-top:3%;">
					<li class="mision-li tic-mision col-lg-5 col-md-12 col-sm-12 col-xs-12 mision-1" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mision-tic.png"  /><?php echo Textos::model()->GetText(390); ?></li>
					<li class="mision-li tic-mision col-lg-5 col-md-12 col-sm-12 col-xs-12 mision-2" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mision-tic.png"  /><?php echo Textos::model()->GetText(391); ?></li>
					<li class="mision-li tic-mision col-lg-5 col-md-12 col-sm-12 col-xs-12 mision-3" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mision-tic.png"  /><?php echo Textos::model()->GetText(392); ?></li>
					<li class="mision-li tic-mision col-lg-5 col-md-12 col-sm-12 col-xs-12 mision-4" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mision-tic.png"  /><?php echo Textos::model()->GetText(393); ?></li>
					<li class="mision-li tic-mision col-lg-5 col-md-12 col-sm-12 col-xs-12 mision-5" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mision-tic.png"  /><?php echo Textos::model()->GetText(394); ?></li>
					<li class="mision-li tic-mision col-lg-5 col-md-12 col-sm-12 col-xs-12 mision-6" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mision-tic.png"  /><?php echo Textos::model()->GetText(395); ?></li>
					<li class="mision-li tic-mision col-lg-5 col-md-12 col-sm-12 col-xs-12 mision-7" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mision-tic.png"  /><?php echo Textos::model()->GetText(396); ?></li>
					<li class="mision-li tic-mision col-lg-5 col-md-12 col-sm-12 col-xs-12 mision-8" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mision-tic.png"  /><?php echo Textos::model()->GetText(397); ?></li>
				</ul>
				</div>

				
			</div>

	</div>

</div>	


<?php include('widget.php'); ?>


		<script type="text/javascript">
		$(document).ready(function(){
		$(".mision-transicion").boxLoader({
			direction:"x",
			position: "-50%",
			effect: "fadeIn",
			duration: "3s",
			windowarea: "50%"
		}); 
		
		});
		
		
		$(document).ready(function(){
		$(".mision-2").boxLoader({
			direction:"x",
			position: "-100%",
			effect: "fadeIn",
			duration: "2s",
			windowarea: "50%"
		}); 
		});
		
		$(document).ready(function(){
		$(".mision-1").boxLoader({
			direction:"x",
			position: "-130%",
			effect: "fadeIn",
			duration: "2s",
			windowarea: "50%"
			}); 
		}); 		
		

		
	</script>