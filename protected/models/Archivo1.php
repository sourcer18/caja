<?php

/**
 * This is the model class for table "archivo1".
 *
 * The followings are the available columns in table 'archivo1':
 * @property integer $idArchivo
 * @property string $nombre
 * @property string $descripcion
 * @property integer $tamanio
 * @property string $tipo
 * @property string $url
 * @property string $extension
 */
class Archivo1 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'archivo1';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, descripcion, tamanio, tipo, url, extension', 'required'),
			array('tamanio', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>22),
			array('descripcion', 'length', 'max'=>222),
			array('tipo, url, extension', 'length', 'max'=>333),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idArchivo, nombre, descripcion, tamanio, tipo, url, extension', 'safe', 'on'=>'search'),
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
			'idArchivo' => 'Id Archivo',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'tamanio' => 'Tamanio',
			'tipo' => 'Tipo',
			'url' => 'Url',
			'extension' => 'Extension',
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

		$criteria->compare('idArchivo',$this->idArchivo);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tamanio',$this->tamanio);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('extension',$this->extension,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Archivo1 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
