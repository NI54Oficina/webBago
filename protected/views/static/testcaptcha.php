<div id="captchaContainer" style="background-color:black;">
							
							<?php 
							$model=  new CaptchaForm();
							$form=$this->beginWidget('CActiveForm', array(
								'id'=>'form1',
								'enableClientValidation'=>true,
								'clientOptions'=>array(
									'validateOnSubmit'=>true,
								),
								"action"=>"/webBago/ar/web/contacto/",
							)); ?>
							
							<!-- ******** NOMBRE ******** -->
							<div class="col-lg-6  col-md-6  col-xs-12">
								<div class="input-contacto">
								<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(114); ?></p></label>
									<input class="form-inline required" name="CaptchaForm[nombre]" type="text" value="">
								</div>
							</div>
				
				
							<!-- ******** APELLIDO ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
									<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(115); ?></p></label>
									<input class="form-inline" name="CaptchaForm[apellido]" type="text" value="">
								</div>
							</div>
						
						
							<!-- ******** EMAIL ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
								<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(116); ?></p></label>
									<input class="form-inline required" name="CaptchaForm[email]" type="email" value="">
									</div>
							</div>
						
						
							<!-- ******** TELÉFONO ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
								<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(117); ?></p></label>
									<input class="form-inline" name="CaptchaForm[telefono]" type="text" value="">
									</div>
							</div>
					
					
							<!-- ******** EMPRESA ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
								<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(118); ?></p></label>
									<input class="form-inline" name="CaptchaForm[empresa]" type="text" value="">
									</div>
							</div>
			
			
							<!-- ******** CARGO ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
							<div class="input-contacto">
								<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(119); ?></p></label>
									<input class="form-inline" name="CaptchaForm[cargo]" type="text" value="">
									</div>
							</div>
			
						
							<!-- ******** DIRECCIÓN ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
								<div class="input-contacto">
									<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(120); ?></p></label>
									<input class="form-inline" name="CaptchaForm[direccion]" type="text" value="">
								</div>
							</div>
					
					
							<!-- ******** DEPARTAMENTO ******** -->
							<div class="col-lg-6  col-md-6 col-xs-12">
							<div class="input-contacto">
									<label for="exampleInputName2"><p style="text-transform: uppercase; margin: 0;"><?php echo Textos::model()->GetText(121); ?></p></label>
										<input class="form-inline" name="CaptchaForm[departamento]" type="text" value="">
										</div>
							</div>
			
			
							<!-- ******** MENSAJE ******** -->
							<div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
								<div class="textarea-contacto">
								<label id="textarea-label" for="exampleInputName2">
								<p style="text-transform: uppercase; margin: 0 auto;"><?php echo Textos::model()->GetText(122); ?>
								</p>
								</label> 
									<textarea rows="3" id="textarea" name="CaptchaForm[mensaje]" class="required"></textarea>
									</div>
							</div>  <!--termina form textarea-->
					
					
							<!-- ******** BOTÓN ENVIAR ******** -->
							<div class="col-lg-12 col-md-12 col-xs-12" > 
									<div class="input-contacto" style="text-align:right;">
									<button id="enviar"  type="submit" class="pull-right"><?php echo Textos::model()->GetText(123); ?></button>
									</div>
							</div>
							<?php if(CCaptcha::checkRequirements()): ?>
							<div class="row">
								<br>
								<br>
								<br>
								<label>Código de seguridad</label>
								<div id="codeCaptcha">
								<?php
								$this->widget( 'CCaptcha', [
									'buttonLabel'   => '<span class="glyphicon glyphicon-refresh"></span>',
									'buttonOptions' => [
										'class' => 'btn-refresh-captcha',
										'style' => 'text-decoration: none; text-weight: bold;',
										'title' => Yii::t( 'zr', 'Get new code' ),
									]
								] );
								?>
								<?php 
								// click refresh button on page load
								Yii::app()->clientScript->registerScript( 'refresh-captcha', 
								'$(document).ready(function(){$(".btn-refresh-captcha").click();});' ); 
								?><br>
								<?php echo $form->textField($model,'verifyCode',array("placeholder"=>"Ingrese el código","style"=>"padding-top:10px;")); ?>
								</div>
								<?php $model->validate(); ?>
								<?php echo $form->error($model,'verifyCode'); ?>
							</div>
							<?php endif; ?>
							<?php $this->endWidget(); ?>
						</div>
						
							

							<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.min.js"></script>
						<script>
						 $("#form1").validate({
							submitHandler: function(form) {
								//$("#form1").fadeOut(500);
							SubmitFormContacto();
							
						  },
							errorElement: 'div',
							messages: {
								nombre: {
									required: "*Debe completar su nombre.",
								},
								email: {
									required: "*Debe proporcionar un mail de contacto válido.",
								},
								mensaje: {
									required: "*Debe ingresar un mensaje.",
								},
							},
							
						 });
						 
						$(document).ready(function () {

							$('#contactform').validate({
								errorElement: 'span',
								rules: {
									first: {
										required: true,
										minlength: [2],
									}
								},
								
								
							});

						});
						
						function SubmitFormContacto(){
							$.post( "http://<?php echo $_SERVER['SERVER_NAME']; ?>/webBago/br/web/contacto/", $( "#form1" ).serialize() ).done(function(data){
								//console.log("exito!");
								//$("#enviando").fadeOut(100);
								//$("#enviado").fadeIn(100);
								//$("#errorEnvio").hide();
							}).fail(function(){
								//$("#enviando").fadeOut(100);
								//$("#enviado").hide();
								//$("#errorEnvio").fadeIn();
							});
							//$("#form1").fadeOut(500);
							//$("#container-envio").fadeIn(500);
							//$("#enviando").fadeIn(500);
							//$("#enviado").hide();
							//$("#errorEnvio").hide();
						}
						</script>