<?php

/**
 * This is the model class for table "viaje".
 *
 * The followings are the available columns in table 'viaje':
 * @property string $id_viaje
 * @property string $autobus_id_autobus
 * @property string $fecha
 * @property string $hora
 * @property string $destino
 * @property string $precio
 */
class Viaje extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'viaje';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('autobus_id_autobus, fecha, hora, destino', 'required'),
			array('autobus_id_autobus, hora, precio', 'length', 'max'=>10),
			array('destino', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_viaje, autobus_id_autobus, fecha, hora, destino, precio', 'safe', 'on'=>'search'),
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
			'autobus'=>array(self::BELONGS_TO,'Autobus','autobus_id_autobus'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_viaje' => 'Id Viaje',
			'autobus_id_autobus' => 'Autobus Id Autobus',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'destino' => 'Destino',
			'precio' => 'Precio',
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

		$criteria->compare('id_viaje',$this->id_viaje,true);
		$criteria->compare('autobus_id_autobus',$this->autobus_id_autobus,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('destino',$this->destino,true);
		$criteria->compare('precio',$this->precio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Viaje the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
