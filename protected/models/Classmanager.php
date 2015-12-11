<?php

/**
 * This is the model class for table "{{classmanager}}".
 *
 * The followings are the available columns in table '{{classmanager}}':
 * @property integer $ID
 * @property string $Name
 * @property string $Description
 * @property string $Code
 * @property string $Code_ITI
 * @property string $Start_date
 * @property string $Finish_date
 * @property integer $Numberofstudent
 * @property integer $ID_course
 * @property integer $Facuty_id
 * @property integer $Status
 *
 * The followings are the available model relations:
 * @property ClassSubject[] $classSubjects
 * @property Course $iDCourse
 * @property Users $facuty
 * @property Student[] $students
 */
class Classmanager extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{classmanager}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Numberofstudent, ID_course, Facuty_id, Status', 'numerical', 'integerOnly'=>true),
			array('Name', 'length', 'max'=>100),
			array('Description', 'length', 'max'=>500),
			array('Code, Code_ITI', 'length', 'max'=>10),
			array('Start_date, Finish_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Name, Description, Code, Code_ITI, Start_date, Finish_date, Numberofstudent, ID_course, Facuty_id, Status', 'safe', 'on'=>'search'),
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
			'classSubjects' => array(self::HAS_MANY, 'ClassSubject', 'ID_Class'),
			'iDCourse' => array(self::BELONGS_TO, 'Course', 'ID_course'),
			'facuty' => array(self::BELONGS_TO, 'Users', 'Facuty_id'),
			'students' => array(self::HAS_MANY, 'Student', 'ID_Class'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'Name' => 'Name',
			'Description' => 'Description',
			'Code' => 'Code',
			'Code_ITI' => 'Code Iti',
			'Start_date' => 'Start Date',
			'Finish_date' => 'Finish Date',
			'Numberofstudent' => 'Numberofstudent',
			'ID_course' => 'Id Course',
			'Facuty_id' => 'Facuty',
			'Status' => 'Status',
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
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Code',$this->Code,true);
		$criteria->compare('Code_ITI',$this->Code_ITI,true);
		$criteria->compare('Start_date',$this->Start_date,true);
		$criteria->compare('Finish_date',$this->Finish_date,true);
		$criteria->compare('Numberofstudent',$this->Numberofstudent);
		$criteria->compare('ID_course',$this->ID_course);
		$criteria->compare('Facuty_id',$this->Facuty_id);
		$criteria->compare('Status',$this->Status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Classmanager the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
