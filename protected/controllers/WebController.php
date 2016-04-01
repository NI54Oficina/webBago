<?php

class WebController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/admin';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
			'postOnly + contacto', // we only allow deletion via POST requesty
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view',"get","contacto"),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionGet($data,$id=""){
		
		$model="";
		if($data=="vademecum"){
			$id= substr($id,2);
			$auxSeccion =Seccion::model()->findByAttributes(array('id'=>$id));;
			
			if($auxSeccion!=null){
				//$traduccion= SeccionRegionalizacion::model()->findByAttributes(array("idCategoria"=>$id,"pais"=>Yii::app()->session['pais']));
				/*if($traduccion!=null){
					$auxSeccion->url=$traduccion->nombre;;
				}else{
					$auxSeccion->url= $auxSeccion->nombre;
				}*/
				$model=$auxSeccion;
			}
			
		}else
		if($data=="productos"){
			//tendria que buscar por id y no por nombre
			$id= substr($id,2);
			$auxSeccion =Producto::model()->findByAttributes(array('id'=>$id));;
			if($auxSeccion->pais!=$_SESSION["pais"]){
				$auxPais=Pais::model()->findByPk($_SESSION["pais"]);
				if($auxPais->catalogo==1||($auxPais->catalogo==0&&$auxSeccion->pais!=8)){
					header("Location: http://".$_SERVER['SERVER_NAME']."/".$_SESSION["webRoot"].$_SESSION["short"]."/");
					exit();
				}
			}
			if($auxSeccion!=null){
				$model=$auxSeccion;
			}
		}else{
			$model=$id;
		}
		//echo Pais::model()->findByPk($_SESSION['pais'])->nombre;
		if($data!="home"&&$data!="paises"){
			//			Metatags::model()->findByAttributes(array('id'=>$id));
			$pagina= Page::model()->findByAttributes(array("url"=>$data));
			$metas=null;
			//if($pagina){
				//$metas= MetatagPage::model()->findByAttributes(array('idPage'=>$pagina->id));
			//}
			//if(!isset($metas)){
				//$metas= MetatagPage::model()->findAllByAttributes(array('idPage'=>"1",));
//			}
			
			if($pagina){
				$metas= $pagina->id;
			}else{
				$metas=1;
			}
			
			//$metas= MetatagPage::model()->findAllByAttributes(array('idPage'=>"1",));
			$this->renderPartial("//static/layout",$metas);
			$this->renderPartial("//static/".$data,$model);
			$this->renderPartial("//static/footer");
		}else{
			$this->renderPartial("//static/".$data,$model);
		}
	}
	
	public function actionContacto(){
		/*foreach($_POST as $key => $value){
			echo $key;
			echo "<br>";
			echo $value;
			echo "<br><br>";
		}*/
		
		Yii::import('application.extensions.phpmailer.JPhpMailer');
		$mail = new JPhpMailer;
		$mail->SetFrom('test@testni54.com', "Contacto de ". $_POST["nombre"]." ".$_POST["apellido"]);
		$mail->AddReplyTo($_POST["email"], $_POST["nombre"]." ".$_POST["apellido"]);
		$mail->Subject = 'Contacto desde la web de Biogenesis Bago';
		$mail->AltBody = 'Para ver este mensaje, utilice un cliente web con capacidad de renderear html.';
		$mensaje="";
		foreach($_POST as $key=>$value){
			$mensaje.="<strong>".$key.":</strong> ".$value."<br>";
		}
		$mail->MsgHTML($mensaje);
		$mail->AddAddress('fran@ni54.com', 'Fran');
		$mail->Send();
		echo "enviado";

		
	}
	
	protected function beforeAction($event)
    {
        $conf = new PaisChecker;
        $conf->PaisCheck();
        return true;
    }
}
