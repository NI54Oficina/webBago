
	<script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/jquery.rwdImageMaps.js"></script>
	<script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/jquery.rwdImageMaps.min.js"></script>


<script>
$(document).ready(function(e) {
	$('img[usemap]').rwdImageMaps();
	
	/*$('area').on('click', function() {
		alert($(this).attr('alt') + ' clicked');
	});*/
});
</script>

              
              
              
<script>
	$("body").on("mousedown",".btn-mapa",function(){
		console.log( $(this).attr("idInfo"));
			$(".info-mapa").hide();
				$("#"+$(this).attr("idInfo")).show();
	});
</script>