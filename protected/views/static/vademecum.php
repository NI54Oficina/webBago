<?php 
function sanear_string($string)
{
 
    $string = trim($string);
 
    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );
 
    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );
 
    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );
 
    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );
 
    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );
 
    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C'),
        $string
    );
 
    /*//Esta parte se encarga de eliminar cualquier caracter extraño
    $string = str_replace(
        array("\", "¨", "º", "-", "~",
             "#", "@", "|", "!", """,
             "·", "$", "%", "&", "/",
             "(", ")", "?", "'", "¡",
             "¿", "[", "^", "<code>", "]",
             "+", "}", "{", "¨", "´",
             ">", "< ", ";", ",", ":",
             ".", " "),
        '',
        $string
    );*/
 
 
    return $string;
}
?>
<?php

$productos =Producto::model()->findAllByAttributes(array('seccion'=>$data->id,"pais"=>Yii::app()->session['pais']));;
$idSeccion= $data->id;
$auxLink= $data->nombre;
$auxLink=  sanear_string($auxLink);
$auxLink = str_replace(' ', '-', $auxLink); // Replaces all spaces with hyphens.

$auxLink = preg_replace('/[^A-Za-z0-9\-]/', '', $auxLink); // Removes special chars.
$auxLink = preg_replace('/-+/', '-', $auxLink);
$auxLink= strtolower($auxLink);
$normalizado= $auxLink;
$auxId=0;
?>
<style>body{background-color:white;}</style>
<div style="width:100%;">
<div  class="tabla-aftosa col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:25vh;padding:0 5%;"> 

<div style="margin-top:15vh;" class="hidden-lg hidden-md">
<h1 class="vademecum"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /> <?php echo Textos::model()->GetText(348); ?> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /></h1>
<p  style="text-align:center;border-bottom:1px solid #0082C8;width:3%;margin:auto;margin-top:0%;"></p>
</div>

<div style="margin-top:10%;" class="hidden-xs hidden-sm">
<h1 class="vademecum"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /> <?php echo Textos::model()->GetText(348); ?> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/punto-<?php echo $normalizado; ?>.png" /></h1>
<p  style="text-align:center;border-bottom:1px solid #7F7F7F;width:3%;margin:auto;margin-top:0%;"></p>
</div>


 <!-- ACA ESTA EL TITULO CON LA GOTA -->

<h2 class="titulo-vad titulo-<?php echo $normalizado; ?>">

<img id="gota-vademecum" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gota-<?php echo $normalizado; ?>.png"  />
<?php echo Yii::app()->paisChecker->getSeccion($data->id); ?></h2>

 <!-- ACA ESTA EL TITULO CON LA GOTA -->

<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12 volver hidden-sm hidden-xs">
<p>Volver</p>
</div></a>

<a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><div class=" col-lg-3 col-md-3 col-sm-12 col-xs-12 volver-mobile hidden-lg hidden-md">
<p id="volver-p">Volver</p>
</div></a>


<div  class=" col-lg-9 col-md-9 col-sm-12 col-xs-12" style="display:inline-block;text-align:center;"  id="vademecum-loading">
	<div style="width:100%;display:inline-block;overflow:hidden;">
	<?php if(count($productos)==0){ ?>
		<h5> <?php echo Textos::model()->GetText(349); ?></h5>
	<?php } ?>
	<?php foreach($productos as $producto){ 
	$id= $producto->id;
	$imagen= Imagen::model()->find(array("condition"=>"producto_id = $id","order"=>"id DESC"));
	?>
	<div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 div-img-aft same-height" hid="1" style="background-color:#f5f5f5;">
		<a href="<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/productos/id<?php echo $producto->id; ?>">
		<figure class="snip1156 image">
			<div>
				<img style="width:45%;display:inline-block;margin:10%; float: left; margin-top: 5%;" class="img-cat-aft " src="<?php echo Yii::app()->getBaseUrl(true); ?>/vademecums/<?php echo $imagen->id; ?>.png" /> 
				<div id="targets">
					<?php
					$target= $producto->target;
					$targetImages=array('<img src="'.Yii::app()->getBaseUrl(true).'/images/caballo.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/cabra.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/chancho.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/conejo.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/gallina.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/perro.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/gato.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/oveja.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/pez.png">',
								'<img src="'.Yii::app()->getBaseUrl(true).'/images/vaca.png">',
								);
							$auxTarget=0;
							$auxDiv=0;
					foreach(str_split($target) as $t){
						if($t==1){
							$auxDiv++;
							echo $targetImages[$auxTarget];
						}
						if($auxDiv>=2){
							//echo "</div><div id='targets'>";
							$auxDiv=0;
						}
						$auxTarget++;
					}
					
					
					?>
					</div>
					<h3><?php echo $producto->nombre; ?></h3>
				<figcaption>
					<div class="d-a-2 <?php echo $normalizado; ?>">
						<h2 class="<?php echo $normalizado; ?>-h2"><?php echo $producto->nombre; ?></h2>
					</div>
					<div>
					</div>
				</figcaption>
				
			</div>
		</figure></a>
	</div>
	
	<?php } ?>
	</div>
	<script>
	$(".hover").mouseleave(
		function () {
		$(this).removeClass("hover");
		}
	);
		$("#vademecum-loading").fadeIn();
	</script>
	
</div>

<?php include('widget-vademecum.php'); ?>

</div>
</div>