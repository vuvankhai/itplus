<?php

/**
 * This is the model class for table "{{semester}}".
 *
 * The followings are the available columns in table '{{semester}}':
 * @property integer $ID
 * @property string $Name
 * @property integer $ID_Course
 *
 * The followings are the available model relations:
 * @property Course $iDCourse
 * @property SemesterSubject[] $semesterSubjects
 */
class Semester extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{semester}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_Course', 'numerical', 'integerOnly'=>true),
			array('Name', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Name, ID_Course', 'safe', 'on'=>'search'),
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
			'iDCourse' => array(self::BELONGS_TO, 'Course', 'ID_Course'),
			'semesterSubjects' => array(self::HAS_MANY, 'SemesterSubject', 'ID_Semester'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'Name' => 'Học kỳ',
			'ID_Course' => 'Khóa học',
			'Name:' => 'Học kỳ:',
			'ID_Course:' => 'Khóa học:',
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
                $criteria->with = array('iDCourse');
                
		$criteria->compare('ID',$this->ID);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('iDCourse.Name',$this->ID_Course, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Semester the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public static function getSemesterOptions(){
            return CHtml::listData(Semester::model()->findAll(), 'ID', 'Name');
        }
}
