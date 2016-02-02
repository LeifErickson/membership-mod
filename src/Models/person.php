<?php

namespace SecretarialSystem\Models;

class Person
{
	public $fname;
	public $lname;
	public $mname;
	public $bday;
	public $st_address;
	public $city;
	public $province;
	public $country;
	public $zipcode;
	public $religion;
	public $gender;
	public $mobile;
	public $phone;
	public $fax;
	public $email;

public function setName($fname,$lname,$mname){
	$this->fname=$fname;
	$this->lname=$lname;
	$this->mname=$mname;
}
public function setBday($bday){
	$this->bday = $bday;
}
public function setStAddress($st_address){
	$this->st_address = $st_address;
}
public function setCity($city){
	$this->city = $city;
}
public function setProvince($province){
	$this->province = $province;
}
public function setCountry($country){
	$this->country = $country;
}
public function setZipcode($zipcode){
	$this->zipcode = $zipcode;
}
public function setReligion($religion){
	$this->religion = $religion;
}
public function setGender($gender){
	$this->gender = $gender;
}
public function setMobile($mobile){
	$this->mobile = $mobile;
}
public function setPhone($phone){
	$this->phone = $phone;
}
public function setFax($fax){
	$this->fax = $fax;
}
public function setEmail($email){
	$this->email = $email;
}
public function getName(){
	return $this->fname . " " . $this->mname . " ". $this->lname;
}
public function getBday(){
	return $this -> bday;
}
public function getStAddress(){
	return $this -> st_address;
}
public function getCity(){
	return $this -> city;
}
public function getProvince(){
	return $this -> province;
}
public function getCountry(){
	return $this -> country;
}
public function getZipcode(){
	return $this -> zipcode;
}
public function getReligion(){
	return $this -> religion;
}
public function getGender(){
	return $this -> gender;
}
public function getMobile(){
	return $this -> mobile;
}
public function getPhone(){
	return $this -> phone;
}
public function getFax(){
	return $this -> fax;
}
public function getEmail(){
	return $this -> email;
}



}
?>