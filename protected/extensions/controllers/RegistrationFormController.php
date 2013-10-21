<?php

require(Yii::app()->basePath.'/lib/Mail_Postmark.php');

define('POSTMARKAPP_API_KEY', '29f9c012-8a4a-48db-99ec-a0aa9a3d7a8e');

	// Create a "Sender signature", then use the "From Email" here.
	// POSTMARKAPP_MAIL_FROM_NAME is optional, and can be overridden
	// with Mail_Postmark::fromName()
define('POSTMARKAPP_MAIL_FROM_ADDRESS', 'placements@octathorpeweb.com');
define('POSTMARKAPP_MAIL_FROM_NAME', 'Octathorpe Web Consultants');

class RegistrationFormController extends Controller
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
				'actions'=>array('index','confirm','create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array(),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','update','view'),
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
	
	public function actionConfirm()
	{
		$this->render('confirm');
	}
	
	public function Sendemail($id) {
		$model = $this->loadModel($id);
		/*
		$message="You have succesfully registered for our Recruitment Drive.\r\n";
		$message.="Registration# $model->id.\r\n";
		$message.="Name: $model->name.\n\n";
		$message.="Mobile: $model->mobile.\r\n";
		*/
		$message='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Author" content="Octathorpe Web-Consultants, www.octathorpeweb.com"></head>';
		$message = '<body style="background:#f4f4f4; font-size:14px">';
		$message .= '<table width="100%" border="0" cellspacing="10" cellpadding="15">
<tr style="background:#111"><td align="center">&nbsp;&nbsp;<img src="http://octathorpeweb.com/images/logo.png" alt="Octathorpe" /></td></tr>
</table><br />
<table width="50%" border="0" cellspacing="5" cellpadding="15">
<tr><td><h2>Thank you for registering with us, '.$model->name.'</h2></td></tr>
<tr style="background:#EEE"><td>Registration# <b>'.$model->id.'</b></td></tr>
<tr style="background:#EEE"><td>Name: <b>'.$model->name.'</b></td></tr>
<tr style="background:#EEE"><td>Mobile: <b>'.$model->mobile.'</b></td></tr>
</table><br /><p>Shortlisted Candidates will be intimated by email</p><br /><br />
</body></html>';

		
		//$url = $url=$this->createAbsoluteUrl('/user/registration',array('invitation_token' => $model->invitation_token));
			Mail_Postmark::compose() ->addTo($model->email)
			    ->subject('Octathorpe Recruitment Drive 2011 - Registration Confirmed')
			    ->messageHTML($message)
			    ->send();
		//echo "Email Sent";
		return 0;
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new RegistrationForm;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['RegistrationForm']))
		{
			$model->attributes=$_POST['RegistrationForm'];
			//$time=date('j-m-Y  H:i:s');
			$model->created=date('j-m-Y  H:i:s');
			$model->status='New';
			$model->file_name= CUploadedFile::getInstance($model,'file_upload');
			
			if(isset($model->file_name)) {
               $extension = $model->file_name->getExtensionName();
           }
			
			//echo $extension;
			$gpa=$_POST['RegistrationForm']['gpa'];
			if($model->validate()) 
			{
				$model->save();
				switch($gpa)
				{
				  case '7.0-7.49':
				  	$gpa='7';
					break;
                  case '7.5-7.99':
				  	$gpa='7.5';
					break;
                  case '8.0-8.49':
				  	$gpa='8';
					break;
                  case '8.5-8.99':
				  	$gpa='8.5';
					break;
                  case '9.0-9.49':
				  	$gpa='9';
					break;
                  case '9.5' :
				  	$gpa='9.5';
					break;
				 default:
				 	$gpa='other';
				}
				$path = "/resume/$gpa/$model->id.$extension";
				//$path = "/resume/$gpa/$model->file_name";
				$filename = Yii::app()->basePath."/..$path";
				$model->file_name->saveAs($filename);
				$model->file_upload= $path;
				
				$model->save();
				/*
				$to = $_POST['RegistrationForm']['email'];
				$subject = "Octathorpe Recruitment 2011 - Registration Confirmed";
				$message = "This is to confirm that we have received your Application. Your Registration id is #$model->id";
				$from = "no-reply@octathorpeweb.com";
				$headers = "From:" . $from;*/
				//mail($to,$subject,$message,$headers);
				$this->Sendemail($model->id);
				$this->redirect(array('confirm'));
			}
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

		if(isset($_POST['RegistrationForm']))
		{
			$model->attributes=$_POST['RegistrationForm'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
	 /*
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
*/
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('RegistrationForm');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new RegistrationForm('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RegistrationForm']))
			$model->attributes=$_GET['RegistrationForm'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=RegistrationForm::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='registration-form-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
