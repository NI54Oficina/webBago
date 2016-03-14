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
				'actions'=>array('index','view',"get"),
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
		if($data!="base"){
			//$this->layout="lay";
		}
		//echo $id;
		$model="";
		if($data=="vademecum"){
			$id= substr($id,2);
			$auxSeccion =Seccion::model()->findByAttributes(array('id'=>$id));;
			if($auxSeccion!=null){
				$model=$auxSeccion;
			}
		}
		if($data=="productos"){
			//tendria que buscar por id y no por nombre
			$id= substr($id,2);
			$auxSeccion =Producto::model()->findByAttributes(array('id'=>$id));;
			if($auxSeccion!=null){
				$model=$auxSeccion;
			}
		}
		//echo Pais::model()->findByPk($_SESSION['pais'])->nombre;
		if($data!="base"){
		$this->renderPartial("//static/layout");
		$this->renderPartial("//static/".$data,$model);
		$this->renderPartial("//static/footer");
		}else{
			$this->renderPartial("//static/".$data,$model);
		}
	}
}
