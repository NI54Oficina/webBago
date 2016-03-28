<div style="padding-top:30vh;width:100%;"></div>
<?php 
$productos= Producto::model()->findAll();
$previous=null;
$next=null;
$found=null;
foreach($productos as $p){
	if($found){
		$next=$p;
		break;
	}else if(!$found&&$p->id==$data){
			$found=$p;
	}else{
		$previous=$p;
	}
}
?>

<?php 
if($previous){
	?>
	<button type="button" style="position:fixed;top:45vh;left:0;" onclick="window.location='<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/slide-imagenes/<?php echo $previous->id; ?>'">Previous</button>
	<?php
}
?>

<?php 
if($next){
	?>
	<button type="button" style="position:fixed;top:45vh;right:0;" onclick="window.location='<?php echo Yii::app()->paisChecker->getBaseUrl(true); ?>/slide-imagenes/<?php echo $next->id; ?>'">Next</button>
	<?php
}
?>


<?php 

$producto= Producto::model()->findByPk($data);
if($producto){
	$id=$producto->id;
	$imagen= Imagen::model()->find(array("condition"=>"producto_id = $id","order"=>"id DESC"));
	if($imagen){
	?>
	<div style="background-color:red;width:auto;display:inline-block;"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/vademecums/<?php echo $imagen->id; ?>.png" /></div>
	<?php
	}
	?>
	<h1><?php echo $producto->nombre; ?></h1>
	<p><?php echo Yii::app()->getBaseUrl(true); ?>/vademecums/<?php echo $imagen->id; ?>.png</p>
	<?php
}

?>