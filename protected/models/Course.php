<?php

/**
 * This is the model class for table "{{course}}".
 *
 * The followings are the available columns in table '{{course}}':
 * @property integer $ID
 * @property string $Name
 * @property string $Description
 * @property integer $Parent_id
 * @property integer $Type
 * @property integer $Major_id
 * @property string $Version
 * @property string $Status
 *
 * The followings are the available model relations:
 * @property Classmanager[] $classmanagers
 * @property Major $major
 */
class Course extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{course}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name', 'required'),
			array('Parent_id, Type, Major_id', 'numerical', 'integerOnly'=>true),
			array('Name, Status', 'length', 'max'=>45),
			array('Description', 'length', 'max'=>500),
			array('Version', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Name, Description, Parent_id, Type, Major_id, Version, Status', 'safe', 'on'=>'search'),
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
			'classmanagers' => array(self::HAS_MANY, 'Classmanager', 'ID_course'),
			'major' => array(self::BELONGS_TO, 'Major', 'Major_id'),
                        'Childs' => array(self::HAS_MANY, 'Course', 'Parent_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'Name' => 'Tên khóa học',
			'Description' => 'Mô tả',
			'Parent_id' => 'Parent',
			'Type' => 'Type',
			'Major_id' => 'Major',
			'Version' => 'Version',
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
		$criteria->compare('Parent_id',$this->Parent_id);
		$criteria->compare('Type',$this->Type);
		$criteria->compare('Major_id',$this->Major_id);
		$criteria->compare('Version',$this->Version,true);
		$criteria->compare('Status',$this->Status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Course the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
   
    public static function getCourseOptions(){
        return CHtml::listData(Course::model()->findAll(), 'ID', 'Name');
    }
}
