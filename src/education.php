<?php
class Education{
	public $category;
	public $school;
	public $yrgrad;

public function setCategory($category){
	$this->category=$category;
}
public function setSchool($school){
	$this->school=$school;
}
public function setYrGrad($yrgrad){
	$this->yrgrad=$yrgrad;
}
public function getCategory(){
	return $this -> category;
}
public function getSchool(){
	return $this -> school;
}
public function getYrGrad(){
	return $this -> yrgrad;
}

}
?>