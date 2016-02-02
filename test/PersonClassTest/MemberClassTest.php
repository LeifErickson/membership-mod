<?php

use PHPunit_Framework_TestCase;
use SecretarialSystem\Models\Member;

class MemberClassTest extends PHPunit_Framework_TestCase
{
    public function testPerson()
	{
		$member = new member();
		$member->setMemStatus("active");
		$member->setCompany("CodingMatters");
		$member->setCompanyAddress("Iligan City");
		$member->setProfession("Pro Programmer");
		$member->setStatus("Taken");
		$member->setJCIsenatorialno("xxx-xxx-xxx");
		$member->setDateofInduction("xx-xx-xx");
		
		echo("\n".$member->getMemStatus()."\n");
		echo($member->getCompany()."\n");
		echo($member->getCompanyAddress()."\n");
		echo($member->getProfession()."\n");
		echo($member->getStatus()."\n");
		echo($member->getJCIsenatorialno()."\n");
		echo($member->getDateofInduction()."\n");
		$this->assertTrue(true);
	}

}
