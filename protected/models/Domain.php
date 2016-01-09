<?php

/**
 * This is the model class for table "{{domain}}".
 *
 * The followings are the available columns in table '{{domain}}':
 * @property integer $ID
 * @property string $Name
 * @property string $Type
 */
class Domain extends CActiveRecord
{
        public function primaryKey(){
            return 'ID';
        }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{domain}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID', 'required'),
			array('ID', 'numerical', 'integerOnly'=>true),
			array('Name', 'length', 'max'=>30),
			array('Type', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Name, Type', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'Name' => 'Giá trị',
			'Type' => 'Nhóm',
			'ID:' => 'ID:',
			'Name:' => 'Giá trị:',
			'Type:' => 'Nhóm:',
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
		$criteria->compare('Type',$this->Type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array('pageSize'=>20),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Domain the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public static function getAccountTypeOptions(){
            $result = CHtml::listData(Domain::model()->findAll('Type=:Type', array('Type'=>'type_account')), 'ID', 'Name');
            if(empty($result)){
                return array(0=>'Chưa có dữ liệu');
            }else{
                return $result;
            }
        }
        
        public static function getAccountStatusOptions(){
            $result = CHtml::listData(Domain::model()->findAll('Type=:Type', array('Type'=>'status_account')), 'ID', 'Name');
            if(empty($result)){
                return array(0=>'Chưa có dữ liệu');
            }else{
                return $result;
            }
        }
        
        public static function getSubjectTypeOptions(){
            $result = CHtml::listData(Domain::model()->findAll('Type=:Type', array('Type'=>'subject')), 'ID', 'Name');
            if(empty($result)){
                return array(0=>'Chưa có dữ liệu');
            }else{
                return $result;
            }
        }
        
        public static function getDomainTypeOptions(){
            $result = array(
                'type_account'=>'Nhóm tài khoản',
                'status_account'=>'Trạng thái tài khoản',
                'classmanager'=>'Trạng thái lớp học',
                'course'=>'Trạng thái khóa học',  
                'grouprules'=>'Trạng thái nhóm phân quyền',
                'hour'=>'Giờ học',
                'post'=>'Trạng thái bài viết',
                'student'=>'Trạng thái học viên',
                'subject'=>'Trạng thái môn học',
                'users'=>'Trạng thái giảng viên/giáo vụ',
            );
            return $result;
        }
        
        public static function getStudentStatusOptions(){
            return CHtml::listData(Domain::model()->findAll('Type=:Type', array('Type'=>'student')), 'ID', 'Name');
        }
        
        public static function getUserStatusOptions(){
            return CHtml::listData(Domain::model()->findAll('Type=:Type', array('Type'=>'users')), 'ID', 'Name');
        }
        
        public static function getAttendanceStatus(){
            return Domain::model()->findAll('Type=:Type', array('Type'=>'attendance'));
        }
}
