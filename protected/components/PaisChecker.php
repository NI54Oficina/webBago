<?php
class PaisChecker extends CApplicationComponent
    {
		
        public function PaisCheck()
        {
			$_SESSION["webRoot"]="webBago/";
			$webRoot=$_SESSION["webRoot"];
			$currentUrl=str_replace($webRoot,"",$_SERVER['REQUEST_URI']);
			
			echo $currentUrl;
			exit();
				
			if($currentUrl[0]=="/"){
				$currentUrl=substr ($currentUrl,2);
			}
			$endFirstArg= strpos ($currentUrl,"/");
			if(!$endFirstArg){
			 $firstArg=$currentUrl;	
			}else{
			$firstArg= substr($currentUrl,0,$endFirstArg);
			}
			
			if(strlen($firstArg)==2){
				$currentPais =Pais::model()->findByAttributes(array('short'=>$firstArg));
				$_SESSION["short"]= $currentPais->short;
				$_SESSION["pais"]= $currentPais->id;
				$_SESSION["lng"]= $currentPais->lng;
				
			}else if($firstArg!="paises"){
				
				if( isset($_SESSION["pais"])){
					$short= Pais::model()->findByPk($_SESSION["pais"])->short;
					header("Location: http://".$_SERVER['SERVER_NAME']."/".$webRoot.$short."/".$currentUrl);
				}else{
					if(!isset($_SESSION["redirectURL"])){
						echo "entra session";
						$_SESSION["redirectURL"]= $currentUrl;
					}else{
						
					}
					//header("Location: http://".$_SERVER['SERVER_NAME']."/".$webRoot."paises");
				}
				
				//exit();
			}
            
        }
		
		public function getBaseUrl(){
			$short="";
			if(isset($_SESSION["short"])){
				$short=$_SESSION["short"];
			}
			$baseUrl="http://" . $_SERVER['SERVER_NAME']. $_SERVER['PHP_SELF'];
			$baseUrl= str_replace("index.php","",$baseUrl);
			return $baseUrl.$short;
			/*if($this->_baseUrl===null){
				$this->_baseUrl=rtrim(dirname($this->getScriptUrl()),'\\/');
			}
			$short="ar/";
			if($absolute){
				return $this->getHostInfo().$short . $this->_baseUrl;
			}else{
				return $short.$this->_baseUrl;
			}*/
			//return $absolute ? $this->getHostInfo() . $this->_baseUrl : $this->_baseUrl;
		}
		
		public function getSeccion($idSeccion){
			$traduccion= SeccionRegionalizacion::model()->findByAttributes(array("idCategoria"=>$idSeccion,"pais"=>Yii::app()->session['pais']));
			if($traduccion!=null){
				return $traduccion->nombre;;
			}else{
				return Seccion::model()->findByPk($idSeccion)->nombre;
			}
		}
    }
?>