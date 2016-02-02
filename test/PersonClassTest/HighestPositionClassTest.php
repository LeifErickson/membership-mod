<?php

use PHPunit_Framework_TestCase;
use SecretarialSystem\Models\HighestPosition;

class HighestPositionClassTest extends PHPunit_Framework_TestCase
{
    public function testHighestPosition()
	{
		$member = new highestposition();
		$member->setCategory("Ranking");
		$member->setPositionheld("1st");
		$member->setHPYear("2015");
		
		echo("\n".$member->getCategory()."\n");
		echo($member->getPositionheld()."\n");
		echo($member->getHPYear());
		$this->assertTrue(true);
	}

}
