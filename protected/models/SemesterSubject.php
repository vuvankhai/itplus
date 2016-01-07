<?php

/**
 * This is the model class for table "{{semester_subject}}".
 *
 * The followings are the available columns in table '{{semester_subject}}':
 * @property integer $ID
 * @property integer $ID_Semester
 * @property integer $ID_Subject
 * @property integer $Hour
 * @property string $Description
 *
 * The followings are the available model relations:
 * @property Semester $iDSemester
 * @property Subject $iDSubject
 */
class SemesterSubject extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{semester_subject}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_Semester, ID_Subject, Hour', 'numerical', 'integerOnly'=>true),
			array('Description', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, ID_Semester, ID_Subject, Hour, Description', 'safe', 'on'=>'search'),
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
			'iDSemester' => array(self::BELONGS_TO, 'Semester', 'ID_Semester'),
			'iDSubject' => array(self::BELONGS_TO, 'Subject', 'ID_Subject'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'ID_Semester' => 'Học kỳ',
			'ID_Subject' => 'Môn học',
			'Hour' => 'Tổng số giờ học',
			'Description' => 'Mô tả',
			'ID_Semester:' => 'Học kỳ:',
			'ID_Subject:' => 'Môn học:',
			'Hour:' => 'Tổng số giờ học:',
			'Description:' => 'Mô tả:',
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
                $criteria->with = array('iDSemester', 'iDSubject');
                
		$criteria->compare('ID',$this->ID);
		$criteria->compare('iDSemester.Name',$this->ID_Semester, true);
		$criteria->compare('iDSubject.Name',$this->ID_Subject, true);
		$criteria->compare('Hour',$this->Hour);
		$criteria->compare('Description',$this->Description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SemesterSubject the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
