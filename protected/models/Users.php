<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $ID
 * @property integer $ID_Account
 * @property string $Name
 * @property string $Phonenumber
 * @property string $Email
 * @property string $Address
 * @property string $Description
 * @property string $Avatar
 * @property string $Status
 *
 * The followings are the available model relations:
 * @property Attendance[] $attendances
 * @property ClassSubject[] $classSubjects
 * @property Classmanager[] $classmanagers
 * @property Account $iDAccount
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_Account, Name, Phonenumber, Address, Description', 'required'),
			array('ID_Account', 'numerical', 'integerOnly'=>true),
			array('Name, Address, Avatar', 'length', 'max'=>50),
			array('Phonenumber', 'length', 'max'=>12),
			array('Email', 'length', 'max'=>45),
			array('Description', 'length', 'max'=>500),
			array('Status', 'length', 'max'=>30),
			array('Avatar', 'file', 'types'=>'jpg,jpeg,gif,png', 'maxSize'=>1024*1024*2, 'on'=>'upload'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, ID_Account, Name, Phonenumber, Email, Address, Description, Avatar, Status', 'safe', 'on'=>'search'),
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
			'attendances' => array(self::HAS_MANY, 'Attendance', 'ID_Teacher'),
			'classSubjects' => array(self::HAS_MANY, 'ClassSubject', 'ID_Facuty'),
			'classmanagers' => array(self::HAS_MANY, 'Classmanager', 'Facuty_id'),
			'iDAccount' => array(self::BELONGS_TO, 'Account', 'ID_Account'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'ID_Account' => 'Id Tài khoản',
			'Name' => 'Tên',
			'Phonenumber' => 'Điện thoại',
			'Email' => 'Email',
			'Address' => 'Địa chỉ',
			'Description' => 'Mô tả',
			'Avatar' => 'Ảnh đại diện',
			'Status' => 'Trạng thái',
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
		$criteria->compare('ID_Account',$this->ID_Account);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Phonenumber',$this->Phonenumber,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Avatar',$this->Avatar,true);
		$criteria->compare('Status',$this->Status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getAccountUser(){
               //$sql = "SELECT * FROM `tbl_users` AS users INNER JOIN `tbl_account` AS acc ON users.ID_Account = acc.ID WHERE acc.ID_GroupAcc = 3 ";
               //return CHtml::listData(Users::model()->findBySql($sql), 'ID_Account', 'Name') ;   
               //return Users::model()->findBySql($sql);
               //return CHtml::listData(Users::model()->findAll('with'=>), 'ID_Account', 'Name');
                
               $criteria = new CDbCriteria;
                
               $criteria->select = ' t.ID, t.Name ';
               $criteria->join = ' JOIN `tbl_account` ON t.ID_Account = tbl_account.ID ';
               $criteria->addCondition(' tbl_account.ID_GroupAcc = 3 ');
               return CHtml::listData(Users::model()->findAll($criteria), 'ID', 'Name');
        }
}
    