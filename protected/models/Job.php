<?php

/**
 * This is the model class for table "Job".
 *
 * The followings are the available columns in table 'Job':
 * @property integer $id
 * @property integer $contact_id
 * @property string $description
 * @property string $created_on
 * @property string $estimated_end_date
 * @property string $completed_on
 * @property integer $actual_price
 * @property integer $discount
 * @property integer $final_price
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Contact $contact
 * @property JobService[] $jobServices
 */
class Job extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Job';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contact_id, description', 'required'),
			array('contact_id, actual_price, discount, final_price', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>2048),
			array('status', 'length', 'max'=>23),
			array('created_on', 'CDefaultValueValidator', 'value'=>date("Y-m-d H:i:s"), 'setOnEmpty' => false, 'on'=>'create'),
			array('created_on, estimated_end_date, completed_on', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, contact_id, description, created_on, estimated_end_date, completed_on, actual_price, discount, final_price, status', 'safe', 'on'=>'search'),
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
			'contact' => array(self::BELONGS_TO, 'Contact', 'contact_id'),
			'jobServices' => array(self::HAS_MANY, 'JobService', 'job_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'contact_id' => 'Contact',
			'description' => 'Description',
			'created_on' => 'Created On',
			'estimated_end_date' => 'Estimated End Date',
			'completed_on' => 'Completed On',
			'actual_price' => 'Actual Price',
			'discount' => 'Discount',
			'final_price' => 'Final Price',
			'status' => 'Status',
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
		$criteria->compare('contact_id',$this->contact_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('estimated_end_date',$this->estimated_end_date,true);
		$criteria->compare('completed_on',$this->completed_on,true);
		$criteria->compare('actual_price',$this->actual_price);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('final_price',$this->final_price);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Job the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function beforeValidate()
	{
		$this->final_price = $this->actual_price - $this->discount;
		return parent::beforeValidate();
	}
}
