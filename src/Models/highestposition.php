<?php

namespace SecretarialSystem\Models;

class HighestPosition
{
	public $category;
	public $positionheld;
	public $year;

public function setCategory($category)
{
	$this->category=$category;
}
public function setPositionheld($positionheld)
{
	$this->positionheld=$positionheld;
}
public function setHPYear($year)
{
	$this->year=$year;
}
public function getCategory()
{
	return $this -> category;
}
public function getPositionheld()
{
	return $this -> positionheld;
}
public function getHPYear()
{
	return $this->year;
}
}
?>