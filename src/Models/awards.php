<?php

namespace SecretarialSystem\Models;

class Awards{
public $category;
public $award;
public $year;

public function setCategory($category){
	$this->category=$category;
}
public function setAward($award){
	$this->award=$award;
}
public function setYear($year){
	$this->year=$year;
}
public function getCategory(){
	return $this -> category;
}
public function getAward(){
	return $this -> award;
}
public function getYear(){
	return $this -> year;
}
}
?>