<?php

class ClassmanagerController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
				'actions'=>array('index','view','ajaxview','ajaxcreate','ajaxupdate'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Classmanager;

		$_SESSION['course_id'] = 1;
		if(isset($_GET['ID'])){
			$_SESSION['course_id'] = $_GET['ID'];
		}
		$course = Course::model()->find(' ID = :id', array('id'=>$_SESSION['course_id']));
		if(!empty($course))
                    $model->ID_course = $course->Name;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Classmanager']))
		{
			$model->attributes=$_POST['Classmanager'];
			$model->ID_course = $_SESSION['course_id'];
			if($model->save())
				$this->redirect(array('index','id'=>$model->ID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Classmanager']))
		{
			$model->attributes=$_POST['Classmanager'];
			if($model->save())
				$this->redirect(array('index','id'=>$model->ID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionAdmin()
	{
		$dataProvider=new CActiveDataProvider('Classmanager');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		if(!isset($_SESSION['course_id']))
			$_SESSION['course_id'] = 1;
		
		if(isset($_GET['ID'])) $_SESSION['course_id'] = $_GET['ID'];
		$model=new Classmanager('search');
		$model->unsetAttributes();  // clear any default values
		$model->ID_course = $_SESSION['course_id'];
		if(isset($_GET['Classmanager']))
			$model->attributes=$_GET['Classmanager'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Classmanager the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Classmanager::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Classmanager $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='classmanager-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        
	public function actionAjaxView($id)
	{
		$this->renderPartial('ajaxview',array(
			'model'=>$this->loadModel($id),
		));
	}
        
        
	public function actionAjaxCreate()
	{
		$model=new Classmanager;

		$_SESSION['course_id'] = 1;
		if(isset($_GET['ID'])){
			$_SESSION['course_id'] = $_GET['ID'];
		}
		$course = Course::model()->find(' ID = :id', array('id'=>$_SESSION['course_id']));
		if(!empty($course))
                    $model->ID_course = $course->Name;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Classmanager']))
		{
			$model->attributes=$_POST['Classmanager'];
			$model->ID_course = $_SESSION['course_id'];
			if($model->save())
				$this->redirect(array('index','id'=>$model->ID));
		}

		$this->renderPartial('_form',array(
			'model'=>$model,
		), false, true);
	}
        
        
        public function actionAjaxUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Classmanager']))
		{
			$model->attributes=$_POST['Classmanager'];
			if($model->save())
				$this->redirect(array('index','id'=>$model->ID));
		}

		$this->renderPartial('_form',array(
			'model'=>$model,
		), false, true);
	}
}
