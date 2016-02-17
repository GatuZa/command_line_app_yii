<?php

class m160217_170900_create_sentence_table extends CDbMigration
{
	/**
	 * Create sentence table for unique randomization results
	 */
	public function up()
	{
		$this->createTable('sentence', [
			'intSentenceID' => 'INT(3) UNSIGNED NOT NULL AUTO_INCREMENT',
			'varBody' => 'CHAR(255) NOT NULL',
			'PRIMARY KEY (`intSentenceID`)',
			'UNIQUE INDEX `varBody` (`varBody`)'
		]);
	}

	/**
	 * Drop sentence table
	 */
	public function down()
	{
		$this->dropTable('sentence');
	}
}