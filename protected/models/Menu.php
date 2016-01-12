<?php

/**
 * This is the model class for table "{{menu}}".
 *
 * The followings are the available columns in table '{{menu}}':
 * @property integer $ID
 * @property string $Name
 * @property string $URL
 * @property string $Status
 * @property integer $Parent_ID
 * @property string $Type
 *
 * The followings are the available model relations:
 * @property Grouprules[] $grouprules
 */
class Menu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{menu}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Parent_ID', 'numerical', 'integerOnly'=>true),
			array('Name, URL', 'length', 'max'=>100),
			array('Status', 'length', 'max'=>30),
			array('Type', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Name, URL, Status, Parent_ID, Type', 'safe', 'on'=>'search'),
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
			'grouprules' => array(self::HAS_MANY, 'Grouprules', 'ID_menu'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'Name' => 'Tên',
			'URL' => 'Đường dẫn',
			'Status' => 'Trạng thái',
			'Parent_ID' => 'ID cha',
			'Type' => 'Cấp menu',
			'Name:' => 'Tên:',
			'URL:' => 'Đường dẫn:',
			'Status:' => 'Trạng thái:',
			'Parent_ID:' => 'ID cha:',
			'Type:' => 'Cấp menu:',
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
		$criteria->compare('URL',$this->URL,true);
		$criteria->compare('Status',$this->Status,true);
		$criteria->compare('Parent_ID',$this->Parent_ID);
		$criteria->compare('Type',$this->Type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                            'pageSize'=>20,
                        ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Menu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getMenu($parent_id){
		$menus = $this->model()->findAll('Parent_ID=:Parent_ID ORDER BY Name ASC', array('Parent_ID'=>$parent_id));
		$_menu = array();
		$base = Yii::app()->request->baseUrl.'/index.php';
		foreach($menus as $menu){
                    if($menu->URL != 'javascript:;'){
                        $_menu[] = array('label'=>$menu->Name, 'url'=>$base.$menu->URL, 'submenuOptions'=>array('class'=>'submenu'),'items'=>$this->getMenu($menu->ID));
                    } else {
                        $_menu[] = array('label'=>$menu->Name, 'url'=>$menu->URL, 'submenuOptions'=>array('class'=>'submenu'),'items'=>$this->getMenu($menu->ID));
                    }
			
		}

		return $_menu;
	}
        
        public static function getMenuOptions(){
            $Data = array(0=>'Trống');
            $listData = CHtml::listData(Menu::model()->findAll(), 'ID', 'Name');
            foreach($listData AS $key=>$value){
                $Data[$key] = $value;
            }
            return $Data;
        }
}
