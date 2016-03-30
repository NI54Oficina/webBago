<h1><?php echo $model->titulo; ?></h1>
<h3><?php echo $model->url; ?></h3>

<form action="<?php echo Yii::app()->paisChecker->getBaseUrl(); ?>/page/asign/<?php echo $model->id; ?>" method="post">
<?php
foreach(array_combine($metaValues,$metas) as $value => $meta){
	?>
	<div class="">
		<label><?php echo $meta->nombre; ?></label>
		<div><strong>Code:</strong> <?php echo CHtml::encode($meta->code); ?>
		</div>
		<label>Español*</label>
		<input hidden name="textID<?php echo $meta->id; ?>" value="<?php echo $value ?>">
		<?php $auxText= Textos::model()->findByPk($value); ?>
		<input name="Page[es<?php echo $meta->id; ?>]" value="<?php echo $auxText->es; ?>" /><br>
		<label>Ingles(opcional)</label>
		<input name="Page[en<?php echo $meta->id; ?>]" value="<?php echo $auxText->en; ?>" /><br>
		<label>Portugues(opcional)</label>
		<input name="Page[pt<?php echo $meta->id; ?>]" value="<?php echo $auxText->pt; ?>" /><br>
	</div>
	<hr>
	<?php
}
?>
<button>Enviar</button>
</form>