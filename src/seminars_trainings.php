<?php
class SeminarsTrainings{
public $category;
public $name;
public $description;
public $year;
        
public function setCategory($category){
	$this->category=$category;
}
public function setName($name){
	$this->name=$name;
}
public function setDescription($description){
	$this->description=$description;
}
public function setYear($year){
	$this->year=$year;
}
public function getCategory(){
	return $this -> category;
}
public function getName(){
	return $this -> name;
}
public function getDescription(){
	return $this -> description;
}
public function getYear(){
	return $this -> year;
}

}
?>