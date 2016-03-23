<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 visible-desktop hidden-sm hidden-xs" id="table-vad" style="height:auto;overflow:hidden;text-align:left;">
	<form action="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/search" method="post">
	<input type="text" class="buscador" name="arg" /><button  id="btn-buscador-vademecum"></button>
	</form>
	<?php $secciones=[1,6,3,4,2,5,9,11,7,10,8];

	foreach($secciones as $value){
		?>
		<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/<?php 
		if($value==$idSeccion){
			echo "gotas-menu-chico-".$normalizado.".png";
		}else{
			echo 'widget-vademecum.png';
		}
		?>" alt="quienes somos" /></div><div><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id<?php echo $value; ?>"><p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion($value); ?></p></a></div>	
	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid #D9D9D9;float:right;"></div></div>
		<?php
	}

	?>
	<!--<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/widget-vademecum.png" alt="quienes somos" /></div><div><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id1"><p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion(1); ?></p></a></div>	
	<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid #D9D9D9;float:right;"></div></div>

	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/widget-vademecum.png" alt="misión y visión" /></div><div><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id6"><p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion(6); ?></p></a></div><div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid #D9D9D9;float:right;"></div></div>
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/widget-vademecum.png" alt="trayectoria" /> </div><div><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id3"><p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion(3); ?></p></a></div><div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid #D9D9D9;float:right;"></div></div>
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/widget-vademecum.png" alt="lucha contra la aftosa" /></div><div> <a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id4"><p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion(4); ?></p></a></div><div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid #D9D9D9;float:right;"></div></div>
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/widget-vademecum.png" alt="nuestras plantas" /></div><div> <a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id2"><p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion(2); ?></p></a></div><div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid #D9D9D9;float:right;"></div></div>
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/widget-vademecum.png" alt="rse" /></div><div> <a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id5"><p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion(5); ?></p></a></div><div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid #D9D9D9;float:right;"></div></div>
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/widget-vademecum.png" alt="proveedores" /></div><div> <a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id9"><p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion(9); ?></p></a></div><div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid #D9D9D9;float:right;"></div></div>
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/widget-vademecum.png" alt="proveedores" /></div><div> <a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id11"><p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion(11); ?></p></a></div><div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid #D9D9D9;float:right;"></div></div>
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/widget-vademecum.png" alt="prensa" /></div><div><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id7"> <p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion(7); ?></p></a></div><div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid #D9D9D9;float:right;"></div></div>
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/widget-vademecum.png" alt="prensa" /></div><div><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id10"> <p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion(10); ?></p></a></div><div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="border:1px solid #D9D9D9;float:right;"></div></div>
	
	<div class="tr-widget col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="td-widget col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img class="img-widget" src="<?php echo Yii::app()->request->baseUrl; ?>/img/widget-vademecum.png" alt="prensa" /></div><div><a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/vademecum/id8"> <p class="p-widget-v"><?php echo Yii::app()->paisChecker->getSeccion(8); ?></p></a></div></div>
!-->

</div>