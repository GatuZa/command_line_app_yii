<?php

/**
 * Class UniqueBehavior
 */
class UniqueBehavior extends CActiveRecordBehavior
{
	/**
	 * @var
	 */
	public $sentence;

	/**
	 * @return bool
	 */
	public function isUnique()
	{
		$res = $this->owner->findByAttributes(['varBody' => $this->owner->varBody]);

		echo $res != null ? "This sentence already exist! Try again :)\n" : "Writing to DB...\n";
		return $res != null ? false : true;
	}

	/**
	 * Save unique values
	 */
	public function saveUnique()
	{
		echo $this->owner->save() ? "Saved! Good boy!\n" : "Error!\n";
	}
}