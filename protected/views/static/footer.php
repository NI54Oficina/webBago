	<footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	<img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="<?php echo Yii::app()->request->baseUrl; ?>/img/curva-footer.png" style="position:relative;top:1px;"/><div class="redes-footer col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row" style="margin-bottom:3%; height: 50px;margin-right: auto; margin-left: auto;"><?php if($_SESSION["lng"]!="pt"){ ?><a   target="_blank"href="https://www.facebook.com/BiogenesisBago/"> <img id="facebook" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-fcbk.png" alt="" /></a><?php }else{ ?><a href="https://www.facebook.com/biogenesisbagobr/"> <img id="facebook" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/icono-fcbk.png" alt="" /></a>	
	<?php } ?>
	<!--<a href=""> <img id="gmail" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-g.png" alt="" /></a>!-->
	<a  target="_blank" href="https://www.youtube.com/user/BiogenesisBago"> <img id="youtube" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icono-ytb.png" alt="" /></a>
 </div> 

 </div>
	<div class="copyright col-lg-12 col-md-12 col-sm-12 col-xs-12"><p style="display: inline-block;text-align: center;margin: auto; margin-left: 3%;"><?php echo Textos::model()->GetText(489); ?></p>    
	<a href="#" role="button"><img id="btnmenu" src="<?php echo Yii::app()->request->baseUrl; ?>/img/flecha-menu-arriba.png" style="margin-top:1.5%;"></a>
	</div>

	
	</footer>

</body>
</html>