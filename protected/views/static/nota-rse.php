<?php



$nota =Notas::model()->findByPk(1);
?>
<div style="width:100%;height:100px;background-color:red;padding-top:500px;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:left;">

<div>
<h5><?php echo $data; ?>Fecha: <?php echo $nota->fecha; ?></h5>
<h1>Titulo: <?php echo $nota->titulo; ?></h1>
<h3>bajada: <?php echo $nota->bajada; ?></h3>
<p>Contenido: <?php echo $nota->texto; ?></p>
</div>
</div>
</div>