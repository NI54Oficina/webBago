
<div id="modal" class="modal">


  <div class="menu-modal">

  <div class="modal-1"> 
  	<span class="cerrar"></span>
 	  <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mail-modal.png" >
  	<p><?php echo Textos::model()->GetText(508);?></p>
  </div>

 <div class="modal-2">
 	
 	<form action="">

 	<div id="input-modal-email">
 	  <label>
 	    <p id="email-complete"><?php echo Textos::model()->GetText(509);?>
      </p> 
 	  </label>
 	  <input name="email" type="text"></input> </br>
  </div>
  
  <div id="input-modal-email">
   <label>
      <p id="email-complete"><?php echo Textos::model()->GetText(510);?></p> 
   </label>
   <input name="email" type="text"></input> </br>
  </div>

  <div id="input-modal-mensaje">
    <label>
 	    <p id="mensaje-complete" ><?php echo Textos::model()->GetText(122);?></p> 
 	  </label>
    <textarea name="mensaje" type="text"></textarea></br>
 	</div>

   <div id="testing">
      <button id="boton-mail" type="submit"> 
        <?php echo Textos::model()->GetText(123);?>
      </button>
  </div>

 	</form>

 </div>
    
</div>

</div>




<script>

var modal = document.getElementById('modal');

var boton = document.getElementById("mail");
var botonmobile = document.getElementById("mail-mobile");

var span = document.getElementsByClassName("cerrar")[0];

boton.onclick = function() {
    modal.style.display = "block";
}

botonmobile.onclick = function() {
    modal.style.display = "block";
}


span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

   
}

//  $("body").on("touchstart",".modal",function(){
//   modal.style.display="block";
//   if(isMobile){   
//     ClickModal();
//  }
   
// });

//  function ClickModal(){
//   modal.style.display="block";
// }



 


</script>

