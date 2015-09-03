<?php

class JobController extends Controller
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
				'actions'=>array('index','view', 'printPdf'),
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
	 * Print PDF of the receipt.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionPrintPdf($id)
	{
		$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);parent:
		spl_autoload_register(array('YiiBase','autoload'));
		
		$header_logo = '';
		if (@file_exists('/home/umar/zak/zak/protected/zak.jpg')) {
			$header_logo = 'zak.jpg';
		}
		define ('ZAK_HEADER_LOGO', $header_logo);
		
		if (!empty($header_logo)) {
			define ('HEADER_LOGO_WIDTH', 170);
		} else {
			define ('HEADER_LOGO_WIDTH', 0);
		}
		
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		
		//$pdf->SetTitle("Selling Report -2013");
		$pdf->SetHeaderData(ZAK_HEADER_LOGO, HEADER_LOGO_WIDTH, "", "");
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		$pdf->SetFont('helvetica', '', 8);
		$pdf->SetTextColor(80,80,80);
		$pdf->AddPage();
		
		//Write the html
		$html = "<div style='margin-bottom:15px;'>This is testing HTML.</div>";
		//Convert the Html to a pdf document
		//$pdf->writeHTML($html, true, false, true, false, '');
		
		$header = array('Country', 'Capital', 'Area (sq km)', 'Pop. (thousands)'); //TODO:you can change this Header information according to your need.Also create a Dynamic Header.
		
		
		$ticketSolds = DailyExpenseItem::model()->findAll();
		$ticketSoldData = array();
		foreach ($ticketSolds as $ticketsold){
			$data = array(
					$ticketsold->id,$ticketsold->name
			);
			$ticketSoldData[] = $data;
		}
		
		$headerForTicketSold = array(DailyExpenseItem::model()->getAttributeLabel('id'), DailyExpenseItem::model()->getAttributeLabel('name')
		);
		/* echo '<pre>';
		 print_r($ticketSoldData);
		exit; */
		// data loading
		//$data = $pdf->LoadData(Yii::getPathOfAlias('ext.tcpdf').DIRECTORY_SEPARATOR.'table_data_demo.txt'); //This is the example to load a data from text file. You can change here code to generate a Data Set from your model active Records. Any how we need a Data set Array here.
		// print colored table
		$pdf->ColoredTable($headerForTicketSold, $ticketSoldData);
		// reset pointer to the last page
		$pdf->lastPage();
		
		//Close and output PDF document
		$pdf->Output('filename.pdf', 'I');
		//Yii::app()->end();
	}
	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Job;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Job']))
		{
			$model->attributes=$_POST['Job'];
			$model->contact_id = $_GET['contact_id'];
			if($model->save())
				$this->redirect(array('/contact/view','id'=>$model->contact_id));
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

		if(isset($_POST['Job']))
		{
			$model->attributes=$_POST['Job'];
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
	/* public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Job');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	} */

	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new Job('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Job']))
			$model->attributes=$_GET['Job'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Job the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Job::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Job $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='job-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
