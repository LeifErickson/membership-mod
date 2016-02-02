<?php

use PHPunit_Framework_TestCase;
use SecretarialSystem\Models\Education;

class EducationTest extends PHPunit_Framework_TestCase
{
    public function testEducation()
	{
		$education = new education();
		$education->setCategory("College");
		$education->setSchool("ICEHS");
		$education->setYrGrad("2012");

		echo("\n".$education->getCategory()."\n");
		echo($education->getSchool()."\n");
		echo($education->getYrGrad()."\n");
		$this->assertTrue(true);
	}

}
