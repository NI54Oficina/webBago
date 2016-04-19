
<div id="modal" class="modal">

  <!--contenido-->
  <div class="menu-modal">

  <div class="modal-1"> 
  	<span class="cerrar"></span>
 	<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mail-modal.png" >
 	<p><?php echo Textos::model()->GetText(507);?></p>

 </div>

 <div class="modal-2">
 	
 	<form action="">

 	<div id="input-modal-email">
 	<label>
 	<p id="email-complete">E-MAIL</p> 
 	</label>
 	<input name="email" type="text"></input> </br>
    </div>

    <div id="input-modal-mensaje">
    <label>
 	<p id="mensaje-complete" ><?php echo Textos::model()->GetText(122);?></p> 
 	</label>
 	<input name="mensaje" type="text"></input></br>
 	</div>
 	<button id="boton-mail" type="submit"> <p><?php echo Textos::model()->GetText(123);?></p></button>
 	</form>

 </div>
    
    

  </div>

</div>




<script>
//REFERENCIA MODAL
var modal = document.getElementById('modal');

//REFERENCIA QAL BOTON QUE ABRE
var boton = document.getElementById("mail");

//REFERENCIA AL SPAN
var span = document.getElementsByClassName("cerrar")[0];

//CLICK EN MAIL PARA ABRIR EL MODAL
boton.onclick = function() {
    modal.style.display = "block";
}

// CIERRA EL MODAL EN X
span.onclick = function() {
    modal.style.display = "none";
}

//CERRAR FUERA DE LA VENTANA 
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!-- back ground color #00CDD0 -->


<!-- 

-AGREGAR A BASE DE DATOS

-->