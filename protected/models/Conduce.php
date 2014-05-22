<?php

/**
 * This is the model class for table "conduce".
 *
 * The followings are the available columns in table 'conduce':
 * @property string $id_conduce
 * @property string $conductor_id_conductor
 * @property string $autobus_id_autobus
 * @property string $viaje_id_viaje
 */
class Conduce extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'conduce';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('conductor_id_conductor, autobus_id_autobus, viaje_id_viaje', 'required'),
			array('conductor_id_conductor, autobus_id_autobus, viaje_id_viaje', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_conduce, conductor_id_conductor, autobus_id_autobus, viaje_id_viaje', 'safe', 'on'=>'search'),
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
			//'autobus'=>array(self::HAS_ONE,'Autobus','autobus_id_autobus'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_conduce' => 'Id Conduce',
			'conductor_id_conductor' => 'Conductor Id Conductor',
			'autobus_id_autobus' => 'Autobus Id Autobus',
			'viaje_id_viaje' => 'Viaje Id Viaje',
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

		$criteria->compare('id_conduce',$this->id_conduce,true);
		$criteria->compare('conductor_id_conductor',$this->conductor_id_conductor,true);
		$criteria->compare('autobus_id_autobus',$this->autobus_id_autobus,true);
		$criteria->compare('viaje_id_viaje',$this->viaje_id_viaje,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Conduce the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
