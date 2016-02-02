<?php

use PHPunit_Framework_TestCase;
use SecretarialSystem\Models\SeminarsTrainings;

class SeminarsTrainingTest extends PHPunit_Framework_TestCase
{
    public function testSeminarsTraining()
	{
		$semtrain = new seminarstrainings();
		$semtrain->setCategory("Test Category");
		$semtrain->setName("Aim Global Seminar");
		$semtrain->setDescription("Seminar For Aim Global");
		$semtrain->setYear("2016");
		
		//echo("\n".$semtrain->getMemStatus()."\n");
		echo("\n".$semtrain->getCategory()."\n");
		echo($semtrain->getName()."\n");
		echo($semtrain->getDescription()."\n");
		echo($semtrain->getYear()."\n");
		$this->assertTrue(true);
	}

}
