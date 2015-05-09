<?php

/**
 * This is the model class for table "JobService".
 *
 * The followings are the available columns in table 'JobService':
 * @property integer $id
 * @property integer $job_id
 * @property integer $item_id
 * @property string $model
 * @property integer $actual_price
 * @property string $date_created
 *
 * The followings are the available model relations:
 * @property Job $job
 */
class JobService extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'JobService';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('job_id, item_id', 'required'),
			array('job_id, item_id, actual_price', 'numerical', 'integerOnly'=>true),
			array('model', 'length', 'max'=>32),
			array('date_created', 'CDefaultValueValidator', 'value'=>date("Y-m-d H:i:s"), 'setOnEmpty' => false, 'on'=>'create'),
			array('date_created', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, job_id, item_id, model, actual_price, date_created', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'job' => array(self::BELONGS_TO, 'Job', 'job_id'),
			'service' => array(self::BELONGS_TO, 'Service', 'service_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'job_id' => 'Job',
			'item_id' => 'Item',
			'model' => 'Service Type',
			'actual_price' => 'Actual Price',
			'date_created' => 'Date Created',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('job_id',$this->job_id);
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('actual_price',$this->actual_price);
		$criteria->compare('date_created',$this->date_created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JobService the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * 
	 */
	public function getItem()
	{
		switch($this->model){
			case 'Service':
				return Service::model()->findByPk($this->item_id)->name;
				break;
		}
		return null;
	}
}
