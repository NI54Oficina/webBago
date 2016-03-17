<?php
class PaisChecker extends CApplicationComponent
    {
		
        public function PaisCheck()
        {
			$webRoot="webBago";
			$currentUrl=str_replace($webRoot,"",$_SERVER['REQUEST_URI']);
			//Yii::log("poyo", CLogger::LEVEL_ERROR, "poyo2");
				
			if($currentUrl[0]=="/"){
				$currentUrl=substr ($currentUrl,2);
			}
			$firstArg= substr($currentUrl,0,strpos ($currentUrl,"/"));
			//echo "<div style='width:100%;height:20px;background-color:white;color:black;'>".$firstArg."</div>";
			if(strlen($firstArg)!=2&&$firstArg!="paises"){
				//echo "<div style='width:100%;height:20px;background-color:white;color:black;'>"."entra"."</div>";
				//redirect selección paises, guardar en sesión pagina actual
				//header("Location: http://".$_SERVER['SERVER_NAME']."/".$webRoot."/paises");
			}else{
				//si es un país valido, asegurarse que sea igual al país en sessión, en caso contrario setear el pais en session correctamente
				//echo "<div style='width:100%;height:20px;background-color:white;color:black;'>"."entra2"."</div>";
				header("Location: http://".$_SERVER['SERVER_NAME']."/".$webRoot."/paises");
				exit();
			}
            
        }
    }
?>