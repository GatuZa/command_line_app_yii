<?php

/**
 * This is the model base class for the table "sentence".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Sentence".
 *
 * Columns in table "sentence" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $intSentenceID
 * @property string $varBody
 *
 */
abstract class BaseSentence extends GxActiveRecord{
	/**
	 * @param string $className
	 *
	 * @return CActiveRecord
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string
	 */
	public function tableName()
	{
		return 'sentence';
	}

	/**
	 * @param int $n
	 *
	 * @return string
	 */
	public static function label($n = 1)
	{
		return Yii::t('app', 'Sentence|Sentences', $n);
	}

	/**
	 * @return array|string
	 */
	public static function representingColumn()
	{
		return 'varBody';
	}

	/**
	 * @return array
	 */
	public function rules()
	{
		return array(
			array('varBody', 'required'),
			array('varBody', 'length', 'max'=>255),
			array('intSentenceID, varBody', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array
	 */
	public function relations()
	{
		return array(
		);
	}

	/**
	 * @return array
	 */
	public function pivotModels()
	{
		return array(
		);
	}

	/**
	 * @return array
	 */
	public function attributeLabels()
	{
		return array(
			'intSentenceID' => Yii::t('app', 'Int Sentence'),
			'varBody' => Yii::t('app', 'Var Body'),
		);
	}

	/**
	 * @return CActiveDataProvider
	 */
	public function search()
	{
		$criteria = new CDbCriteria;

		$criteria->compare('intSentenceID', $this->intSentenceID, true);
		$criteria->compare('varBody', $this->varBody, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}