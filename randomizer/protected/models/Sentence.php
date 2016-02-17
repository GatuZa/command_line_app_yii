<?php

Yii::import('application.models._base.BaseSentence');

/**
 * Class Sentence
 */
class Sentence extends BaseSentence
{
	/**
	 * @param string $className
	 *
	 * @return CActiveRecord
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}


	/**
	 * @return array
	 */
	public function behaviors()
	{
		return [
			'uniqueBehavior' => [
				'class' => 'ext.behaviors.UniqueBehavior'
			]
		];
	}
}