<?php

/**
 * This is the model class for table "autobus".
 *
 * The followings are the available columns in table 'autobus':
 * @property string $id_autobus
 * @property string $matricula
 * @property string $marca
 * @property string $numero_pasajeros
 */
class Autobus extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'autobus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('matricula, marca', 'length', 'max'=>255),
			array('numero_pasajeros', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_autobus, matricula, marca, numero_pasajeros', 'safe', 'on'=>'search'),
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
			'id_autobus' => 'Id Autobus',
			'matricula' => 'Matricula',
			'marca' => 'Marca',
			'numero_pasajeros' => 'Numero Pasajeros',
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

		$criteria->compare('id_autobus',$this->id_autobus,true);
		$criteria->compare('matricula',$this->matricula,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('numero_pasajeros',$this->numero_pasajeros,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Autobus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
