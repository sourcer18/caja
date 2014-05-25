<?php

/**
 * This is the model class for table "archivo".
 *
 * The followings are the available columns in table 'archivo':
 * @property integer $idArchivo
 * @property string $nombre
 * @property string $descripcion
 * @property string $tamanio
 * @property string $tipo
 * @property string $url
 * @property string $extension
 * @property integer $iPadre
 * @property integer $idPropietario
 * @property integer $idPermiso
 *
 * The followings are the available model relations:
 * @property Archivo $iPadre0
 * @property Archivo[] $archivos
 * @property Usuarios $idPropietario0
 * @property Permisos $idPermiso0
 */
class Archivo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'archivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, tipo, idPermiso', 'required'),
			array('iPadre, idPropietario, idPermiso', 'numerical', 'integerOnly'=>true),
			array('nombre, descripcion, tamanio', 'length', 'max'=>20),
			array('tipo', 'length', 'max'=>1),
			array('url', 'length', 'max'=>200),
			array('extension', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idArchivo, nombre, descripcion, tamanio, tipo, url, extension, iPadre, idPropietario, idPermiso', 'safe', 'on'=>'search'),
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
			'iPadre0' => array(self::BELONGS_TO, 'Archivo', 'iPadre'),
			'archivos' => array(self::HAS_MANY, 'Archivo', 'iPadre'),
			'idPropietario0' => array(self::BELONGS_TO, 'Usuarios', 'idPropietario'),
			'idPermiso0' => array(self::BELONGS_TO, 'Permisos', 'idPermiso'),
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
			'iPadre' => 'I Padre',
			'idPropietario' => 'Id Propietario',
			'idPermiso' => 'Id Permiso',
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
		$criteria->compare('tamanio',$this->tamanio,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('extension',$this->extension,true);
		$criteria->compare('iPadre',$this->iPadre);
		$criteria->compare('idPropietario',$this->idPropietario);
		$criteria->compare('idPermiso',$this->idPermiso);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Archivo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
