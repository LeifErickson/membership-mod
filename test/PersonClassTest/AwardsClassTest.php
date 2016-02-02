<?php

use PHPunit_Framework_TestCase;
use SecretarialSystem\Models\Awards;

class AwardClassTest extends PHPunit_Framework_TestCase
{
    public function testAward()
	{
		$awards = new awards();
		$awards->setAwardCategory("Fab Category");
		$awards->setAward("Top 1");
		$awards->setYear("Always");
		
		//echo("\n".$awards->getMemStatus()."\n");
		echo("\n".$awards->getAwardCategory()."\n");
		echo($awards->getAward()."\n");
		echo($awards->getYear()."\n");
		$this->assertTrue(true);
	}

}
