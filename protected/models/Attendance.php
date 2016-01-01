<?php

/**
 * This is the model class for table "{{attendance}}".
 *
 * The followings are the available columns in table '{{attendance}}':
 * @property integer $ID
 * @property integer $Session
 * @property integer $Present
 * @property integer $Absent
 * @property integer $ID_Teacher
 * @property string $Date_create
 *
 * The followings are the available model relations:
 * @property Users $iDTeacher
 * @property AttendanceDetail[] $attendanceDetails
 */
class Attendance extends CActiveRecord
{
        public $Select_class;
        public $Select_subject;
        public $Select_session;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{attendance}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Session, Present, Absent, ID_Teacher', 'numerical', 'integerOnly'=>true),
			array('Date_create', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Session, Present, Absent, ID_Teacher, Date_create', 'safe', 'on'=>'search'),
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
			'iDTeacher' => array(self::BELONGS_TO, 'Users', 'ID_Teacher'),
			'attendanceDetails' => array(self::HAS_MANY, 'AttendanceDetail', 'ID_Attendance'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'Session' => 'Session',
			'Present' => 'Có mặt',
			'Absent' => 'Vắng mặt',
			'ID_Teacher' => 'ID Giảng viên',
			'Date_create' => 'Ngày tạo',
                        'Select_class' => 'Chọn Lớp:',
                        'Select_subject' => 'Chọn Môn học:',
                        'Select_session' => 'Chọn Session:',
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
		$criteria->compare('Session',$this->Session);
		$criteria->compare('Present',$this->Present);
		$criteria->compare('Absent',$this->Absent);
		$criteria->compare('ID_Teacher',$this->ID_Teacher);
		$criteria->compare('Date_create',$this->Date_create,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Attendance the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
	public static function getClassOptionsByFacutyId($id){
            $Data = array(0=>'Chọn lớp học');
            $listData = CHtml::listData(Classmanager::model()->findAll('Facuty_id=:Facuty_id', array('Facuty_id'=>$id)), 'ID', 'Name');
            foreach($listData as $key=>$value){
                $Data[$key] = $value;
            }
            return $Data;
        }
       
}
