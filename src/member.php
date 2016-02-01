<?php

namespace Leif\Models;
  //projectname\directory
use Person; //if \Person, php assumes na naa sa root dir ; CodingMatters\Models\Person*
use Award;
use Education;
use SeminarsTrainings;
use HighestPosition;

class Member extends Person
{
    public $membershipstatus;
    public $company;
    public $companyaddress;
    public $profession;
    public $status;
    public $JCIsenatorialno;
    public $dateofinduction;

    public function setMemStatus($membershipstatus)
    {
    	$this->membershipstatus = $membershipstatus;
    }

    public function setCompany($company)
    {
    	$this->company = $company;
    }

    public function setCompanyAddress($companyaddress)
    {
		$this->companyaddress = $companyaddress;
    }

    public function setProfession($profession)
    {
		$this->profession = $profession;
    }

    public function setStatus($status)
    {
		$this->status = $status;
    }

    public function setJCISenatorialNo($JCIsenatorialno)
    {
		$this->JCIsenatorialno = $JCIsenatorialno;
    }

    public function setDateofIndution($dateofinduction)
    {
		$this->dateofinduction = $dateofinduction;
    }

    public function getMemstatus()
    {
		return $this->membershipstatus;
    }

    public function getCompany()
    {
		return $this->company;
    }

    public function getCompanyAddress()
    {
		return $this->companyaddress;
    }

    public function getProfession()
    {
		return $this->profession;
    }

    public function getStatus()
    {
		return $this->status;
    }

    public function getJCISenatorialNo()
    {
		return $this->JCIsenatorialno;
    }

    public function getDateofInduction()
    {
		return $this->dateofinduction;
    }

}

?>