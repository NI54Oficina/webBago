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
			if(strlen($firstArg)!=2){
				//redirect selección paises, guardar en sesión pagina actual
				header("Location: http://".$_SERVER['SERVER_NAME']."/".$webRoot."/paises");
			}else{
				//si es un país valido, asegurarse que sea igual al país en sessión, en caso contrario setear el pais en session correctamente
			}
            $permissions= Permission::model()->findAllByAttributes(
			array('url'=>$currentUrl));
			foreach($permissions as $permission){
				if(!Yii::app()->user->checkAccess($permission->operation)){
					
					header("Location: http://".$_SERVER['SERVER_NAME']."/".$webRoot."/site/error");
					exit();
				}
			}
        }
    }
?>