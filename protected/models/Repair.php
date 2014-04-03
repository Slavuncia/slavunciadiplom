<?php

/**
 * This is the model class for table "repair".
 *
 * The followings are the available columns in table 'repair':
 * @property integer $id
 * @property string $Kartidj
 * @property string $Fotobaraban
 * @property string $Val_pervicnovo_zareada
 * @property string $Magnitnii_val
 * @property string $Doziruushee_lezvie
 * @property string $Rakel
 */
class Repair extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'repair';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Kartidj, Fotobaraban, Val_pervicnovo_zareada, Magnitnii_val, Doziruushee_lezvie, Rakel', 'required'),
			array('Kartidj, Fotobaraban, Val_pervicnovo_zareada, Magnitnii_val, Doziruushee_lezvie, Rakel', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Kartidj, Fotobaraban, Val_pervicnovo_zareada, Magnitnii_val, Doziruushee_lezvie, Rakel', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'Kartidj' => 'Картридж',
			'Fotobaraban' => 'Фотобарабан',
			'Val_pervicnovo_zareada' => 'Вал первичного заряда',
			'Magnitnii_val' => 'Магнитный вал',
			'Doziruushee_lezvie' => 'Дозирующее лезвие',
			'Rakel' => 'Ракель',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('Kartidj',$this->Kartidj,true);
		$criteria->compare('Fotobaraban',$this->Fotobaraban,true);
		$criteria->compare('Val_pervicnovo_zareada',$this->Val_pervicnovo_zareada,true);
		$criteria->compare('Magnitnii_val',$this->Magnitnii_val,true);
		$criteria->compare('Doziruushee_lezvie',$this->Doziruushee_lezvie,true);
		$criteria->compare('Rakel',$this->Rakel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Repair the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
