<?php

use PHPunit_Framework_TestCase;
use SecretarialSystem\Models\Member;

class MembershipTest extends PHPunit_Framework_TestCase
{
    public function testAddMember()
	{
		$member = new member();
		$member->setName("Leif","de Gracia","Adante");
		echo($member->getName());
		$this->assertTrue(true);
	}

}
