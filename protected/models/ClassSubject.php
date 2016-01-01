<?php

/**
 * This is the model class for table "{{class_subject}}".
 *
 * The followings are the available columns in table '{{class_subject}}':
 * @property integer $ID
 * @property integer $ID_Class
 * @property integer $ID_Room
 * @property integer $ID_Hour
 * @property integer $ID_Subject
 * @property string $Start_date
 * @property string $Finish_date
 * @property integer $ID_Facuty
 * @property string $Date_Exam
 *
 * The followings are the available model relations:
 * @property Classmanager $iDClass
 * @property Users $iDFacuty
 * @property Hour $iDHour
 * @property Room $iDRoom
 * @property Subject $iDSubject
 */
class ClassSubject extends CActiveRecord
{
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{class_subject}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_Class, ID_Room, ID_Hour, ID_Subject, ID_Facuty', 'numerical', 'integerOnly'=>true),
			array('Start_date, Finish_date, Date_Exam', 'safe'),
			array('Finish_date', 'checkDate'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, ID_Class, ID_Room, ID_Hour, ID_Subject, Start_date, Finish_date, ID_Facuty, Date_Exam', 'safe', 'on'=>'search'),
		);
	}

	public function checkDate($attribute,$params){
		if($this->Start_date > $this->Finish_date){
			$this->addError($attribute, 'Ngày kết thúc phải sau ngày bắt đầu');
		}
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                        'iDClass' => array(self::BELONGS_TO, 'Classmanager', 'ID_Class'),
			'iDFacuty' => array(self::BELONGS_TO, 'Users', 'ID_Facuty'),
			'iDHour' => array(self::BELONGS_TO, 'Hour', 'ID_Hour'),
			'iDRoom' => array(self::BELONGS_TO, 'Room', 'ID_Room'),
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
			'ID_Class' => 'Lớp học',
			'ID_Room' => 'Phòng học',
			'ID_Hour' => 'Giờ học',
			'ID_Subject' => 'Môn học',
			'Start_date' => 'Ngày bắt đầu',
			'Finish_date' => 'Ngày kết thúc',
			'ID_Facuty' => 'Giảng viên',
			'Date_Exam' => 'Ngày thi',
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
                $criteria->with = array('iDClass', 'iDFacuty', 'iDHour', 'iDRoom', 'iDSubject');
                
                
		$criteria->compare('ID',$this->ID);
		$criteria->compare('iDClass.Name',$this->ID_Class, true);//ID_Class
		$criteria->compare('iDRoom.Name',$this->ID_Room, true);//ID_Room
		$criteria->compare('iDHour.Type',$this->ID_Hour, true);//ID_Hour
		$criteria->compare('iDSubject.Name',$this->ID_Subject, true);//ID_Subject
		$criteria->compare('Start_date',$this->Start_date,true);
		$criteria->compare('Finish_date',$this->Finish_date,true);
		$criteria->compare('iDFacuty.Name',$this->ID_Facuty, true);//ID_Facuty
		$criteria->compare('Date_Exam',$this->Date_Exam,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ClassSubject the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
