<?php

use PHPunit_Framework_TestCase;
use SecretarialSystem\Models\Member;

class PersonClassTest extends PHPunit_Framework_TestCase
{
    public function testPerson()
	{
		$member = new member();
		$member->setName("Leif","de Gracia","Adante");
		$member->setBday("aug 24, 1996");
		$member->setStAddress("Zone 1-A");
		//$member->setMemStatus("active");
		$member->setCity("IliganCity");
		$member->setProvince("Lanao del Norte");
		$member->setCountry("Philippines");
		$member->setZipcode("9200");
		$member->setReligion("Catholic");
		$member->setGender("Fab Male");
		$member->setMobile("09354641546");
		$member->setPhone("2239170");
		$member->setFax("xxx-xxx-xxx");
		$member->setEmail("dgracialeif@yahoo.com");
		
		//echo("\n".$member->getMemStatus()."\n");
		echo("\n".$member->getName()."\n");
		echo($member->getBday()."\n");
		echo($member->getStAddress()."\n");
		echo($member->getCity()."\n");
		echo($member->getProvince()."\n");
		echo($member->getCountry()."\n");
		echo($member->getZipcode()."\n");
		echo($member->getReligion()."\n");
		echo($member->getGender()."\n");
		echo($member->getMobile()."\n");
		echo($member->getPhone()."\n");
		echo($member->getFax()."\n");
		echo($member->getEmail()."\n");
		$this->assertTrue(true);
	}

}
