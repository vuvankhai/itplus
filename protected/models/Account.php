<?php

/**
 * This is the model class for table "{{account}}".
 *
 * The followings are the available columns in table '{{account}}':
 * @property integer $ID
 * @property string $Username
 * @property string $Password
 * @property string $Type
 * @property string $Status
 * @property integer $ID_GroupAcc
 *
 * The followings are the available model relations:
 * @property Groupaccount $iDGroupAcc
 * @property Post[] $posts
 * @property Student[] $students
 * @property Users[] $users
 */
class Account extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{account}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Username, Password', 'required'),
			array('ID_GroupAcc', 'numerical', 'integerOnly'=>true),
			array('Username', 'length', 'max'=>25),
			array('Password, Type, Status', 'length', 'max'=>20),
                        
                        //check isset username
                        array('Username','unique','message' => 'Tài khoản đã tồn tại !'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Username, Password, Type, Status, ID_GroupAcc', 'safe', 'on'=>'search'),
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
			'iDGroupAcc' => array(self::BELONGS_TO, 'Groupaccount', 'ID_GroupAcc'),
			'posts' => array(self::HAS_MANY, 'Post', 'ID_Account'),
			'students' => array(self::HAS_MANY, 'Student', 'ID_Account'),
			'users' => array(self::HAS_MANY, 'Users', 'ID_Account'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'Username' => 'Tên đăng nhập',
			'Password' => 'Mật khẩu',
			'Type' => 'Type',
			'Status' => 'Trạng thái',
			'ID_GroupAcc' => 'Chức vụ',
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
		$criteria->compare('Username',$this->Username,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Type',$this->Type,true);
		$criteria->compare('Status',$this->Status,true);
		$criteria->compare('ID_GroupAcc',$this->ID_GroupAcc);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Account the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
}
