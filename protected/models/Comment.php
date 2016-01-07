<?php

/**
 * This is the model class for table "{{comment}}".
 *
 * The followings are the available columns in table '{{comment}}':
 * @property integer $ID
 * @property integer $ID_post
 * @property string $Date_comment
 * @property string $Student
 * @property string $Content
 *
 * The followings are the available model relations:
 * @property Post $iDPost
 */
class Comment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{comment}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_post, Content', 'required'),
			array('ID_post', 'numerical', 'integerOnly'=>true),
			array('Student', 'length', 'max'=>30),
			array('Content', 'length', 'max'=>500),
			array('Date_comment', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, ID_post, Date_comment, Student, Content', 'safe', 'on'=>'search'),
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
			'iDPost' => array(self::BELONGS_TO, 'Post', 'ID_post'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'ID_post' => 'Bài viết',
			'Date_comment' => 'Ngày bình luận',
			'Student' => 'Học viên',
			'Content' => 'Nội dung',
			'ID_post:' => 'Bài viết:',
			'Date_comment:' => 'Ngày bình luận:',
			'Student:' => 'Học viên:',
			'Content:' => 'Nội dung:',
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
		$criteria->compare('ID_post',$this->ID_post);
		$criteria->compare('Date_comment',$this->Date_comment,true);
		$criteria->compare('Student',$this->Student,true);
		$criteria->compare('Content',$this->Content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
