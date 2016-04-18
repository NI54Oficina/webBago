<div id="modal">
	

<div id="menu-modal">

 <div id="modal-1"> 

 	<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mail-modal.png">
 	<p>Formulario de consulta</p>

 </div>

 <div id="modal-2">
 	
 	<form action="">
 	<p>E-MAIL</p> 
 	<input name="email" type="text"></input>

 	<p>MENSAJE</p> 	
 	<input name="mensaje" type="text"></input>
 	<button type="submit"> ENVIAR</button>
 	</form>

 </div>
	

</div>


</div>


<script>
	
	var modal = document.getElementById("modal");

	var open = document.getElementByClassName("mail");

	windows.onclick =function(event){
		if (even.target == modal)
			{modal.style.display="none";
			}
	}
 	open.onclick =function(){modal.style.display="block";}

</script>

<!-- back ground color #00CDD0 -->


<!-- 

-FALTA ACTIVAR EL BOTON EN PRODUCTOS PARA QUE SE LINKEE  

-AGREGAR A BASE DE DATOS

-->