<?php
class HighestPosition{
public $category;
public $positionheld;
public $year;

public function setCategory($category){
	$this->category=$category;
}
public function setPositionheld($positionheld){
	$this->positionheld=$positionheld;
}
public function getCategory(){
	return $this -> category;
}
public function getPositionheld(){
	return $this -> positionheld;
}
public function setCategory1($category1){
	$this->category1=$category1;
}
}
?>