<?php

/**
 * This is the model class for table "{{student}}".
 *
 * The followings are the available columns in table '{{student}}':
 * @property integer $ID
 * @property string $Firstname
 * @property string $Lastname
 * @property string $Phonenumber
 * @property string $Email
 * @property integer $ID_Account
 * @property integer $Gender
 * @property string $Birthday
 * @property integer $Status
 * @property string $Description
 * @property integer $ID_Class
 * @property string $Address
 * @property string $Phone_Parent
 *
 * The followings are the available model relations:
 * @property AttendanceDetail[] $attendanceDetails
 * @property Account $iDAccount
 * @property Classmanager $iDClass
 */
class Student extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{student}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Firstname, Phonenumber, Email, Gender', 'required'),
			array('ID_Account, Gender, Status, ID_Class', 'numerical', 'integerOnly'=>true),
			array('Firstname', 'length', 'max'=>15),
			array('Lastname, Birthday', 'length', 'max'=>20),
			array('Phonenumber, Phone_Parent', 'length', 'max'=>12),
			array('Email', 'length', 'max'=>45),
			array('Description', 'length', 'max'=>300),
			array('Address', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Firstname, Lastname, Phonenumber, Email, ID_Account, Gender, Birthday, Status, Description, ID_Class, Address, Phone_Parent', 'safe', 'on'=>'search'),
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
			'attendanceDetails' => array(self::HAS_MANY, 'AttendanceDetail', 'ID_Student'),
			'iDAccount' => array(self::BELONGS_TO, 'Account', 'ID_Account'),
			'iDClass' => array(self::BELONGS_TO, 'Classmanager', 'ID_Class'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'Firstname' => 'Firstname',
			'Lastname' => 'Lastname',
			'Phonenumber' => 'Phonenumber',
			'Email' => 'Email',
			'ID_Account' => 'Id Account',
			'Gender' => 'Gender',
			'Birthday' => 'Birthday',
			'Status' => 'Status',
			'Description' => 'Description',
			'ID_Class' => 'Id Class',
			'Address' => 'Address',
			'Phone_Parent' => 'Phone Parent',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('Firstname',$this->Firstname,true);
		$criteria->compare('Lastname',$this->Lastname,true);
		$criteria->compare('Phonenumber',$this->Phonenumber,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('ID_Account',$this->ID_Account);
		$criteria->compare('Gender',$this->Gender);
		$criteria->compare('Birthday',$this->Birthday,true);
		$criteria->compare('Status',$this->Status);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('ID_Class',$this->ID_Class);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('Phone_Parent',$this->Phone_Parent,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Student the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
