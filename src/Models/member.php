<?php

namespace SecretarialSystem\Models; //ang secretarial system kay nka autoload na sya sa composer.json_decode
									//"SecretarialSystem\\":"src/", -> gi shortcut sya
									//tas use "composer dump-autoload" if dli pa makita ang class
use SecretarialSystem\Models\Person; //if \Person, php assumes na naa sa root dir ; CodingMatters\Models\Person*
use SecretarialSystem\Models\Award;
use SecretarialSystem\Models\Education;
use SecretarialSystem\Models\SeminarsTrainings;
use SecretarialSystem\Models\HighestPosition;

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