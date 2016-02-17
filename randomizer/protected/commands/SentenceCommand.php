<?php

/**
 * Class SentenceCommand
 */
class SentenceCommand extends CConsoleCommand
{
	/**
	 * @var array
	 */
	private $words = [
		['Please', 'Just'],
		['cool', 'awesome', 'random'],
		[
			'rotate quickly and random',
			'rotate fast and random',
			'spin and be random'
		]
	];

	/**
	 * Generate and save randomization result (if need)
	 */
	public function actionGenerate()
	{
		$random = [];

		foreach ($this->words as $position)
		{
			$random[] = $position[array_rand($position)];
		}

		list($a, $b, $c) = $random;

		$sentence = new Sentence();
		$sentence->varBody = $a . " make this " . $b . " test sentence " . $c;

		echo "Result: \n" . $sentence->varBody . "\n";

		if ($sentence->isUnique())
		{
			$sentence->saveUnique();
		}
	}
}