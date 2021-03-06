<?php

/**
 * This is the model class for table "analista".
 *
 * The followings are the available columns in table 'analista':
 * @property integer $Cedula
 * @property string $Contrasena
 * @property string $Rol
 * @property string $Nombre
 * @property string $Apellido
 */
class Analista extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'analista';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cedula, Contrasena, Rol, Nombre, Apellido', 'required'),
			array('Cedula', 'numerical', 'integerOnly'=>true),
			array('Contrasena, Rol, Nombre, Apellido', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cedula, Contrasena, Rol, Nombre, Apellido', 'safe', 'on'=>'search'),
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
			'Cedula' => 'Cedula',
			'Contrasena' => 'Contrasena',
			'Rol' => 'Rol',
			'Nombre' => 'Nombre',
			'Apellido' => 'Apellido',
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

		$criteria->compare('Cedula',$this->Cedula);
		$criteria->compare('Contrasena',$this->Contrasena,true);
		$criteria->compare('Rol',$this->Rol,true);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Apellido',$this->Apellido,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Analista the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
