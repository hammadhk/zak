<?php

/**
 * This is the model class for table "DailyExpense".
 *
 * The followings are the available columns in table 'DailyExpense':
 * @property integer $id
 * @property string $description
 * @property integer $expense
 * @property string $date
 * @property integer $expense_item_id
 *
 * The followings are the available model relations:
 * @property DailyExpenseItem $expenseItem
 */
class DailyExpense extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'DailyExpense';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('expense, expense_item_id', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>512),
			//array('date, expense_item_id', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, description, expense, date, expense_item_id', 'safe', 'on'=>'search'),
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
			'expenseItem' => array(self::BELONGS_TO, 'DailyExpenseItem', 'expense_item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'description' => 'Description',
			'expense' => 'Expense',
			//'date' => 'Date',
			'expense_item_id' => 'Expense Item',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('expense',$this->expense);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('expense_item_id',$this->expense_item_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DailyExpense the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getItemName() {
		
		return (!empty($this->expenseItem)?$this->expenseItem->name:'');
	}
}
