<?php

/**
 * This is the model class for table "{{grouprules}}".
 *
 * The followings are the available columns in table '{{grouprules}}':
 * @property integer $ID
 * @property integer $ID_GroupAcc
 * @property integer $ID_menu
 * @property string $Status
 *
 * The followings are the available model relations:
 * @property Groupaccount $iDGroupAcc
 * @property Menu $iDMenu
 */
class Grouprules extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{grouprules}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_GroupAcc, ID_menu', 'numerical', 'integerOnly'=>true),
			array('Status', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, ID_GroupAcc, ID_menu, Status', 'safe', 'on'=>'search'),
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
			'iDMenu' => array(self::BELONGS_TO, 'Menu', 'ID_menu'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'ID_GroupAcc' => 'Nhóm tài khoản',
			'ID_menu' => 'Danh mục',
			'Status' => 'Trạng thái',
			'ID_GroupAcc:' => 'Nhóm tài khoản:',
			'ID_menu:' => 'Danh mục:',
			'Status:' => 'Trạng thái:',
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
		$criteria->compare('ID_GroupAcc',$this->ID_GroupAcc);
		$criteria->compare('ID_menu',$this->ID_menu);
		$criteria->compare('Status',$this->Status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Grouprules the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
